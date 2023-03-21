<?php

namespace App\Enums;

enum Duration:string{

     case Upto_1_hour = "Upto_one_hour";
     case _1_to_2_hours = "One_to_four_hours";
     case _1_to_3_hours = "One_to_three_hours";
     case _3_plus_days = "Three_plus_days";

       public static function values():array
       {
            return array_column(self::cases(),'name','value');
       }

};

?>