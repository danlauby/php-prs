<?php
    class RockPaperScissors
    {
        public $player_one;
        public $player_two;

        function __construct($new_player_one, $new_player_two)
        {
            $this->player_one = $new_player_one;
            $this->player_two = $new_player_two;
        }

        function checkInput($new_player_one, $new_player_two)
        {
            if ($new_player_one && $new_player_two == 'rock' || 'paper' || 'scissors')
                if ($new_player_one == 'paper' && $new_player_two == 'rock' || $new_player_one == 'rock' && $new_player_two == 'paper') {
                    return 'paper';
                } elseif ($new_player_one == 'paper' && $new_player_two == 'scissors' || $new_player_one == 'scissors' && $new_player_two == 'paper') {
                    return 'scissors';
                } elseif ($new_player_one == 'rock' && $new_player_two == 'scissors' || $new_player_one == 'scissors' && $new_player_two == 'rock') {
                    return 'rock';
                } elseif ($new_player_one == $new_player_two) {
                    return 'tie';
                } else {
                    return 'Please enter rock, paper or scissors';
                }
        }

        static function getAll()
       {
           return $_SESSION['list_of_answers'];
       }

       static function deleteAll()
       {
           $_SESSION['list_of_answers'] = array();
       }

       function save()
       {
           array_push($_SESSION['list_of_answers'], $this);
       }


    }

?>
