<?php

interface Model
{
    function get($prop);
    function set($prop, $value);
}

abstract class Acronimo