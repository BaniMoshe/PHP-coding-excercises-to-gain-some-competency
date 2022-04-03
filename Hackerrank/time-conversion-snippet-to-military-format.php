<?php

/*
 * Convert a hh:mm:ssAM/PM into military time
 */

function timeConversion($s) {
    #Let's splice $s into parts, if PM exists in last chunk 
    $temp_arr = explode( ":" , $s );
    if ( sizeof( $temp_arr ) == 3 )
    {
        #Valid input! It has [ 'hh' , 'mm' , 'ssPM' ] strpos on last chunk
        $flag = strpos( strtoupper( $temp_arr[ 2 ] ) , "PM" );
        if ( $flag !== FALSE )
        {
            if ( intval( $temp_arr[ 0 ] ) > 0 and intval( $temp_arr[ 0 ] ) < 12 )
            {
                #Add 12 hours
                return intval( $temp_arr[ 0 ] ) + 12 . ":" .$temp_arr[ 1 ] . ":" . substr( $temp_arr[ 2 ] , 0 , 2 );
            }
        }
        elseif ( intval( $temp_arr[ 0 ] ) == 12 and ( strpos( strtoupper( $temp_arr[ 2 ] ) , "AM" ) == 2 ) )
        {
            #It's 12:mm:ssAM
            return "00:" .$temp_arr[ 1 ] . ":" . substr( $temp_arr[ 2 ] , 0 , 2 );
        }
        #Just return the same string without the AM tail
        return $temp_arr[ 0 ] . ":" . $temp_arr[ 1 ] . ":" . substr( $temp_arr[ 2 ] , 0 , 2 );
    }
}
