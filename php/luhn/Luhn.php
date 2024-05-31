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

function isValid(string $number): bool
{
    if (!preg_match('/^[0-9 ]+$/', $number)) 
    {
        return false;
    }
    $str=str_replace(' ','',$number);
    if(strlen($str)>1)
    {
        if($str[0]=='0')
            $str=substr($str,1);
        for($i=0;$i<strlen($str);$i=$i+2)
        {
            $num=(int)$str[$i]*2;
            if($num>9)
                $str[$i]=$num-9;
            else
                $str[$i]=$num;
        }
    }
    else
        return false;
    $sum=0;

    for($i=0;$i<strlen($str);$i++)
    {
        $sum=$sum+(int)$str[$i];
    }
    echo $sum;
    if($sum%10==0) 
        return true;
    else  
        return false;
    //throw new \BadFunctionCallException("Implement the isValid function");
}
