<?php
// php create-page.php <name>
require_once "bootstrap.php";

$newPageTitle = $argv[1];

$title = new Pages();
$title->setTitle($newPageTitle);

$entityManager->persist($title);
$entityManager->flush();

echo "Created Page with ID " . $title->getId() . "\n";
