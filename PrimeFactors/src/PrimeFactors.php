<?php

class PrimeFactors
{
    public static function generate($n)
    {
        $primes = array();
        for ($candidate =2; $n > 1; $candidate++) {
            for (;0 === $n % $candidate;$n /= $candidate) {
                $primes[] = $candidate;
            }
        }
        return $primes;
    }
}