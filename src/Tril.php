<?php

class Tril
{

    public $data = [];


    public function insert($text)
    {
        $evalString = '$this->data';
        for ($i = 0; $i < mb_strlen($text); $i++) {
            $evalString .= '["' . $text[$i] . '"]';
        }
        $evalString .= '["isEnd"]=1;';

        eval($evalString);
    }


    public function find($text)
    {
        $evalString = 'return isset($this->data';
        for ($i = 0; $i < mb_strlen($text); $i++) {
            $evalString .= '["' . $text[$i] . '"]';
        }
        $evalString .= '["isEnd"]);';

        return eval($evalString);
    }
}

$mem = memory_get_usage();

$tril = new Tril();

$mem = memory_get_usage() - $mem;
echo $mem."\n";
$str = str_repeat("a", 10000);
$tril->insert($str);
$mem = memory_get_usage() - $mem;
echo $mem."\n";
die;


$arr = [ "apple", "banana", "cin" ];
foreach ($arr as $one) {
    $tril->insert($one);
}

$arr = [ "apple", "orange" ];
foreach ($arr as $one) {
    $res    = $tril->find($one);
    $isInIt = $res ? '' : 'not';
    echo " $one is " . $isInIt . " in it.\n";
}
