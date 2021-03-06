<?php

namespace Ice;

/**
 * Text helper.
 *
 * @package     Ice/Text
 * @category    Helper
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
class Text
{

    const ALNUM = 0;


    const ALPHA = 1;


    const HEXDEC = 2;


    const NUMERIC = 3;


    const NOZERO = 4;


    /**
     * Generates a random string based on the given type. Type is one of the constants.
     *
     * @param int $type 
     * @param int $length 
     * @return string 
     */
    public function random($type = 0, $length = 8) {}

}
