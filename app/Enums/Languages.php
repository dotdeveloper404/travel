<?php

namespace App\Enums;

enum Languages:string{

        case English = "English";
        case Turkish = "Turkish";
        case French = "French";
        case Spanish = "Spanish";

       public static function values():array
       {
            return array_column(self::cases(),'name','value');
       }

};

?>