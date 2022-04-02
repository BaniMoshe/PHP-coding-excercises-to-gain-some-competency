<?php

/*
This is day 1
 */

function pM( $numbers ) 
{
    $decimals = 6; #As per your instructions
    $pos_count = 0;
    $neg_count = 0;
    $zero_count = 0;
    for ( $i=0 ; $i < sizeof( $numbers ) ; $i++ )
    {
        if ( $numbers[ $i ] < 0 )
            $neg_count++;
            
        if ( $numbers[ $i ] > 0 )
            $pos_count++;
            
        if ( $numbers[ $i ] == 0 )
            $zero_count++;
    }
    
    echo number_format( (float)( $pos_count / sizeof( $numbers ) ) , $decimals ) . "\n";
    echo number_format( (float)( $neg_count / sizeof( $numbers ) ) , $decimals ) . "\n";
    echo number_format( (float)( $zero_count / sizeof( $numbers ) ) , $decimals ) . "\n";
}

#This was the dumbest solution. It hit me hard Lol. I'm out of shape.