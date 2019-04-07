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

    $numberOfGameRounds = 3;
    for ($i = 0; $i < $numberOfGameRounds; $i++) {
        $questionNumber = rand(1, 100);
        line("Question: " . $questionNumber);
        $answer = prompt("Your answer");

        if (($questionNumber % 2 == 0 && $answer == 'yes') || ($questionNumber % 2 != 0 && $answer == 'no')) {
            line("Correct");
        } else {
             return(line("Incorrect answer"));
        }
    }
    return(line("Congratulations," . $name));
}
