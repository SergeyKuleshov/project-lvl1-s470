<?php

namespace BrainGamesProject\Even;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".' . PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, %s!\n", $name);

    $count = 0;
    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 100);
        line("Question: " . $num);
        $answer = prompt("Your answer");

        if (($num % 2 == 0 && $answer == 'yes') || ($num % 2 != 0 && $answer == 'no')) {
            line("Correct");
            $count++;
        } else {
            line("Incorrect answer");
        }
    }

    if ($count == 3) {
        line("Congratulations," . $name);
    }
}
