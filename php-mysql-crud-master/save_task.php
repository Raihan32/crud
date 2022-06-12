<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $title = $_POST['title'];
  $harga = $_POST['harga'];
  $query = "INSERT INTO task(title, harga) VALUES ('$title', '$harga')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
