<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    const PROJECT_CODE = 'op001';

    public function home() {
        return view(
            $this::PROJECT_CODE.'.home',
            []
        );
    }
}
