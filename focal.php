<?php
if (isset($_post['submit'])){
    define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'focal');
 
  // Connect to the database
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  if (isset($_POST['submit'])) {
    // Grab the profile data from the POST
    $name = mysqli_real_escape_string($dbc, trim($_POST['name']));
    $tel = mysqli_real_escape_string($dbc, trim($_POST['tel']));
    $emial = mysqli_real_escape_string($dbc, trim($_POST['email']));
    $message = mysqli_real_escape_string($dbc, trim($_POST['message']));

    if (!empty($name) && !empty($tel) && !empty($email) && !empty($message)) {
      $query = "INSERT INTO focal (name, tel, email, message) VALUES ('$name', '$tel', '$email', '$message')";
        mysqli_query($dbc, $query);
       
    }
  }

  mysqli_close($dbc);
}
?>