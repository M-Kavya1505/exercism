<?php

class ProgramWindow
{
    public $x;
    public $y;
    public $width;
    public $height;
    function __construct()
    {
        $this->x=0;
        $this->y=0;
        $this->width=800;
        $this->height=600;
    }
    function resize($size)
    {
        $this->height=$size->height;
        $this->width=$size->width;
    }
    function move($position)
    {
        $this->y=$position->y;
        $this->x=$position->x;
    }
}

