<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Contracts\Queue\Factory as Queue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendUserRegisteredEmail implements Mailable
{
    use InteractsWithQueue;

    public function handle(UserRegistered $event)
    {
        Mail::to($event->user->email)->send(new SendUserRegisteredEmail($event->user));
    }

    /**
     * @param $mailer
     * @return \Illuminate\Mail\SentMessage|null
     */
    public function send($mailer)
    {
        // TODO: Implement send() method.
    }

    /**
     * @param Queue $queue
     * @return mixed
     */
    public function queue(Queue $queue)
    {
        // TODO: Implement queue() method.
    }

    /**
     * @param $delay
     * @param Queue $queue
     * @return mixed
     */
    public function later($delay, Queue $queue)
    {
        // TODO: Implement later() method.
    }

    /**
     * @param $address
     * @param $name
     * @return Mailable
     */
    public function cc($address, $name = null)
    {
        // TODO: Implement cc() method.
    }

    /**
     * @param $address
     * @param $name
     * @return $this
     */
    public function bcc($address, $name = null)
    {
        // TODO: Implement bcc() method.
    }

    /**
     * @param $address
     * @param $name
     * @return $this
     */
    public function to($address, $name = null)
    {
        // TODO: Implement to() method.
    }

    /**
     * @param $locale
     * @return $this
     */
    public function locale($locale)
    {
        // TODO: Implement locale() method.
    }

    /**
     * @param $mailer
     * @return $this
     */
    public function mailer($mailer)
    {
        // TODO: Implement mailer() method.
    }
}
