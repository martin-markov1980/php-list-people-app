<?php

include 'lib/functions.php';

$person_id = $_GET['id'];

$single_person = get_person($person_id);

$person_name = $single_person[0]['name'];
$person_age = $single_person[0]['age'];
$person_sex = $single_person[0]['sex'];
$person_icon = $single_person[0]['icon'];

?>

<?php include 'layout/header.php'; ?>

<h1>Single Person Details</h1>
<div>Person name: <span style="font-size: 30px"><?php echo $person_name ? : 'Unknown'?></span></div>
<div>Person age: <span style="font-size: 30px"><?php echo $person_age ? : 'Unknown'?></span></div>
<div>Person sex: <span style="font-size: 30px"><?php echo $person_sex ? : 'Unknown'?></span></div>
<div>Person icon: <img src="<?php echo $person_icon?>" alt="person icon" style="width: 30px"></div>


<?php include 'layout/footer.php'; ?>
