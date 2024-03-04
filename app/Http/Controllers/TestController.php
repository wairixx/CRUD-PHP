<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
        public function viewTable()
        {
        return view('table');
        }

        public function viewForm()
        {
        return view('form');
        }
}
