<?php

include 'lib/functions.php';

$person_id = $_GET['id'];

$single_person = get_person($person_id);

$person_name = $single_person[0]['name'];
$person_age = $single_person[0]['age'];
$person_sex = $single_person[0]['sex'];
$person_id = $single_person[0]['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $name = $_POST['name'];
  $age = $_POST['age'];
  $sex = $_POST['sex'];
  $id = $_POST['id'];
  $target_dir = "uploads/";
  $target_file = $target_dir . $_FILES["icon"]["name"];
  move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file);

  $data = [
    'name' => $name,
    'age' => $age,
    'sex' => $sex,
    'icon' => $target_file,
    'id' => $id
  ];

  update_person($data);

  header("Location: /php");

}

?>

<?php include 'layout/header.php'?>

<h1>Update <?php echo $person_name . '\'s'?> details</h1>

<form action="update-person.php" method="post" enctype="multipart/form-data">
  <div>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php echo $person_name ?>">
  </div>
  <div>
    <label for="age">Age</label>
    <input type="number" name="age" value="<?php echo $person_age ?>">
  </div>
  <div>
    <label for="sex">Sex</label>
    <input type="text" name="sex" value="<?php echo $person_sex ?>">
  </div>
  <div>
    <label for="icon">Icon</label>
    <input type="file" name="icon">
  </div>
  <div>
    <input type="hidden" name="id" value="<?php echo $person_id ?>">
  </div>
  <button type="submit">Update</button>
</form>

</form>

<?php include 'layout/footer.php'; ?>
