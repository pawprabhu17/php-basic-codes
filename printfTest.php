<?php
	
echo '<title>printf() and sprintf() examples </title>
echo '<p style="text-decoration:underline">
		printf() and sprintf() examples
		</p>';
echo '<br/><hr/><br/>';

printf("String Specification %s and number specification %d","1st Parameter",456);

echo '<br/><hr/><br/>';

$formatString= 'String Specification %s and number specification %d';
$output = sprintf($formatString,"1st parameter",456);
echo "$output";

echo '<br/><hr/><br/>';

?>