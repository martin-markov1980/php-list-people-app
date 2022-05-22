<?php

include './lib/functions.php';

if ($_GET) {
  $person_id = $_GET['id'];
  $path = $_GET['path'];
  delete_person_info($person_id, $path);
  header("Location: /php");
}

$people = get_people();

$people_count = count($people);

?>

    <?php include './layout/header.php';?>

    <h2>We have <?php echo $people_count?> users registered in our app.</h2>
    <table class="table">
      <thead>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Details</th>
        <th>Delete</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($people as $person) { ?>
        <tr>
          <td><?php echo $person['name'] ? : 'Unknown'; ?></td>
          <td><?php echo $person['age'] ? : 'Unknown'?></td>
          <td><a href="single-person.php?id=<?php echo $person['id']?>">Details</a></td>
          <td><a href="/php?id=<?php echo $person['id']?>&path=<?php echo $person['icon']?>">Delete</a></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>

    <?php include './layout/footer.php';?>
