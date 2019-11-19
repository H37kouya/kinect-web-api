<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetectedController extends Controller
{
    public function detected(Request $request)
    {
        \Log::debug($request);
    }
}
