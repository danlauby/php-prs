<?php
    class RockPaperScissors
    {
        function checkTie()
        {
            if ('rock' == 'rock' || 'scissors' == 'scissors' || 'paper' == 'paper') {
                return 'tie';
            }
        }
    }

?>
