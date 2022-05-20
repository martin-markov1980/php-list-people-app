<?php

include './lib/functions.php';

$people_count = count(get_people());

include './layout/header.php';

echo '<h2>With more then ' . $people_count . ' users contact us</h2>';

include './layout/footer.php';