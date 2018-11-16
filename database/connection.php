<?php $db = new PDO('sqlite:database.db'); 

function getPostById($id) {
  global $db;
  $query = $db->prepare('SELECT * FROM post JOIN user USING (username) WHERE id = ?');
  $query->execute(array($id));
  return $query->fetch();
}
  function getCommentsByPostId($id) {
    global $db;
    $query = $db->prepare('SELECT * FROM comment JOIN user USING (username) WHERE post_id = ?');
    $query->execute(array($id));
    return $query->fetchAll();
  }
?>