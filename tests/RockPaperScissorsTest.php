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

        
    }

    // Arrange
    //Act
    // Assert


?>
