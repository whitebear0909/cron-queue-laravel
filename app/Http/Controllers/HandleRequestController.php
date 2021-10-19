<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\MatchSendEmail;
use App\Http\Controllers\Controller;

class HandleRequestController extends Controller
{
    //
    public function index(Request $request)
    {
        $result = MatchSendEmail::dispatch($request->email);
        return view('welcome');
    }
}
