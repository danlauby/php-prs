<?php
    class RockPaperScissors
    {
        function checkTie()
        {
            if ('rock' == 'rock' || 'scissors' == 'scissors' || 'paper' == 'paper') {
                return 'tie';
            }
        }

        function checkPaperRock($input_one, $input_two)
        {
            if ($input_one == 'paper' && $input_two == 'rock') {
                return 'paper';
            }
        }

        function checkPaperScissors($input_one, $input_two)
        {
            if ($input_one == 'paper' && $input_two == 'scissors') {
                return 'scissors';
            }
        }

        function checkRockScissors($input_one, $input_two)
        {
            if ($input_one == 'rock' && $input_two == 'scissors') {
                return 'rock';
            }
        }


    }

?>
