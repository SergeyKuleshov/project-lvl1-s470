<?php

namespace BrainGamesProject\Calc;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    line('What is the result of the expression?' . PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, %s!\n", $name);

    $count = 0;
    for ($i = 0; $i < 3; $i++) {
        $firstOperand = rand(1, 10);
        $secondOperand = rand(1, 10);
        $mathOperation = rand(1, 3);

        if ($mathOperation == 1) {
            line("Question: " . $firstOperand . ' + ' . $secondOperand);
            $result = $firstOperand + $secondOperand;
        } elseif ($mathOperation == 2) {
            line("Question: " . $firstOperand  . ' - ' . $secondOperand);
            $result = $firstOperand - $secondOperand;
        } else {
            line("Question: " . $firstOperand  . ' * ' .  $secondOperand);
            $result = $firstOperand * $secondOperand;
        }

        $answer = prompt("Your answer");

        if ($answer == $result) {
            line("Correct");
            $count++;
        } else {
            line("'$answer'" . " is wrong answer ;(. Correct answer was " . "'$result'" . ". Let's try again, " . $name . "!");
            break;
        }
    }

    if ($count == 3) {
        line("Congratulations," . $name);
    }
}
