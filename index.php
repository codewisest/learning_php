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
$total = 6;
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

$turtle = 'Raph';
$bandana = '';
switch($turtle) {
    case 'Leo':
        $bandana = 'blue';
        break;
    case 'Raph':
        $bandana = 'red';
        break;
    case 'Mike':
        $bandana = 'Orange';
        break;
    default:
        echo '<p>No bandana colour</p>';
}

echo "<p>$bandana</p>";

$x = 0;
$result = match($x) {
    1 => '$x is 1',
    2 => '$x is 2',
    default => "$x is neither 1 nor 2",
};
echo $result;

$result = array();
$result[] = (14 + 82 - (32 / 2)) ** 2;
$result[] = 18 * ((3 / 6) - 9) * 10;
$result[] = 5 * ((12 / 2) - (8 * 4) + (12 * 6));
print_r($result);

echo (15 % 12) ** 2;

$u = 2;
echo ++$u + --$u;

echo 3**2+5*2;

for($i = 0; $i < sizeof($colors); $i++) {
    echo "<br/>";
    echo $colors[$i];

}

foreach($colors as $color) {
    echo "<br/>";
    echo $color;
}

$fibo_sum = 0;
$sequence = array(1, 1);
$i = 1;
// while($fibo_sum < 200){
//     echo $sequence[i];

//         $fibo_sum = $sequence[$i] + $sequence[$i - 1];
//         $sequence[] = $fibo_sum;
//         $i++;
//     }
     

// ***************** THE NET NINJA *************************
echo "<br /> ***************** Hello Wisest Ninja ****************";
// phpinfo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP file</title>
</head>
<body>
    <h1><?php echo 'Hello Wisest' ?></h1>
</body>
</html>