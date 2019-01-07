<?php

/**
 * Linear time complexity function to traverse associative arrays using dot notation.
 *
 * @return any
 */
function dotseek(string $needle, array $haystack)
{
    $jumps = explode('.', $needle);
    $hay   = &$haystack;

    foreach ($jumps as $jump) {
        if (!isset($hay[$jump])) {
            return null;
        }

        $hay = $haystack[$jump];
    }

    return $hay;
}
