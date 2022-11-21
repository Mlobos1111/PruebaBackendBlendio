<?php

namespace App\Http\Controllers;

use App\Models\Calculadora;
use Illuminate\Http\Request;

class  OperationController extends Controller
{
    public function operation()
    {

        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $operation = $_GET['operation'];
        $result = 0;
        switch ($operation) {

            case "+":
                $result = $n1 + $n2;
                break;

            case "-":
                $result = $n1 - $n2;
                break;

            case "x":
                $result = $n1 * $n2;
                break;
            case "/":
                $result = $n1 / $n2;
                break;
                default:
                echo "Operacion inexistente";
                break;
        }

        echo
        "
  <body>
    
  <h1>el resultado es : $result</h1>


  <style>
   body{
    display:flex;
    justify-content:center;
    background-color: red;
   }
   

  </style>
  
  </body>

  
  
  
  
  
  
  ";
    }
}
