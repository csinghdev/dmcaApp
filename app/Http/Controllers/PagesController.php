<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;


class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
}
