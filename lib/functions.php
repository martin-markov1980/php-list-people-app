<?php

function get_people() {
  $people_data_json = file_get_contents('data_json/people_data.json');
  return json_decode($people_data_json, true);
}

function save_people($people) {
  $people_json = json_encode($people, JSON_PRETTY_PRINT);
  file_put_contents('data_json/people_data.json', $people_json);
}
