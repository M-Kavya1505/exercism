<?php

/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */

declare(strict_types=1);

function squareOfSum(int $max): int
{
    /*$sum=0;
    for($i=1;$i<=$max;$i++)
    {
        $sum=$sum+$i;
    }
    return ($sum)**2;*/
    $sum=$max*($max+1)/2;
    return $sum**2;
    throw new \BadFunctionCallException("Implement the squareOfSum function");
}

function sumOfSquares(int $max): int
{
    $sum=$max*($max+1)*(2*$max+1)/6;
    echo $sum;
    return $sum;
    throw new \BadFunctionCallException("Implement the sumOfSquares function");
}

function difference(int $max): int
{
    return squareOfSum($max) - sumOfSquares($max);
    //throw new \BadFunctionCallException("Implement the difference function");
}
