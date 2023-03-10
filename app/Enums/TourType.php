<?php

namespace App\Enums;

enum TourType:string{

     case Day_Trip = "Day Trip";
     case Multiday_Trip = "Multiday Trip";
     case All_Inclusive = "All Inclusive";

       public static function values():array
       {
            return array_column(self::cases(),'name','value');
       }

};

?>