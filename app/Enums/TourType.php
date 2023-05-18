<?php

namespace App\Enums;

enum TourType:string{

   // case Day_Trip = "Day Trip";
     // case Multiday_Trip = "Multiday Trip";
     // case All_Inclusive = "All Inclusive";
     case Families_And_Kids_Attractions= "families-and-kids-attractions";
     case Sightseeing_And_Tours = "sightseeing-and-tours";
     case Cruises = "cruises";
     case Events_And_Festivals= "events-and-festivals";
     case Food_Lovers= "food-lovers";
     case Ticket_And_Passes = "ticket-and-passes";
     

       public static function values():array
       {
            return array_column(self::cases(),'name','value');
       }

};

?>