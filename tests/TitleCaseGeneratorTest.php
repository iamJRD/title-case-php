<?php
    require_once "src/TitleCaseGenerator.php";

    class  TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

      function test_makeTitleCase_oneWord()
      {
        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = 'beowulf';

        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        //assert
        $this->assertEquals("Beowulf", $result);
      }

      function test_makeTitleCase_multipuleWords()
      {
          // Arrange
          $test_TitleCaseGenerator = new TitleCaseGenerator;
          $input = "the jungle book";

          // Act
          $result = $test_TitleCaseGenerator->makeTitleCase($input);

          // Assert
          $this->assertEquals("The Jungle Book", $result);
      }

      function test_makeTitleCase_upCaseWords()
      {
          // Arrange
          $test_TitleCaseGenerator = new TitleCaseGenerator;
          $input = "THE JUNGLE BOOK";

          // Act
          $result = $test_TitleCaseGenerator->makeTitleCase($input);

          // Assert
          $this->assertEquals("The Jungle Book", $result);
      }
    }
?>
