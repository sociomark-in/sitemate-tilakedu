<?php
// number_to_currency(float $number, 'USD', 'en_US', 2)

function number_to_currency(mixed $number, $currency, $decimals) : string{
    $numf = number_format((float)$number, $decimals, '.', ',');
    switch ($currency) {
        case 'INR':
            return "&#8377;". $numf;
            break;
        
        default:
            return $numf;
            break;
    }
}

function number_to_amount(mixed $number, $decimals) : string {
    return number_format((float)$number, $decimals, '.', ',');
}