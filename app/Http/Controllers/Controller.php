<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function map_tutorial()
    {
        return view('admin.tutorials.map_tutorial');
    }
}
