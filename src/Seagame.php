<?php

namespace Naravichchan\FakePackage;

class Seagame
{
    public static function event(string $name, float $val, ?string $dimension = null)
    {
        return "$name $val";
    }

    public static function get()
    {
        return "get from package";
    }
}