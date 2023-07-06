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

// Indexed arrays
$peopleOne = ['shaun', 'crystal', 'ryu'];

// for loop
echo '<br />';
for($i = 0; $i < count($peopleOne); $i++) {
    echo "$peopleOne[$i] <br />";
}


foreach($peopleOne as $person) {
    echo "$person <br / >";
}
echo $peopleOne[1];

$peopleTwo = array('Ken', 'chun-li', 'Jax');
echo $peopleTwo[1];

$ages = [20, 30, 40, 50];
print_r($ages);

$ages[1] = 25;
print_r($ages);

$ages[] = 60;
print_r($ages);

array_push($ages, 70);
print_r($ages);

echo count($ages);

$peopleThree = array_merge($peopleOne, $peopleTwo);

print_r($peopleThree);

// Associative array
$ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
print_r($ninjasOne);

$ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow');

print_r($ninjasTwo);

$ninjasTwo['toad'] = 'pink';
print_r($ninjasTwo);

echo count($ninjasOne);

$ninjasThree = array_merge($ninjasOne, $ninjasTwo);

print_r($ninjasThree);

// multi-dimensional arrays
$blogs = [
    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
    ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
];

foreach($blogs as $blog) {
    // echo "$blog['author'] - $blog['title'] <br />";
    echo '###############';
    echo $blog['author'] . '-' . $blog['title'] . '<br/>';
}

$i = 0;
while($i < count($blogs)) {
    echo '<br />';
    echo $blogs[$i]['title'];
    $i++;
}

echo '******************************************************';
print_r($blogs);
echo '&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&';
echo $blogs[1]['title'];

$blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];
print_r($blogs);

$popped = array_pop($blogs);
print_r($popped);

// @@@@@@@@@@@@@@@@@@@@@@@ CONDITIONALS @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
$price = 20;

if($price < 20) {
    echo 'If condition met';
} else if($price < 30) {
    echo 'Else if condition met';
} else {
    echo 'No condition met';
}

foreach($blogs as $blog) {
    if($blog['likes'] > 40) {
        echo '!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!';
        echo $blog['title'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP file</title>
</head>
<body>
    <h1><?php echo 'Hello Wisest'; ?></h1>
    <p><?php echo "Hello $name"; ?></p>
    <p><?php echo "I am $age years old"; ?></p>
    <p><?php echo "STATE";?></p>
    <h2>Blogs</h1>
    <ul>
        <?php foreach($blogs as $blog){ ?>
            <h3><?php echo $blog['title'] ;?></h3>
            <h4><?php echo $blog['author'] ;?></h4>
        <?php } ?>

    </ul>

    <ul>
        <?php foreach($blogs as $blog) { ?>
            <?php if($blog['likes'] > 40){ ?>
                <li><?php echo $blog['title'] ?></li>
            <?php } ?>
        <?php } ?>
    </ul>
</body>
</html>