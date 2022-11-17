<?php

namespace App\Exceptions;

use Exception;

class NotFoundException extends Exception
{        
    public function render($request)
    {       
        return response()->json('Не найдено', 404);
    }
}