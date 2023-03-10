<?php

namespace App\Enums;

enum Languages:string{

        case English = "english";
        case Turkish = "turkish";
        case Urdu = "urdu";
        case French = "french";
        case Spanish = "spanish";

       public static function values():array
       {
            return array_column(self::cases(),'name','value');
       }

};

?>