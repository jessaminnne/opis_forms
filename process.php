<?
require_once "pdo.php";

if( $_POST )
{

  $users_name = $_POST['name'];
  $users_email = $_POST['email_addr'];
  $users_email_two = $_POST['email_addr_repeat'];
  $users_password = $_POST['password'];
  $users_password_two = $_POST['password_repeat'];

  $sql = "INSERT INTO user (user_name, password, email)
                VALUES (:user_name, :password, :email)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(array(
          ':user_name' => $users_name,
          ':password' => $users_password,
          ':email' => $users_email));

header("Location: registration2.html");

}
?>
