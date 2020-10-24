<h1>Variables</h1>
<hr>
<pre>
<?php
    /**
     * Variables are case sensitives
     */
    $myNUMBER = 20;
    echo $MYnumber; //undefined variable.

    /**
    * The special variables "$this" can not be
    * assigned
    */

    //$this = 1; //Fatal error: can't re-assign the variable

    $a = 3;
    $myCopy = $a; //copy of $a variable.

    $myCopy +=1;

    echo $a; //3

    echo "<br>";
    //assign by reference (&)

    $b = 5;
    $myBReference = &$b;
    $myBReference += 1;
    echo $b; //6

    //$unavailableReference = &(3+3); //unexpected operator ;

    //this is a good pratice initialize variables on php
    //unitialized variables type depend of the context.
    echo isset($a) //check if variable is initialized. (true "1")
?>
<hr>
<h2>Variables scope</h2>
<?php
   /**
    * Any variables inside a function is local by default
    */
    
    function setLocalVariable(){
        $local = 123;
    }

    echo $local; //no output

    /**
     * functions can not access global variables by default
     * 
     */

     $myGlobal = 1331;

     function accessGlobal()
     {
        //  echo $myGlobal; //undefined variable 
     }

     accessGlobal();

     function accessWithSpecialFlag()
     {
         global $myGlobal;
        //or 
        var_dump($GLOBALS);
         echo $myGlobal;
     }

     accessWithSpecialFlag();
?>
<hr>
<h2>External variables</h2>
<form action="" method="post">
    Name:  <input type="text" name="personal[name]" /><br />
    Email: <input type="text" name="personal[email]" /><br />
    Beer: <br />
    <select multiple name="beer[]">
        <option value="warthog">Warthog</option>
        <option value="guinness">Guinness</option>
        <option value="stuttgarter">Stuttgarter Schwabenbräu</option>
    </select><br />
    <input type="submit" value="submit me!" />
</form>
<?php
var_dump($_POST); //form variables as array
// echo htmlspecialchars(print_r($_POST, true));

echo time();
