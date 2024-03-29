<?php

namespace App\Controllers;

use App\Models\CalculatorModel;

class Calculator extends BaseController
{
  public function addition(int $first_number, int $second_number, bool $alternative = False): string
  {
    $calculator = new CalculatorModel();

    $result = $calculator->add($first_number, $second_number);

    $data = [
      'first_number' => $first_number,
      'second_number' => $second_number,
      'result' => $result
    ];

    $view_template = $alternative ? 'calculator_alternative' : 'calculator';

    return view($view_template, $data);
  }
}
