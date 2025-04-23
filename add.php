<?php include 'db.php'; ?>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, course) VALUES ('$name', '$email', '$course')";
    mysqli_query($conn, $sql);
    header("Location: index.php");
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Student Name" required><br>
    <input type="email" name="email" placeholder="Student Email" required><br>
    <input type="text" name="course" placeholder="Course" required><br>
    <button type="submit" name="submit">Add Student</button>
</form>
