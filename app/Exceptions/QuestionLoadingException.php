<?php

namespace App\Exceptions;

use Exception;

class QuestionLoadingException extends Exception
{
    function report() {}

    function render() {
        return view('errors.error-loading-questions');
    }
}
