<?php

use Jan\DoctrineExperiments\Bug;

require_once __DIR__ . "/bootstrap.php";

$theBugId = $argv[1];

$bug = $entityManager->find(Bug::class, (int)$theBugId);

if ($bug === null) {
    echo "No bug found.\n";
    exit(1);
}

echo "Bug: " . $bug->getDescription() . "\n";
echo "Engineer: " . $bug->getEngineer()->getName() . "\n";