<?php

/* 
 * 
Создайте класс и реализуйте в нем статический метод accumulate(array $numbers). Метод должен к каждому элементу массива применить функцию:
                x = x * x
    Пример: дано массив [1, 2, 3, 4, 5]
    Результат должен быть в виде массива: [1, 4, 9, 16, 25]
 */

class Double {
    public $array=[];
    public function __construct(array $array) {
        $this->array=$array;
    }
    public function double(){
    $newArray = array_map(function ($a){return $a*$a;
    }, $this->array);    
    
    return $newArray;
    }
}
$Double = new Double([1, 2, 3, 4, 5]);
print_r($Double->double());