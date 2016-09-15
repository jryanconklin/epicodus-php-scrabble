<?php

    class Scrabble
    {

        function scoreCheck($input)
        {
            $word_score = 0;

            $one_point = 'AEIOULNRST';
            $two_point = 'DG';
            $three_point = 'BCMP';
            $four_point = 'FHVWY';
            $five_point = 'K';
            $eight_point = 'JX';
            $ten_point = 'QZ';

            $filter_input = strtoupper($input);
            $filter_input = str_split($filter_input);

            foreach ($filter_input as $letter) {
                if (strpos($one_point, $letter) !== false) {
                    $word_score++;
                } elseif (strpos($two_point, $letter) !== false) {
                    $word_score += 2;
                } elseif (strpos($three_point, $letter) !== false) {
                    $word_score += 3;
                } elseif (strpos($four_point, $letter) !== false) {
                    $word_score += 4;
                } elseif (strpos($five_point, $letter) !== false) {
                    $word_score += 5;
                } elseif (strpos($eight_point, $letter) !== false) {
                    $word_score += 8;
                } elseif (strpos($ten_point, $letter) !== false) {
                    $word_score += 10;
                }
            }
            return $word_score;
        }

    }


?>
