<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ExpenseController extends BaseController
{
    public function getExpense(){
      return json_encode(['result'=>'got expense']);
    }

    public function postExpense(){
      return json_encode(['result'=>'posted expense']);
    }

    public function putExpense(){
      return json_encode(['result'=>'putted expense']);
    }

    public function deleteExpense(){
      return json_encode(['result'=>'deleted expense']);
    }
}
