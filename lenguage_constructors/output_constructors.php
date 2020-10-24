<?php

/**
 * Output constructors
 *
 */

# These methods print any output and stop the script execution #

/*
die('this is a output constructor');
exit('this is a output constructor too');
*/

$myVal = (function(){
    # return a value for caller and stop the actual script
    return "foo";
})();

echo "This is a output constructor {$myVal}";
print_r("This is a output constructor {$myVal}");

