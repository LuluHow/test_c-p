<?php

$regexp = '#(\d*[13579])#';

preg_match_all($regexp, "http://www.zozo.com?numberone=1&numbertwo=6&numberthree=7", $matches);

echo "Les nombres impaires sont : \n";

foreach($matches[1] as $match)
{
    echo $match . " ";
}
