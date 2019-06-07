<?php

/* 1.Необходимо написать класс для подсчета и группировки слов в предложении.
Например: “Лето, наступило у нас лето”
Результат должен быть в виде массива:
[‘лето’] => 2,
[‘наступило’] => 1,
[‘у’] => 1,
[‘нас’] => 1 

 */

class CountWords{
    public $str='';
 const SEPARATORS = [",", ".", ";"];
    public function __construct(string $str) {
        $this->str=$str ;
        $str;
    }
    public function CountWords(){
        $str = mb_strtolower($this->str);
       $array= explode(' ', $str);
       $array= str_replace (self::SEPARATORS, "", $array);
       $array;
return array_count_values($array);
}    }

$CountWords=new CountWords('Лето, наступило у нас лето');
print_r($CountWords->CountWords());
?>


