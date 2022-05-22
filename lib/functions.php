<?php

function get_people() {
  $database = require 'db_config.php';
  $pdo = new PDO($database['db_dns'], $database['user_name'], $database['password']);
  $results = $pdo->query('SELECT * FROM people_data');
  return $results->fetchAll();
}

function get_person($id) {
  $database = require 'db_config.php';
  $pdo = new PDO($database['db_dns'], $database['user_name'], $database['password']);
  $results = $pdo->query('SELECT * FROM people_data WHERE id ='. $id);
  return $results->fetchAll();
}

function delete_person_info($id, $path) {
  $database = require 'db_config.php';
  $pdo = new PDO($database['db_dns'], $database['user_name'], $database['password']);
  $sql = "DELETE FROM people_data WHERE id=?";
  $stmt= $pdo->prepare($sql);
  $stmt->execute([$id]);
  unlink($path);
}

function save_person($person) {
  $name = $person['name'] ? : NULL;
  $age = $person['age'] ? : NULL;
  $sex = $person['sex'] ? : NULL;
  $icon = $person['icon'] ? : NULL;

  $database = require 'db_config.php';
  $pdo = new PDO($database['db_dns'], $database['user_name'], $database['password']);
  $sql = "INSERT INTO people_data (name, age, sex, icon) VALUES (:name, :age, :sex, :icon)";
  $stmt= $pdo->prepare($sql);
  $stmt->execute([
    ':name' => $name,
    ':age' => $age,
    ':sex' => $sex,
    ':icon' => $icon,
  ]);
}
