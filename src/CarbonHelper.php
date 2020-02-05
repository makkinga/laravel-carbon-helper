<?php

if (! function_exists('carbon')) {
    function carbon($date = null)
    {
        return resolve('carbon', [$date]);
    }
}