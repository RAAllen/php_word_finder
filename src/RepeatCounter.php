<?php
    class RepeatCounter {

        public $word;
        public $sentence;

        function countRepeats($word, $sentence)
        {
            $word_count = 0;
            $lowered_word = strtolower($word);
            $lowered_sentence = strtolower($sentence);
            $split_sentence = explode(' ', $lowered_sentence);
            // $split_sentence = multiexplode(array(' ', '.', '!', '?', '""', "''", ':',), $lowered_sentence);

            for($index = 0; $index < count($split_sentence); $index++)
            {
                if($lowered_word === $split_sentence[$index])
                {
                    $word_count = ($word_count + 1);
                }
            }
        }
    }
?>
