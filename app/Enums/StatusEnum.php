<?php

namespace App\Enums;

enum StatusEnum :string
{
    case Active = 'active';
    case Completed = 'completed';
    case Canceled = 'canceled';
}
