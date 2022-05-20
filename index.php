<?php

include './lib/functions.php';

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
        <th>Sex</th>
        <th>Icon</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($people as $person) { ?>
        <tr>
          <td><?php echo $person['name']?></td>
          <?php if (array_key_exists('age', $person) && $person['age'] !== '') { ?>
            <td><?php echo $person['age']?></td>
          <?php } else { ?>
          <td>Unknown</td>
          <?php } ?>
          <td><?php echo $person['sex']?></td>
          <td><img src="<?php echo $person['icon']?>" alt="icon" style="width: 30px"></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>

    <?php include './layout/footer.php';?>
