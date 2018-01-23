<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view('head_page');

    }

}
