<?php

    class RepeatCounter {

        public $word;
        public $sentence;
        public $word_count = 0;

        function countRepeats($word, $sentence)
        {
            $string = $sentence;
            $lowered_word = strtolower($word);
            $lowered_sentence = strtolower($sentence);
            $replaced_sentence = str_replace([',', '.', '!', '?', ':', ';', '"'], " ", $lowered_sentence);
            $split_sentence = explode(' ', $replaced_sentence);
                foreach($split_sentence as $sentence_word)
                {
                    if($sentence_word === $lowered_word)
                    {
                        $this->word_count++;
                    }
                }
                return $this->word_count;
        }

    }

?>
