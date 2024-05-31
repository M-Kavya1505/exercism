<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $num1=implode($digitsOfNumber1);
        $num2=implode($digitsOfNumber2);
        return $num1+$num2;
        //throw new \BadFunctionCallException("Implement the function");
    }

    public function isPalindrome(int $number): bool
    {
        $num=(string)$number;
        $num1=strrev($num);
        if($num==$num1)
            return true;
        else
            return false;
        //throw new \BadFunctionCallException("Implement the function");
    }

    public function validate(string $input): string
    {
        if(trim($input)==NULL)
            return "Required field";
        elseif((int)$input<=0)
            return "Must be a whole number larger than 0";
        else
            return "";
        //throw new \BadFunctionCallException("Implement the function");
    }
}
