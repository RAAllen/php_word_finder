<?php
    class RepeatCounter {

        public $word;
        public $sentence;
        public $word_count;

        function countRepeats($word, $sentence)
        {
            return $this->word_count;
            {
                $word_count = 0;
                $lowered_word = strtolower($word);
                $lowered_sentence = strtolower($sentence);
                $split_sentence = explode(' ', $lowered_sentence);
                    foreach($split_sentence as $sentence_word)
                    {
                        if($sentence_word === $lowered_word)
                        {
                            $this->word_count += 1;
                        }
                    }
                    return $this->word_count;
            }
        }
    }
?>
