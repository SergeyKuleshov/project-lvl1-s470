<?php

namespace BrainGamesProject\Even;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $numbers = [
        'firstNumber' => 15,
        'secondNumber' => 6,
        'thirdNumber' => 7
    ];

    $count = 0;
    foreach ($numbers as $num) {
        line("Question: " . $num);
        $answer = prompt("Even?");
        line("Your answer " . $answer);

        if (($num % 2 == 0 && $answer == 'yes') || ($num % 2 != 0 && $answer == 'no')) {
            line("Correct");
            $count++;
        }
    }

    if ($count == 3) {
        line("Congratulations," . $name);
    }

    line($count);
}
