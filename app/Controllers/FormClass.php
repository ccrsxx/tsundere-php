<?php

namespace App\Controllers;

class FormClass extends BaseController
{
  public function index(): string
  {
    return view('form_class');
  }

  public function print_form_result()
  {
    $validationRules = [
      'code' => [
        'label' => 'Kode MTK',
        'rules' => 'required|min_length[3]',
        'errors' => [
          'required' => 'Kode MTK harus diisi.',
        ]
      ],
      'name' => [
        'label' => 'Nama MTK',
        'rules' => 'required|min_length[3]',
        'errors' => [
          'required' => 'Nama MTK harus diisi.',
        ]
      ],
      'sks' => [
        'label' => 'SKS',
        'rules' => 'required',
        'errors' => [
          'required' => 'SKS harus dipilih.'
        ]
      ]
    ];

    if (!$this->validate($validationRules)) {
      return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

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
