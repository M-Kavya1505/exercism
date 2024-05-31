<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        //throw new \BadFunctionCallException("Implement the function");
        return substr(trim($name),0,1);
    }

    public function initial(string $name): string
    {
        $str1=$this->firstLetter(strtoupper($name));
        return $str1.".";
        
    }

    public function initials(string $name): string
    {
        //throw new \BadFunctionCallException("Implement the function");
        $str1=explode(" ",$name);
        return $this->initial($str1[0])." ".$this->initial($str1[1]);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        //throw new \BadFunctionCallException("Implement the function");
        $str1=$this->initials($sweetheart_a);
        $str2=$this->initials($sweetheart_b);
        return <<<EXPECTED_HEART
         ******       ******
       **      **   **      **
     **         ** **         **
    **            *            **
    **                         **
    **     $str1  +  $str2     **
     **                       **
       **                   **
         **               **
           **           **
             **       **
               **   **
                 ***
                  *
    EXPECTED_HEART;
    }
}
