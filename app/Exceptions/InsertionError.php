<?php

namespace App\Exceptions;

use Exception;

class InsertionError extends Exception
{
    function report() {}

    function render() {
        return view('errors.error-insertion');
    }
}
