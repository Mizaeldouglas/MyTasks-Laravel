<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  //
  public function index(Request $request)
  {
    $tasks = Task::all()->take(5);
    $authUser = Auth::user();
    $authUserIslogout = Auth::check();

    return view('home', ['tasks' => $tasks, 'authUser' => $authUser, 'authUserIslogout' => $authUserIslogout]);
  }

}
