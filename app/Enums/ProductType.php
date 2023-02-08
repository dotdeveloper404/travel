<?php

namespace App\Enums;

enum ProductType:string{

        case None = "none";
        case Featured = "featured";
        case Top_Rated = "top_rated";
        case Best_Seller = "best_seller";
        case Likely_To_Sale_Out = "likely_to_sell_out";

       public static function values():array
       {
            return array_column(self::cases(),'name','value');
       }

};

?>