<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function Index(Request $request)
    {
        dd($request->ip());
    }
}
