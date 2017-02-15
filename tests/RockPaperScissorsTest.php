<?php
    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_checkRock()
        {

            // Arrange
            $test_rock = new RockPaperScissors;
            $input_one = "Rock";
            $input_two = "Rock";

            //Act
            $result = $test_rock->checkRock($input_one, $input_two);

            // Assert
            $this->assertEquals('tie', $result);
        }
    }

    // Arrange
    //Act
    // Assert


?>
