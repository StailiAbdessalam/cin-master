<?php

function array_remove($selections, $arr)
{
    $result = $arr;
    foreach ($selections as $selection) {
        unset($result[$selection]);
    }
    return $result;
}