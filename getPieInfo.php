<?php

require_once "models/EditionTopic.php";
$editionTopic = new EditionTopic("2020");
$data = array('papers' => $editionTopic->getPapers(), 'accepted' => $editionTopic->getAccepted(), 'rejected' => $editionTopic->getRejected());

echo json_encode($data);
