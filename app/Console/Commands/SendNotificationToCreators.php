<?php

namespace App\Console\Commands;

use App\Http\Services\CourseService;
use App\Http\Services\UserProgressService;
use App\Http\Services\UserService;
use App\Http\Services\UserTakenCourseService;
use App\Mail\ConfirmLessonsNotification;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\Isolatable;
use Illuminate\Support\Facades\Mail;

class SendNotificationToCreators extends Command implements Isolatable
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-notification-to-creators';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send notifications to creators that now approved pupils finished lessons';

    /**
     * Execute the console command.
     */
    public function handle(UserService $userService, CourseService $courseService, UserTakenCourseService $takenCourseService): void
    {
        foreach($userService->getAllCreators() as $creator) {
            foreach($courseService->getAllByAuthor($creator->id) as $course)
                if($takenCourseService->findWaiting($course->id)->count() != 0){
                    Mail::to($creator)->send(new ConfirmLessonsNotification($creator));
                    break;
                }
        }
    }
}
