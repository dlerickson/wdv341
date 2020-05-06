<?php

session_start();
//add pdo here
//
//try {
//
//  if (isset($_POST["login_submit"])) {
//
////    if (empty($_POST[ "event_user_name" ]) || empty($_POST[ "event_user_password" ])) {
////      $message = '<label>All fields are required</label>';
////    } else {
////      $query = "SELECT * FROM event_user WHERE event_user_name = :event_user_name AND event_user_password = :event_user_password";
////
////      $stmt = $conn->prepare($query);
////      $stmt->execute(
////        array( 'event_user_name' => $_POST["event_user_name"],
////          'event_user_password' => $_POST["event_user_password"]));
////
////      //$stmt->setFetchMode( PDO::FETCH_ASSOC );
////
////      $count = $stmt->rowCount();
////
////      if ($count > 0) {
////        $_SESSION["validUser"] = "false";
////        $_SESSION["username"] = $_POST["username"];
////        header("Location: validUser.php");
////
////      } else {
////        $message = '<label>Invalid Credentials</label>';
////      }
////
////      if ( $_SESSION[ "validUser" ] == true ) {
////        header( "Location: validUser.php" );
////      }
////    }
////  }
//	  
//} catch ( PDOException $e ) {
//
//  echo "There has been a problem. The system administrator has been contacted. Please try again later.";
//
//}

// just finish your homework Don
$inUser = "";
$inPass = "";

if ( isset( $_POST[ "login_submit" ] ) ) {

  $inUser = $_POST[ "event_user_name" ];
  $inPass = $_POST[ "event_user_password" ];

  //hardcode to wrap this up
  if ( $inUser == 'wdv341' && $inPass == 'wdv341' ) {
	  
    $_SESSION[ "validUser" ] = "true";

    if ( $_SESSION[ "validUser" ] == true ) {
      header( "Location: validUser.php" );
    } else {
      $_SESSION[ "validUser" ] = false;
      echo "Invalid Creds";
    }
  } else {
	  echo "Invalid Creds";
  }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log-In</title>
</head>

<body>
<h1>WDV341 Log-In</h1>
<form name="login" method="post" action="login.php">
  <p>
    <label>User Name: </label>
    <input type="text" name="event_user_name" id="event_user_name" value="<?php $inUser; ?>">
  </p>
  <p>
    <label>Password: </label>
    <input type="password" name="event_user_password" id="event_user_password" value="<?php $inPass; ?>">
  </p>
  <p>
    <input type="submit" name="login_submit" id="login_submit" value="Submit">
    <input type="reset" name="Reset" id="button" value="Reset">
  </p>
</form>
</body>
</html>