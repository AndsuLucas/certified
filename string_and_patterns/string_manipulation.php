<h1>String manipulation</h1>	
<pre>
<h2>Strpos / Stripos</h2>
<?php 
/**
*strpos return the index of the first ocurrence of the pattern
*/				
$myString = "Anderson Lucas vai conseguir tirar sua certificação!";

var_dump(strpos($myString, "Anderson Lucas")); //return 0 (index);

if (strpos($myString, "Anderson Lucas")) { //no passing in the codition because 0(index) equals false!
	echo "Match!";
}
/**
* The correct is
*/
if (false !== strpos($myString, "Anderson Lucas")) {
	echo "Match!";
}
$stringTwo = "One One Two Thre";
/**
* The third parameter is a start of search in the string.
*/

$start = strpos($stringTwo, " ");
var_dump(strpos($stringTwo, "One", $start));

var_dump(strpos($stringTwo, "One", -1));//return false and trigger an warning

var_dump(stripos($string, "ONE")); //return true becaus 'stripos' is case insensitive.
?>
<h2>String = arrays ?</h2>
<?php 

$stringArr = "12345";

print_r($stringArr[0]);
?>