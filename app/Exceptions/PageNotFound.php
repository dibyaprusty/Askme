<?php

namespace App\Exceptions;

use Exception;

class PageNotFound extends Exception
{
    public function report()
    {
        //
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render()
    {
        return view(errors.page_not_found);
    }
}
