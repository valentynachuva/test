<?php

/* 
 * 
создайте класс который будет высчитывать “космический” возраст на:
•Земля: орбитальный период 365.25 земных дней, или 31557600 секунд
•Меркурий: орбитальный период 0.2408467 земных лет
•Венера: орбитальный период 0.61519726 земных лет
•Марс: орбитальный период 1.8808158 земных лет
•Юпитер: орбитальный период 11.862615 земных лет
•Сатурн: орбитальный период 29.447498 земных лет
•Уран: орбитальный период 84.016846 земных лет
•Нептуне: орбитальный период 164.79132 земных лет
    Например, вы прожили 1,000,000,000 секунд, то на Земле ваш возраст бы составил: 31.69 лет.

    Аргумент метода может принимать как время в секундах, так и годах


 */

class Age{
    const Earth=365.25 ;
    const year=1;
    const Mercury=0.2408467; 
    const Venus = 0.61519726;
    const Mars = 1.8808158 ;
    const Jupiter = 11.862615;
    const Saturn = 29.447498;
    const Uranus  = 84.016846;
    const Neptune = 164.79132 ;
    public function calculate($age,$planet){
        switch ($planet){
            case('Earth'):  $age1 = $age/60/60/24/(self::Earth* self::year) ;
       
            break;
            case ('Mercury'):   $age1 = $age/60/60/24/(self::Earth*self::Mercury);
                break;
            case('Venus'):   $age1 = $age/60/60/24/(self::Earth*self::Venus);
       
            break;
        case('Mars'):    $age1 = $age/60/60/24/(self::Earth*self::Mars);
       
            break;
        case('Jupiter'):   $age1 = $age/60/60/24/(self::Earth*self::Jupiter);
       
            break;
         case('Uranus'):   $age1 = $age/60/60/24/(self::Earth*self::Uranus);
       
            break;
         case('Saturn'):    $age1 = $age/60/60/24/(self::Earth*self::Saturn);
       
            break;
         case('Neptune'):   $age1 = $age/60/60/24/(self::Earth*self::Neptune);
       
            break;
    }
    return $age1;
    
}}
echo Age::calculate(31557600, 'Neptune');
