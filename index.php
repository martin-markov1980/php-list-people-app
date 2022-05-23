<?php

include './lib/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $id = $_POST['id'];
  $path = $_POST['path'];

  delete_person_info($id, $path);

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
        <th>Update</th>
        <th>Delete</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($people as $person) { ?>
        <tr>
          <td><?php echo $person['name'] ? : 'Unknown'; ?></td>
          <td><?php echo $person['age'] ? : 'Unknown'?></td>
          <td><a href="single-person.php?id=<?php echo $person['id']?>"><button>Details</button></a></td>
          <td><a href="update-person.php?id=<?php echo $person['id']?>"><button>Update</button></a></td>
          <form action="index.php" method="post">
            <td><button type="submit">Delete</button></td>
            <input type="hidden" name="id" value="<?php echo $person['id']?>">
            <input type="hidden" name="path" value="<?php echo $person['icon']?>">
          </form>
        </tr>
      <?php } ?>
      </tbody>
    </table>

    <?php include './layout/footer.php';?>
