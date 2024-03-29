<?php

namespace App\Models;

use CodeIgniter\Model;

class CalculatorModel extends Model
{
  public function add(int $first_number, int $second_number): int
  {
    return $first_number + $second_number;
  }
}
