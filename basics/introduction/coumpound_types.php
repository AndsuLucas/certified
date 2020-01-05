<h1>Compound Types (array, objects, callable, iterable)</h1>
<hr></hr>
<h2>Arrays</h2>
<pre>
<?php 
    
    $firstArray = [null => 1]; //it's equal ["" => 1]
    var_dump($firstArray);
    $automaticConvertedToInteger = ["1" => "foo"]; // it's equal [(int) 1 => "foo"]
    var_dump($automaticConvertedToInteger); // floats will be truncate and will be trate with integers
    $boolsCastWithIntegers = [false => 0, true => 1]; // [(int) 0 => 0, (int) 1 => 1]
    /**
     * Arrays and objects can't be use with a key
     * Result: Illegal Offset Type
     */
    // $illegalOffssetType = [[] => "xd"];
    // var_dump($illegalOffssetType);

?>

<hr>
<h2>Objects</h2>
<?php 
    //if we convert any value to object, the result std (object) stdClass {}
    $stdClass = (object)[]; //the empty stdClass;
    var_dump($stdClass);
    $scalarClass = (object) 1; //Acces this with $scalarClass->scalar
    var_dump($scalarClass->scalar);
    $scalarClass->xd = 2; //dynamic property set.
    var_dump($scalarClass);
?>
<hr>
<h2>Callables/Callback</h2>

<?php 
    /**
     *CALLBACK / CALLABLE
     */
    function foo($msg= ""){
        echo "bar <br>";
    }

    /**
     * CLOSURE
     */
    $foox = function ($msg) {
        echo 'foo2'.$msg . "<br>";
    }; 

    class Bar 
    {
        public function Method()
        {
            echo "Bar method!";
        }
    }

    class Foo extends Bar
    {
        public function bar($msg = "")
        {
            echo "msg = $msg <br>";
        }
    }

    call_user_func('foo'); //access callback with the name string
    call_user_func('Foo'); // this is case insenstive
    
    // call_user_func('foo2'); //not work because the closure it's a variable
    
    call_user_func(['Foo', 'bar']); //it's work 
    call_user_func_array(['Foo', 'bar'], ['myMessage']); //with params
    call_user_func($foox, 'my message');
    call_user_func_array($foox, ['myclosure!']);
    
    /**
     * Execute the parent method
     */