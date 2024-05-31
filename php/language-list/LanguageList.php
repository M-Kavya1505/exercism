<?php

function language_list(...$list)
{
    // implement the language list function
    if ($list == NULL)
    {
        return [];
    }
    else
    {
        return $list;
    }
}
function add_to_language_list($list,$new)
{
    array_push($list,$new);
    return $list;
}
function prune_language_list($list)
{
    array_shift($list);
    return $list;
}
function current_language($list)
{
    //return $list[0];
    return reset($list);
}
function language_list_length($list)
{
    return sizeof($list);
    //return count($list);
}