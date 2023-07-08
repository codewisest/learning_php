<?php
    $user = 'wisestme';
$password = 'dummy1234';
$db = 'pizza_domain';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

// check connection
    if(!$success) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

    $query = 'SELECT title, ingredients, id FROM pizzas';
    $result = mysqli_query($link, $query);
    mysqli_close($link);
    // $row = mysqli_fetch_assoc($result);
    // print_r(explode(',', $row['ingredients']));
  
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include('templates/header.php');
?>
 <h4>Pizzas</h4>
 <!-- <?php print_r($row) ?> -->
 <div>
    <div>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <div>
                <div>
                    <div>
                        <h6><?php echo htmlspecialchars($row['title']); ?></h6>
                        <ul>
                            <?php foreach(explode(',', $row['ingredients']) as $ingredient) {?>
                                    <li><?php echo htmlspecialchars($ingredient)?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div>
                        <a href="#">More info</a>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
 </div>
 <?php
    include('templates/footer.php');
?>
</html>