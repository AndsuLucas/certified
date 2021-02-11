<?php

function incrementingBeforeReturn($initial)
{
	echo ++ $initial;
}

function incrementingAfterReturn($initial)
{
	echo $initial ++;
}

incrementingBeforeReturn(3); // 4
incrementingAfterReturn(3); // 3

// The same behavior for decrementing



echo $nullVar ++; // Declare the null variable and increase 1 but without print because the incrementing is after return
echo ++ $nullVar2; // declare the null variable and print because the incrementing is before return


// echo ++3; // error