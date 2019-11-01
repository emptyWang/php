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

        //echo $evalString;
    }


    public function find($text)
    {
        $evalString = 'return isset($this->data';
        for ($i = 0; $i < mb_strlen($text); $i++) {
            $evalString .= '["' . $text[$i] . '"]';
        }
        $evalString .= '["isEnd"]);';

        //echo $evalString;

        return eval($evalString);
    }
}

$tril = new Tril();
$arr  = [ "apple", "banana", "cin" ];
foreach ($arr as $one) {
    $tril->insert($one);
}

$arr = [ "apple", "orange" ];
foreach ($arr as $one) {
    $res = $tril->find($one);
    //var_dump($res);
    $isInIt = $res ? '' : 'not';
    echo " $one is " . $isInIt . " in it.\n";
}
