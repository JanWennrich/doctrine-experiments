<?php

use Jan\DoctrineExperiments\Bug;

require_once __DIR__ . "/bootstrap.php";

$theBugId = $argv[1];

$bug = $entityManager->find(Bug::class, (int)$theBugId);
$bug->close();

$entityManager->flush();