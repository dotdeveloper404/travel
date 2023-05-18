<?php

namespace App\Enums;

enum Duration:string{

     case Upto_1_hour = "Upto 1 hour";
     case _1_to_4_hours = "1 to 4 hours";
     case _1_to_3_days = "1 to 3 days";
     case _3_plus_days = "3 + days";
     

       public static function values():array
       {
            return array_column(self::cases(),'name','value');
       }

};

?>