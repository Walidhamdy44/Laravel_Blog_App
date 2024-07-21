<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
  public function Action()
  {
    $posts = [
      ['id' => 1, 'title' => "PHP", 'CreatedAt' => '2014-02-09', 'user' => "mohamed"],
      ['id' => 2, 'title' => "CSS", 'CreatedAt' => '2013-02-07', 'user' => "Ahmed"],
      ['id' => 3, 'title' => "REACT", 'CreatedAt' => '2022-05-01', 'user' => "omar"],
      ['id' => 4, 'title' => "JS", 'CreatedAt' => '2023-12-01', 'user' => "walid"],
    ];

    return view('welcome', ['posts' => $posts]);
  }
}
