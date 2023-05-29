<?php
echo "Wisest php...";
echo 'Learning PHP';

// variable definition
$age = 35;
echo $age;

$doubleAge = $age * 2;
echo $doubleAge;

define('VERSION', 1.2);
echo VERSION;

$firstName = 'Chiji';
echo 'My name is ' . $firstName . ' the great ';

echo '<p>' . "My name is $firstName the great" . '</p>';

// arrays
// indexable arrays
$colors = array('Red', 'Green', 'Blue');

print_r($colors);
echo '<p>' . $colors[1] . '</p>';

// add item to array
$colors[] = 'yellow';
print_r($colors);

// associative array
$home_towns = array(
    'Chiji' => 'Umunze',
    'Gloria' => 'Umunne',
    'Uzor' => 'Umuaka',
    'Marvelous' => 'Umuenyi',
);

echo '<pre>';
print_r($home_towns);
echo '</pre>';

$name = 'Chiji';
$city = 'Bowmanville';
$movie = 'God is not dead';
$friend = 'Gloria';
$fruit = 'Bananas';

echo "<h1> Hello $name </h1>";
echo "<p>We will be going to $city with $friend to see $movie. We will be going with a bunch of $fruit</p>";

if(10 < 1) {
    echo "<p>We stopped at the first if</p>";
} else if(10 < 4) {
    echo "<p> We stopped at the first else if</p>";
} else if(10 < 11) {
    echo "<p> We stopped at the second else if</p>";
} else if(10 < 20 ) {
    echo "<p>We stopped at the last esle if</p>";
} else {
    echo "<p>We stop here</p>";
}

echo "<p>I will always be run</p>";

$is_loged_in = true;

if($is_loged_in) {
    echo '<h3>Welcome back, User!</h3>';
} else {
    echo '<h3>Welcome to the site</h3>';
}

$message = $is_loged_in ? 'Welcome back!' : 'Hello There';

echo $message;

// switch statements
$total = 10;
switch ($total) {
    case 3:
        echo '<p>Total is 3</p>';
        break;
    case 6:
        echo '<p>Total is 6</p>';
        break;
    case 9:
        echo '<p>Total is 9</p>';
        break;
    default:
        echo '<p>none of the above</p>';
}
?>