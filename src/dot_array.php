<?php

if(! function_exists('dot_array')) {
    /**
     * Null safe accessor function for an array based on a delimiter.
     *
     * @param  string  $needle
     * @param  array   $haystack
     * @param  string  $delimiter
     *
     * @return mixed
     */
    function dot_array(string $needle, array $haystack, string $delimiter = '.')
    {
        $jumps = explode($delimiter, $needle);
        $hay   = &$haystack;

        foreach ($jumps as $jump) {
            if (! isset($hay[$jump])) {
                return null;
            }

            $hay = $haystack[$jump];
        }

        return $hay;
    }
}