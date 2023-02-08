<?php

namespace App\Enums;

enum TourType:string{

     case Type_1 = "type_1";
     case Type_2 = "type_2";
     case Type_3 = "type_3";

       public static function values():array
       {
            return array_column(self::cases(),'name','value');
       }

};

?>