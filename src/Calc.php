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

    $numberOfGameRounds = 3;
    for ($i = 0; $i < $numberOfGameRounds; $i++) {
        $firstOperand = rand(1, 10);
        $secondOperand = rand(1, 10);
        $mathOperation = ['plus', 'minus', 'multiplication'];
        $randomMathOperation = $mathOperation[array_rand($mathOperation)];

        switch ($randomMathOperation) {
            case 'plus':
                line("Question: " . $firstOperand . ' + ' . $secondOperand);
                $result = $firstOperand + $secondOperand;
                break;
            case 'minus':
                line("Question: " . $firstOperand  . ' - ' . $secondOperand);
                $result = $firstOperand - $secondOperand;
                break;
            case 'multiplication':
                line("Question: " . $firstOperand  . ' * ' .  $secondOperand);
                $result = $firstOperand * $secondOperand;
                break;
        }

        $answer = prompt("Your answer");

        if ($answer == $result) {
            line("Correct");
        } else {
            return(line("'$answer'" . " is wrong answer ;(. Correct answer was " . "'$result'" . ". Let's try again, " . $name . "!"));
        }
    }
    return(line("Congratulations, " . $name));
}
