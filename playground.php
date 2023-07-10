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

// ***************** FUNCTIONS *********************************************
echo '<br />********************* FUNCTIONS ***********************************<br />';
function sayHello($name = 'Wisest', $time = 'morning'){
    echo "Good $time $name";
}

sayHello('Chiji', 'afternoon');

$name = 'Gloria';
function sayHi() {
    echo "Hello $name";
}

sayHi();
function formatProduct($product) {
    // echo "{$product['name']} costs ₦{$product['price']}";
    return "<br /> {$product['name']} costs ₦{$product['price']}";
}

$formatted = formatProduct(['name' => 'gold star', 'price' => 500]);
echo $formatted;

echo $_SERVER['SERVER_NAME'] . '<br />';
echo $_SERVER['REQUEST_METHOD'] . '<br />';
echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
echo $_SERVER['PHP_SELF'] . '<br />';

if(isset($_POST['submit'])){
    // cookie for gender
    setcookie('gender', $_POST['gender'], time() + 86400);
    session_start();

    $_SESSION['name'] = $_POST['name'];
    echo $_SESSION['name'];

    header('Location: index.php');
}

$my_file = 'love.txt';

if(file_exists($my_file)) {
    // read file
    echo readfile($my_file) . "<br />";

    // copy file
    copy($my_file, 'quotes.txt');

    // absolute path
    echo realpath($my_file);

    // file size
    echo filesize($my_file);

    // rename
    rename('quotes.txt', 'my_love.txt');
} else {
    echo 'File does not exist';
}

mkdir('quotes');
echo $quotes . " 322 <br />";

// file system part 2
$second_file = 'my_love.txt';

// opening a file for reading
$handle = fopen($second_file, 'a+');

// read the file
// echo fread($handle,filesize($second_file)) . "331 <br /> ";

// read single line
// echo "yes" . fgets($handle);

// read single character
// echo fgetc($handle);

// writing to a file
fwrite($handle, "\n John 3:16");

fclose($handle);
unlink($second_file);

// classes
class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this -> email = $email;
        $this -> name = $name;
    }

    public function login() {
        // echo 'the user logged in';
        echo $this -> name . ' Logged in';
    }
}

// instantiate class
$userOne = new User('Chijioke', 'wisest@wisestmedia.tech');

$userOne -> login();
echo $userOne -> name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name">
        <select name="gender" id="gender">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>