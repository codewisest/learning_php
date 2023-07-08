<?php
    include('config/db_connect.php');
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
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <div>
                <div>
                    <div>
                        <h6><?php echo htmlspecialchars($row['title']); ?></h6>
                        <ul>
                            <?php foreach(explode(',', $row['ingredients']) as $ingredient):?>
                                    <li><?php echo htmlspecialchars($ingredient)?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div>
                        <a href="#">More info</a>
                    </div>
                </div>
            </div>
        <?php endwhile;?>
    </div>
 </div>
 <?php
    include('templates/footer.php');
?>
</html>