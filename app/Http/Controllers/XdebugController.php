<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XdebugController extends Controller
{
    public function xdebug(Request $request)
    {
        $name = $request->name;

        return 321;
    }
}
