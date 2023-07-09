<?php
include('config/db_connect.php');
if(isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($link, $_POST['id_to_delete']);

    $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";
    if(mysqli_query($link, $sql)){
        // success
        header('Location: index.php');
    } else {
        // failure
        echo 'Query error: ' . mysqli_error($link);
    }
}
// check and get id parameter
if(isset($_GET['id'])){
    
    $id = mysqli_real_escape_string($link, $_GET['id']);

    

    // make sql
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    // get query result
    $result = mysqli_query($link, $sql);

    // fetch result
    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($link);

    print_r($pizza);
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
    include('templates/header.php');
?>
<div>
    <?php if($pizza): ?>
        <h4><?php echo htmlspecialchars($pizza['title']) ?></h4>
        <p>Created by: <?php echo htmlspecialchars($pizza['email']) ?></p>
        <p><?php echo date($pizza['created_at']) ?></p>
        <h5>Ingredients: </h5>
        <p><?php echo htmlspecialchars($pizza['ingredients']) ?></p>
        <!-- Delete Form -->
        <form action="details.php" method="POST">
            <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
            <input type="submit" value="Delete" name="delete">
        </form>
    <?php else: ?>
        <p>No such pizza exist.</p>
    <?php endif ?>
</div>
<?php
    include('templates/footer.php');
?>
</html>