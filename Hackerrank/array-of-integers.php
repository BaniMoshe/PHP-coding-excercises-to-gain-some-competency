<?php

/*
This is day 1 in Hackerrank
 */

function print_ratios( $numbers ) 
{
    #Local vars initialization
    $decimals = 6;
    $pos_count = 0;
    $neg_count = 0;
    $zero_count = 0;

    #Reading the array of integer values
    for ( $i=0 ; $i < sizeof( $numbers ) ; $i++ )
    {
        $neg_count += ( $numbers[ $i ] < 0 ) ? 1 : 0; #if ( $numbers[ $i ] < 0 ) $neg_count++;
        $pos_count += ( $numbers[ $i ] > 0 ) ? 1 : 0; #if ( $numbers[ $i ] > 0 ) $pos_count++;
        $zero_count += ( $numbers[ $i ] == 0 ) ? 1 : 0; #if ( $numbers[ $i ] == 0 ) $zero_count++;
    }
    #Printing ratios (neg, pos, zero) using 6 decimal digits is the easiest exercise
    echo number_format( (float)( $pos_count / sizeof( $numbers ) ) , $decimals ) . "\n" . number_format( (float)( $neg_count / sizeof( $numbers ) ) , $decimals ) . "\n" . number_format( (float)( $zero_count / sizeof( $numbers ) ) , $decimals ) . "\n";
}

#This was the dumbest solution. It hit me hard Lol. 
#I'm out of shape.