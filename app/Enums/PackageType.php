<?php

namespace App\Enums;

enum PackageType:string{

        case Type1 = "type_1";
        case Type2 = "type_2";
        case Type3 = "type_3";

       public static function values():array
       {
            return array_column(self::cases(),'name','value');
       }

};

?>