<?php

require_once "models/Topic.php";
require_once "models/EditionTopic.php";

$topics = (new Topic($_POST['year']))->getInfoChart();

$results = array();
array_push($results, ['Topic', 'Accepted', 'Rejected']);

foreach ($topics as $topic) {
  array_push($results, [$topic->getName(), (int)$topic->getAccepted(), (int)$topic->getRejected()]);
}

$editionTopic = new EditionTopic($_POST['year']);
$data = array('papers' => $editionTopic->getPapers(), 'accepted' => $editionTopic->getAccepted(), 'rejected' => $editionTopic->getRejected());

echo json_encode([$results, $data]);
