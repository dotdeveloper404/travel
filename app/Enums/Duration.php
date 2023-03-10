<?php

namespace App\Enums;

enum Duration:string{

     case Upto_One_hour = "Upto_one_hour";
     case One_to_Four_hours = "One_to_four_hours";
     case One_to_Three_hours = "One_to_three_hours";
     case Three_Plus_days = "Three_plus_days";

       public static function values():array
       {
            return array_column(self::cases(),'name','value');
       }

};

?>