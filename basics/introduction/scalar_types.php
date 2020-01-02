<?php declare(strict_types=1); ?>
<h1>
    Scalar types <mark>is_scalar(bool, integer, float, string)</mark>
</h1>
<hr>
<h2>(bool)/(boolean) type</h2>
<pre>
<?php 
    $condition = 1==1;
    var_dump(is_scalar($condition));
    $condition2 = "1axsw" == 1; //true
    var_dump($condition2);
    $falseCondition = "asa1" == 1;
    var_dump($falseCondition); // false;    
    $condition3 = "0x" == 0;//true
    var_dump($condition3);
    /* 
    * It's true because PHP convert the string to integer after comparation.
    * (int) 2ax = 2
    */
    var_dump((int) "0x");
?>
<hr>
<?php
    /** All of falses  */
    $false1 = "" == false; // true
    $false2 = 0 == false; // true
    $false3 = 0.0 == false; //true
    $false4 = -0 == false; //true
    $false5 = [] == false; //true
    $false6 = null == false; //true
    var_dump($false1, $false2, $false3, $false4, $false5, $false6);
    
    /**
     * All of the others values is true
     */

?>
<hr>
<?php 
    /** INTEGERS */
    $decimal = 1234;
    var_dump($decimal);

    /**
     * base + x: 1 = 8 | 2 = 2 -> 012 = 10
     */
    $octal = 013; //11
    var_dump($octal);
    $octal = 016; //14
    var_dump($octal);
    $octal = 021; //17
    var_dump($octal);
    
    $hexa = 0x1A;
    var_dump($hexa); // 26

    $binary = 0b111111111;
    var_dump($binary); //511

?>

<?php 
    /* string HEREDOC */
    /*! NOT IDENTED HEREDOC */
    $string = <<<EOT
$VAR
TESTE4
EOT; echo "ok"; //output "ok" turn before heredoc

    var_dump($string);