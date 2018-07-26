<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Datatables;

class DatatablesController extends Controller
{
  public function index()
  {
      return view('datatable.index');
  }

  public function anyData()
  {
    return Datatables::of(User::query())->make(true);
  }
}
