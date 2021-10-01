<?php

namespace Src\Infection;

class Infection
{
    public function add( $a, $b )
    {
        if ( $a > 0 ){
            return $a + $b;
        }
        return $a;
    }
}
