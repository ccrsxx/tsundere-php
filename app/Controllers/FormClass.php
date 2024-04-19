<?php

namespace App\Controllers;

class FormClass extends BaseController
{
  public function index(): string
  {
    return view('form_class');
  }

  public function print_form_result(): string
  {
    $code = $this->request->getPost('code');
    $name = $this->request->getPost('name');
    $sks = $this->request->getPost('sks');

    return view('form_class_result', [
      'code' => $code,
      'name' => $name,
      'sks' => $sks
    ]);
  }
}
