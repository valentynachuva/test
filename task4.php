<?php

/* 
 * 
Создайте класс и реализуйте метод который будет делать плоский массив из ассоциативного
    Пример: [1,[2,3,null,4],[null],5]
    Результат: [1,2,3,4,5]
 */

class ArrayMerge{
    public $array=[];

    static function _flatten_array($array) {
   if(!is_array($array)) return FALSE;
   
    foreach ($array as $value){
     if(is_array($value)){
        $newarray= array_merge($newarray, self::_flatten_array($value));}
         else {
          $newarray[] = $value;
          $newarray= array_filter($newarray);
    }}
          return $newarray;
    }
}
print_r(ArrayMerge::_flatten_array([1,[2,3,null,4],[null],5]));