<?php

namespace App\Enums;

enum TakingCourseStatusTypeEnum: string
{
    case REQUESTED = 'requested';
    case LOGGED = 'logged';
    case ON_COURSE = 'on_course';
    case WAITING = 'waiting';
    case TESTING = 'testing';
    case FINISH_REQUEST = 'finish_request';
    case FINISHED = 'finished';
    case FAILED = 'failed';
    case FAILED_TEST = 'failed_test';

    public static function toArray(): array
    {
        return array_map(fn($res) => $res->value, self::cases());
    }
}
