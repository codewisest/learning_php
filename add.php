<?php
    if(isset($_POST['submit'])){
        // echo htmlspecialchars($_POST['email']);
        // echo htmlspecialchars($_POST['title']);
        // echo htmlspecialchars($_POST['ingredients']);
        // check email
        if(empty($_POST['email'])) {
            echo 'An email is required <br />';
        } else {
            echo htmlspecialchars($_POST['email']);
        }

        // check title
        if(empty($_POST['title'])) {
            echo 'A title is required <br />';
        } else {
            echo htmlspecialchars($_POST['title']);
        }

        // check ingredients
        if(empty($_POST['ingredients'])){
            echo 'An ingredient is required';
        } else {
            echo htmlspecialchars($_POST['ingredients']);
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
        <input type="email" name="email" id="email">
        <label for="email">Pizza Title:</label>
        <input type="text" name="title" id="title">
        <label for="email">Ingredients</label>
        <input type="text" name="ingredients" id="ingredients">
        <div>
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
 </section>
 <?php
    include('templates/footer.php');
?>
</html>