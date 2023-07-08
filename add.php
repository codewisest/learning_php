<?php
    include('config/db_connect.php');

    $title = $email = $ingredients = '';
    $errors = array('email' => '', 'title' => '', 'ingredients' => '');
    if(isset($_POST['submit'])){
        // echo htmlspecialchars($_POST['email']);
        // echo htmlspecialchars($_POST['title']);
        // echo htmlspecialchars($_POST['ingredients']);
        // check email
        if(empty($_POST['email'])) {
            $errors['email'] = 'An email is required <br />';
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email must be a valid email sddress';
            }
            
        }

        // check title
        if(empty($_POST['title'])) {
            $errors['title'] = 'A title is required <br />';
        } else {
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                $errors['title'] = 'Title must be letters only';
            }
        }

        // check ingredients
        if(empty($_POST['ingredients'])){
            $errors['ingredients'] = 'An ingredient is required';
        } else {
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                $errors['ingredients'] = 'Ingredients must me letters and spaces only';
            }
            
        }
        if(array_filter($errors)) {
            // echo 'There are errors in the form';
        } else {
            $email = mysqli_real_escape_string($link, $_POST['email']);
            $title = mysqli_real_escape_string($link, $_POST['title']);
            $ingredients = mysqli_real_escape_string($link, $_POST['ingredients']);

            // create sql
            $sql = "INSERT INTO pizzas(title,email,ingredients) VALUES('$title', '$email', '$ingredients')";

            // Save to DB and check
            if(mysqli_query($link, $sql)) {
                // success
            header('Location: index.php');

            } else {
                echo 'Query error: ' . mysqli_error($link);
            }
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include('templates/header.php');
?>
 
 <section>
    <h4>Add a Pizza</h4>
    <form action="add.php" method="POST">
        <label for="email">Your Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>">
        <div><?php echo $errors['email']; ?></div>
        <label for="email">Pizza Title:</label>
        <input type="text" name="title" id="title" value="<?php echo $title; ?>">
        <div><?php echo $errors['title']; ?></div>
        <label for="email">Ingredients</label>
        <input type="text" name="ingredients" id="ingredients" value="<?php echo $ingredients; ?>">
        <div><?php echo $errors['ingredients']; ?></div>
        <div>
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
 </section>
 <?php
    include('templates/footer.php');
?>
</html>