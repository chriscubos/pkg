<?php

namespace Chriscubos\Pkg;

class PkgClass
{
    /**
     * Create a new Pkg Instance
     */
    public function __construct()
    {
        // constructor body
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase($phrase)
    {
        return $phrase;
    }

    /**
     * simple addition
     * 
     * @param  integer $first_number  first number
     * @param  integer $second_number second number
     * @return integer returns the result of the two number
     */
    public function add($first_number=0, $second_number=0)
    {
        return $first_number+second_number;
    }

    
}
