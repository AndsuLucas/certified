<h1>New dock and heredoc</h1>
<hr>
<?php 
/**
* We can use heredoc and new doc if we have 
* long text to processing
*/

/*newdoc*/
$longText  = <<<'MYTEXT'
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
MYTEXT; //must be the only code after our newdoc text.
//we should not use tabs or spaces in newdoc tag closing.
echo $longText;
echo "<hr>";
$name = "Anderson Lucas Silva de Oliveira";
$notInterpretVariables = <<<'ANYNAME'
	My name is $name
ANYNAME; //variables is not interpreted in newdoc

echo $notInterpretVariables;
/* Hereoc */
$variable = 19;

echo "<hr>";

$longTextHeredoc = <<<heredoc
	I have $variable years old
heredoc;//variables are interpreted
//We can use heredoc delimiters in lowercase. Uppercase is a good pratice

echo $longTextHeredoc;
?>
