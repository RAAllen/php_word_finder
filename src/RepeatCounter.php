<?php
    class RepeatCounter {

        public $word;
        public $sentence;
        public $sentence_array;
        public $word_count;

        function countRepeats($word, $sentence)
        {
            $sentence_array = [];
            $word_count = 0;
            $lowered_word = strtolower($word);
            $lowered_sentence = strtolower($sentence);
            $split_sentence = explode(' ', $lowered_sentence);
                foreach($split_sentence as $sentence_word)
                {
                    if($sentence_word === $lowered_word)
                    {
                        $word_count += 1;
                    }
                }
                return $word_count;
        }
    }
?>
