<?php

namespace App\Exceptions;

use Exception;

class EmailAlreadyExistsException extends Exception
{
    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return redirect()->back()->withErrors(['email' => 'Email already exists.']);
    }
}
