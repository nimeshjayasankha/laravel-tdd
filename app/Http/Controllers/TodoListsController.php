<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class TodoListsController extends Controller
{
    public function index()
    {
        return ToDo::get();
    }
}