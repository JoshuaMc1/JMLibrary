<?php

namespace App\Enum;

enum ClientType: string
{
    case Student = 'student';
    case Teacher = 'teacher';
    case Other = 'other';
}
