<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounter extends PHPUnit_Framework_TestCase {

        function test_1letter_1word_1time() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "I";
            $sentence = "I."
            //Act
            $result = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_letters_1word_1time() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "Cats";
            $sentence = "Cats!"
            //Act
            $result = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_1letter_words_1time() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "I";
            $sentence = "I love cats."
            //Act
            $result = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_letters_words_1time() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "cats";
            $sentence = "My favorite animals are cats."
            //Act
            $result = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_1letter_words_times() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "a";
            $sentence = "I went to a pet store to get a bag of cat food.."
            //Act
            $result = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(2, $result);
        }

        function test_letters_words_times() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "the";
            $sentence = "I think the easiest way to make friends with the neighborhood cats is to give them the finest tuna treats."
            //Act
            $result = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(3, $result);
        }

        function test_ignore_case() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "cats";
            $sentence = "Cats are totally awesome."
            //Act
            $result = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_find_contraction() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "you're";
            $sentence = "You're my favorite cat."
            //Act
            $result = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_find_word_in_contraction() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "you";
            $sentence = "You're my favorite cat."
            //Act
            $result = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(1, $result);
        }

    }
?>
