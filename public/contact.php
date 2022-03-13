<?php

if (! function_exists('dump')) {

    function dump(array $arr)
    {
         echo '<pre>';
         print_r($arr);
         echo '</pre>';
         die;
    }
}


if (! empty($_POST)) {
    dump($_POST);
}