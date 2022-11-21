<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\OperationController;

class Calculadora extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculadora:calculadora n1 n2 operation ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este comando implementa las operaciones básicas aritméticas de una calculadora';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $n1 = $this->ask("n1");
        $n2 = $this->ask("n2");
        $operation = $this->ask("operation");
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
                $this -> error('Operación inexistente');
                break;
        }
        
        echo "El resultado es : $result ";
    }
}
