<?php

namespace App\Enums;

enum RepositoryParamEnum: string
{
    case SELECT = 'select';
    case WITH = 'with';
    case LIMIT = 'limit';
    case WITH_COUNT = 'withCount';
    case ONLY_TRASHED = 'onlyTrashed';
    case TO_BASE = 'toBase';
    case LATEST = 'latest';
    case WHERE_IN = 'whereIn';
}
