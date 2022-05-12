<?php

namespace App\Helpers;

class Helper {
     public static function IDGenerator($model, $trow, $length = 4, $prefix ) 
    {
        $id_data = $model::orderBy('order_number','desc')->first();
        if (!$id_data) {
            $id_length             = $length;
            $last_number_length    = '';
        } else {

            $code_id                = substr($id_data->$trow,strlen($prefix)+1);
            $id_last_number         = ($code_id/1)*1;
            $increment_last_number  = $id_last_number+1;
            $last_number_length     = strlen($increment_last_number);
            $id_length              = $length - $last_number_length;
            $last_number_length     = $increment_last_number;
        }

        $jomer = "";
        for ($i=0; $i < $id_length ; $i++) { 
            $jomer.="0";
        }
           
        return $prefix.'-'.$jomer.$last_number_length;
        
    }

}