<?php
    require_once __DIR__.'/../src/Scrabble.php';

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_scoreCheck_singleLetter()
        {
            // Arrange
            $test_Scrabble = new Scrabble;
            $input = 'E';
            // Act
            $result = $test_Scrabble->scoreCheck($input);
            // Assert
            $this->assertEquals(1, $result);
        }

        function test_scoreCheck_wholeOnePointWord()
        {
            // Arrange
            $test_Scrabble = new Scrabble;
            $input = 'rest';
            // Act
            $result = $test_Scrabble->scoreCheck($input);
            // Assert
            $this->assertEquals(4, $result);
        }

        function test_scoreCheck_wholeMixedPointWord()
        {
            // Arrange
            $test_Scrabble = new Scrabble;
            $input = 'gore';
            // Act
            $result = $test_Scrabble->scoreCheck($input);
            // Assert
            $this->assertEquals(5, $result);
        }

        function test_scoreCheck_wholeMixedPointLongWord()
        {
            // Arrange
            $test_Scrabble = new Scrabble;
            $input = 'quitter';
            // Act
            $result = $test_Scrabble->scoreCheck($input);
            // Assert
            $this->assertEquals(16, $result);
        }


    }
 ?>
