<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase {

        function test_1letter_1word_1time() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "I";
            $sentence = "I.";
            $test_score = 1;
            //Act
            $word_count = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(1, $word_count);
        }

        function test_letters_1word_1time() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "Cats";
            $sentence = "Cats!";
            //Act
            $word_count = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(1, $word_count);
        }

        function test_1letter_words_1time() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "I";
            $sentence = "I love cats.";
            //Act
            $word_count = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(1, $word_count);
        }

        function test_letters_words_1time() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "cats";
            $sentence = "My favorite animals are cats.";
            //Act
            $word_count = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(1, $word_count);
        }

        function test_1letter_words_times() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "a";
            $sentence = "I went to a pet store to get a bag of cat food..";
            //Act
            $word_count = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(2, $word_count);
        }

        function test_letters_words_times() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "the";
            $sentence = "I think the easiest way to make friends with the neighborhood cats is to give them the finest tuna treats.";
            //Act
            $word_count = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(3, $word_count);
        }

        function test_ignore_case() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "cats";
            $sentence = "Cats are totally awesome.";
            //Act
            $word_count = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(1, $word_count);
        }

        function test_find_contraction() {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "you're";
            $sentence = "You're my favorite cat.";
            //Act
            $word_count = $test_RepeatCounter->countRepeats($word, $sentence);
            //Assert
            $this->assertEquals(1, $word_count);
        }

        // function test_find_word_in_contraction() {
        //     //Arrange
        //     $test_RepeatCounter = new RepeatCounter;
        //     $word = "you";
        //     $sentence = "You're my favorite cat.";
        //     //Act
        //     $word_count = $test_RepeatCounter->countRepeats($word, $sentence);
        //     //Assert
        //     $this->assertEquals(1, $word_count);
        // }

    }
?>
