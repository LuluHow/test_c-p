<?php

class Encode
{
    static public $alpha = "abcdefghijklmnopqrstuvwxyz";

    static function ROT($rotate=42)
    {
        echo "Output : \n";
        $args = func_get_args();

        foreach($args as $arg)
        {
            if(is_int($arg)) {
                continue;
            }

            $rotate = $rotate % 26;
            $arg = strtolower($arg);

            for ($i = 0, $l = strlen($arg); $i < $l; $i++) {
                $c = $arg[$i];
                if ($c >= 'a' && $c <= 'z') {
                    $arg[$i] = static::$alpha[(ord($c) - 71 + $rotate) % 26];
                }
            }
            echo $arg . "\n";
        }
    }
}

Encode::ROT(13, 'ant', "toto", "PHP");
