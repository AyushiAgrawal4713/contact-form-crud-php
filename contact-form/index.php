<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
  <head></head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h2>Contact Form</h2>
    <form method="post">
      <label>Name</label>
      <input type="text" name="name" placeholder="Enter your name" required>
      <label>Email</label>
      <input type="email" name="email" placeholder="Enter your email" required>
      <label>Message</label>
      <textarea name="message" rows="4" placeholder="Enter your message" required></textarea>
      <button type="submit" name="save">Send Message</button>
    </form>
    <?php
    if(isset($_POST['save'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      mysqli_query(
        $conn,
        "INSERT INTO contacts(name, email, message) VALUES('$name', '$email',
          '$message')"
      );
    }
    ?>
<h2>Contact Messages</h2>
<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Action</th>
  </tr>
<?php
$result = mysqli_query($conn, "SELECT * FROM contacts");
while($row = mysqli_fetch_array($result)){
  ?>
  <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['message']; ?></td>
    <td>
              <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>

      <a href="delete.php?id=<?= $row['id']; ?>">Delete</a>
    </td>
    </tr>
  <?php
}
?>
</table>

  </body>
</html>