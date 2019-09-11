<?php

namespace Acme;

class FizzBuzz
{
    public function execute($number)
    {
        switch ($number) {
            case $number % 15 == 0:
                return 'fizzbuzz';
            case $number % 3 == 0:
                return 'fizz';
            case $number % 5 == 0:
                return 'buzz';
            default:
                return $number;
        }
    }

    public function executeUpTo($number)
    {
        return array_map(function ($i) {
            return $this->execute($i);
        }, range(1, $number));
    }
}
