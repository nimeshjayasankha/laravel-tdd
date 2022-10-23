<?php

use App\Http\Controllers\TodoListsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('todo-lists', [TodoListsController::class, 'index'])->name('todo-lists');