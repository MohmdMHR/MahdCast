<?php

namespace Mahdcats\Exceptions;

use Exception;

class AuthFailedException extends Exception{

    public function render(){
        return response()->json([
            'message'=> 'Thses credentials do not match our records.'
        ], 422);
    }

}