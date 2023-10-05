
<form action="bai3.php" method="post">
    <div>
        <label for="name">Name:</label>
        <input type="name" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''?>">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''?>">
    </div>
    <div>
        <label for="website">Website:</label>
        <input type="website" id="website" name="website" value="<?php echo isset($_POST['website']) ? htmlspecialchars($_POST['website']) : ''?>">
    </div>
    <div>
        <label for="comment">Comment:</label>
        <input type="comment" id="comment" name="comment" value="<?php echo isset($_POST['comment']) ? htmlspecialchars($_POST['comment']) : ''?>">
    </div>
    <div>
        <label for="gender">Gender: </label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

<?php
if (isset($_POST["name"], $_POST["email"], $_POST["website"], $_POST["comment"], $_POST["gender"])) {
    ?>
    <p>Name:
        <?php echo $_POST["name"]; ?>
    </p>
    <p>Email:
        <?php echo $_POST["email"]; ?>
    </p>
    <p>Website:
        <?php echo $_POST["website"]; ?>
    </p>
    <p>Comment:
        <?php echo $_POST["comment"]; ?>
    </p>
    <p>Gender:
        <?php echo $_POST["gender"]; ?>
    </p>
    <?php
}
?>
