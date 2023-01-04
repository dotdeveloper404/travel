<?php

namespace App\Enums;

enum ProductType:string{

        case None = "none";
        case Featured = "featured";
        case Top_Rated = "top_rated";
        case Best_Seller = "best_seller";

       public static function values():array
       {
            return array_column(self::cases(),'name','value');
       }

};

?>