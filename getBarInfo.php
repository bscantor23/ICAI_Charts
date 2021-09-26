<?php

require_once "models/Topic.php";
$topics = (new Topic("2020"))->getInfoChart();

$results = array();
array_push($results, ['Topic', 'Accepted', 'Rejected']);

foreach ($topics as $topic) {
  array_push($results, [$topic->getName(), (int)$topic->getAccepted(), (int)$topic->getRejected()]);
}

echo json_encode($results);
