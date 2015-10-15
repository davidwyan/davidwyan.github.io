<!DOCTYPE html>
<html>
<head>
<title>My Very First PHP Page</title>
</head>

<body>
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

//This is your first PHP page!

/*	PHP: Hypertext Preprocessor
*******************************
*	This will teach you some basic
*	things about the language.
*/

//This is an inline comment
/*This is a block comment */

/*	PHP is dynamically typed, which means you don't have to instantiate your variable
**	or declare is to start using it  */

$variable = "contents";
$another_variable = "variable";
$string_interpreted = "string with a $variable";
$string_literal = 'string with a $variable';
$int = 6;
$float = 6.0;
$boolean = true;
$first_array[0] = 0;
$first_array[1] = 2;
$first_array['two'] = 4;
$first_array[$int] = "Hello there!";
$first_array[$$another_variable] = true;

$second_array = Array(1,2,3,4,5);
$second_array[] = 6;
$second_array[] = $first_array;

echo $variable.'<br />';
echo $string_interpreted.'<br />'.$string_literal.'<br />';
echo "$int<br />$float";
echo $boolean;
echo '<br />';
print_r($second_array);
?>
</body>
</html>