<?php

require_once "models/Edition.php";

$editions = (new Edition())->getEditions();

$results = $editions;
foreach ($editions as $edition) {
  array_push($results, [$topic->getName(), (int)$topic->getAccepted(), (int)$topic->getRejected()]);
}

echo $editions[1]->toString();

