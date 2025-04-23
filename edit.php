<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    mysqli_query($conn, "UPDATE students SET name='$name', email='$email', course='$course' WHERE id=$id");
    header("Location: index.php");
}
?>

<form method="POST">
    <input type="text" name="name" value="<?= $row['name'] ?>" required><br>
    <input type="email" name="email" value="<?= $row['email'] ?>" required><br>
    <input type="text" name="course" value="<?= $row['course'] ?>" required><br>
    <button type="submit" name="update">Update</button>
</form>
