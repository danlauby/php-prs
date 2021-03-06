<?php
    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_checkTie()
        {

            // Arrange
            $test_tie = new RockPaperScissors;
            $input_one = "rock scissor paper";
            $input_two = "rock scissor paper";

            //Act
            $result = $test_tie->checkTie($input_one, $input_two);

            // Assert
            $this->assertEquals('tie', $result);
        }

        function test_checkPaperRock()
        {

            // Arrange
            $test_paper_rock = new RockPaperScissors;
            $input_one = "paper";
            $input_two = "rock";

            //Act
            $result = $test_paper_rock->checkPaperRock($input_one, $input_two);

            // Assert
            $this->assertEquals('paper', $result);
        }

        function test_checkPaperScissors()
        {
            // Arrange
            $test_paper_scissors = new RockPaperScissors;
            $input_one = "paper";
            $input_two = "scissors";

            //Act
            $result = $test_paper_scissors->checkPaperScissors($input_one, $input_two);

            // Assert
            $this->assertEquals('scissors', $result);
        }

        function test_checkRockScissors()
        {
            // Arrange
            $test_rock_scissors = new RockPaperScissors;
            $input_one = "rock";
            $input_two = "scissors";

            // Act
            $result = $test_rock_scissors->checkRockScissors($input_one, $input_two);

            // Assert
            $this->assertEquals('rock', $result);
        }


    }



?>
