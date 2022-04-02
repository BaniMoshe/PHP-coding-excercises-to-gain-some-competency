<?php

/*
 * This exercise is easy, but border cases slap your face. They become like Will Smith lol.
 */

function miniMaxSum($numbers) {
    $maxVal = 0; #Max sum val
    $minVal = 92233720368547; #Min sum val
    $tempVal = 92233720368547000; #Temp variable initialization necessary
    #Getting to read possible combinations
    for ( $i=0; $i< sizeof( $numbers ) ; $i++)
    {
        #Variables initialization
        $tempVal = 0; #To temporarily store the value before comparisson
        for ( $j=0; $j< sizeof( $numbers ) ; $j++)
        {
            #Summing four positions, avoiding the value located at the $i index   
            #$tempVal += ( intval( $j ) !== intval( $i ) ) ? $numbers[ $j ] : 0;
            if ( intval( $j ) !== intval( $i ) )
            {
                $tempVal += $numbers[ $j ];
                #echo "I=" . $i . " y J=" . $j . "\nValor actual: " . $numbers[ $j ] . " - Total: " . $tempVal . "\n\n";
            }
        }
        #Comparing the temporary values so each loop assigns min and max
        $maxVal = ( $maxVal < $tempVal ) ? $tempVal : $maxVal;
        $minVal = ( $tempVal < $minVal ) ? $tempVal : $minVal;
    }
    print $minVal . " " . $maxVal;
}
