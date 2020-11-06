<?php
  session_start();

  include "inc/connection.php";
  include "inc/arrays.php";
  include "inc/functions.php";

  if(isset($_SESSION['user_id'])) {
    $checkUserBanned_Query = "SELECT baneado FROM usuarios WHERE id = ?";
    $checkUserBanned = $db->prepare($checkUserBanned_Query);

    $checkUserBanned->execute(array($_SESSION['user_id']));
    $bannedColumn = $checkUserBanned->fetch(PDO::FETCH_OBJ);

    $banned = $bannedColumn->baneado;
    if($banned == 1) {
      echo '<script>window.location.href = "/logout?logout";</script>';
    }
  }
?>

<?php include "inc/web.php"; ?>