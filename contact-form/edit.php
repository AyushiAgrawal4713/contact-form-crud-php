<?php
include 'db.php';
$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM contacts WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<form method="POST">
    <input type="text" name="name" value="<?= $row['name']; ?>" required>
    <input type="email" name="email" value="<?= $row['email']; ?>" required>
    <textarea name="message" required><?= $row['message']; ?></textarea>
    <button name="update">Update</button>
</form>

<?php
// UPDATE
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    mysqli_query(
        $conn,
        "UPDATE contacts SET
         name='$name',
         email='$email',
         message='$message'
         WHERE id=$id"
    );

    header("Location: index.php");
}
?>
