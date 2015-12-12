<?php

class Luhn{

    function check($card_number) {
        
        // Determine the string length
        $cardLength = strlen($card_number);

        // Determine the string's remainder
        $cardCheck = $cardLength % 2;

        // Break up the card number into individual
        // digits and combine total.
        $combineTotal = 0;
        $cur = 0;
        $breakCard = str_split($card_number);
        foreach ($breakCard as $digit) {

            // Multiply alternate digits by two
            if ($cur % 2 == $cardCheck) {
                // If the multiplied digits is greater
                // than 9, subtract 9.
                $digit *= 2;
                if ($digit > 9) {
                    $digit -= 9;
                }
            }

            // Total up the digits
            $combineTotal += $digit;
            $cur++;

        }
        // If the combined total's modulus 10 is equal to 0,
        // we know that the the number could be valid,
        // pending confirmation from a payment gateway
        // that the number exists.
        return ($combineTotal % 10 == 0) ? true : false;

    }
}