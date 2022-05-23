<?php include './lib/functions.php';?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $name = $_POST['name'];
  $age = $_POST['age'];
  $sex = $_POST['sex'];
  $target_dir = "uploads/";
  $target_file = $target_dir . $_FILES["icon"]["name"];
  move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file);

  $new_person = [
    'name' => $name,
    'age' => $age,
    'sex' => $sex,
    'icon' => $target_file
  ];

  save_person($new_person);

  header("Location: /php");

}

?>

<?php include './layout/header.php'; ?>

<h2>Add person</h2>

<form action="add-person.php" method="post" enctype="multipart/form-data">
  <div>
    <label for="name">Name</label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">Age</label>
    <input type="number" name="age">
  </div>
  <div>
    <label for="sex">Sex</label>
    <input type="text" name="sex">
  </div>
  <div>
    <label for="icon">Avatar</label>
    <input type="file" name="icon">
  </div>
  <button type="submit">Add Person</button>
</form>

<?php include './layout/footer.php';?>
