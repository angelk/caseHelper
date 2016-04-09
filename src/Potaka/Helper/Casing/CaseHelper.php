<?php

namespace Potaka\Helper\Casing;

/**
 * Description of Case
 *
 * @author po_taka <angel.koilov@gmail.com>
 */
class CaseHelper
{
    /**
     * Convert string to CamelCase
     * @param string $string
     * @return string
     */
    public function bumpyCase($string)
    {
        $words = explode('_', $string);
        foreach ($words as &$word) {
            $word = ucfirst($word);
        }
        unset ($word);
        
        $camelCase = implode('', $words);
        return $camelCase;
    }
    
    public function camelCase($string)
    {
        $bumpyCase = $this->bumpyCase($string);
        $camelCase = lcfirst($bumpyCase);
        return $camelCase;
    }
}