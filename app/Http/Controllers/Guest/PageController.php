<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Route;

class PageController extends Controller
{
    public function index() {

        $routes = Route::all();

        return view('home', compact('routes'));
    }
}
