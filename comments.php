<?
require_once "pdo.php";

if( $_POST )
{

  $user_name = $_POST['name'];
  $user_comment = $_POST['comment'];

  $sql = "INSERT INTO comments (username, comment)
                VALUES (:username, :comment)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(array(
          ':username' => $user_name,
          ':comment' => $user_comment));

header("Location: comments.html");

}
?>
