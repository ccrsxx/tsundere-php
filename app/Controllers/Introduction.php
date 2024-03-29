<?php

namespace App\Controllers;

class Introduction extends BaseController
{
  public function index(): string
  {
    return view('introduction');
  }
}
