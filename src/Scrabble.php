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

        function scoreCheck2($input)
        {
            $word_score = 0;
            $filter_input = strtoupper($input);
            $filter_input = str_split($filter_input);
            $score = array(null, 'AEIOULNRST', 'DG', 'BCMP', 'FHVWY', 'K', null, null, 'JX', null, 'QZ');
            for ($i = 0; $i < sizeof($filter_input); $i++) {
                for ($j = 0; $j < sizeof($score); $j++) {
                    if (strpos($score[$j], $filter_input[$i]) !== false) {
                        $word_score += $j;
                    }
                }
            }
            return $word_score;
        }

        function scoreCheck3($input)
        {
            $word_score = 0;
            $filter_input = strtoupper($input);
            $filter_input = str_split($filter_input);
            $score = array(
                'AEIOULNRST' => 1,
                'DG' => 2,
                'BCMP' => 3,
                'FHVWY' => 4,
                'K' => 5,
                'JX' => 8,
                'QZ' => 10
            );
            foreach ($filter_input as $letter) {
                foreach ($score as $key => $value) {
                    if (strpos($key, $letter) !== false) {
                        $word_score += $value;
                    }
                }
            }
            return $word_score;
        }

    }


?>
