<?php

require "GlobalPage.php";
require "Page.php";

$page = new Page;
echo $page->header();
$page->setText("J'ai modifié le texte car le Lorem ne me convenait pas.");
echo $page->main($page->hello(), $page->getParentClass());
echo $page->footer();
echo "<p>$page->username </p>";
echo "<h3>". Page::TYPE ."</h3>";
echo "<h3>". Page::getProp() ."</h3>";