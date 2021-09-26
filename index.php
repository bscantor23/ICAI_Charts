<?php

require_once "models/Edition.php";

$editions = (new Edition())->getEditions();
echo $editions[1]->toString();
echo "<br>";

require_once "models/Topic.php";
$topics = (new Topic("2020"))->getInfoChart();
echo $topics[1]->toString();
echo "<br>";

require_once "models/EditionTopic.php";
$editionTopic = new EditionTopic("2020");
echo $editionTopic->toString();
