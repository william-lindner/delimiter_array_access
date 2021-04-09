<?php

if(! function_exists('delimiter_array_access')) {
    /**
     * Null safe accessor function for an array based on a delimiter.
     * By default the delimiter is a period.
     *
     * @param  string  $needle
     * @param  array   $haystack
     * @param  string  $delimiter
     *
     * @return mixed
     */
    function delimiter_array_access(string $needle, array $haystack, string $delimiter = '.')
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