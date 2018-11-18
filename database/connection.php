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

function validateLogin($username, $password) {
  global $db;
  $stmt = $db->prepare('SELECT * FROM user WHERE username = ? AND password = ? ');
  $stmt->execute([$username, $password]);
  return $stmt->fetch();
}

function userExists($username) {
  global $db;
  $stmt = $db->prepare('SELECT * FROM user WHERE username = ? ');
  $stmt->execute([$username]);
  return $stmt->fetch();
}

function insertUser($username, $password, $email) {
  global $db;
  $stmt = $db->prepare('INSERT INTO user (username, password, email) VALUES (?, ?, ?) ');
  return $stmt->execute([$username, $password, $email]);
}

function insertComment($post_id, $username, $text) {
  global $db;
  $stmt = $db->prepare('INSERT INTO comment (id, post_id,username, text) VALUES (NULL,?, ?, ?) ');
  return $stmt->execute([$post_id, $username, $text]);
}

?>