<?php

namespace App\Enums;

enum PackageCategories:string{

    
     case Best_Selling_Turkey_Packages= "best-selling-turkey-packages";
     case Top_Rate_Istanbul_Packages = "top-rated-istanbul-packages";
     case Popular_Summer_Packages = "popular-summer-packages";
     case Featured_World_Wide_Packages = "featured-world-wide-packages";
     
       public static function values():array
       {
            return array_column(self::cases(),'name','value');
       }

};

?>