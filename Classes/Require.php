<?php 

include 'Person.php';
include_once 'Author.php';

# include continues if file not found... require terminates
require "RandomClass.php";

$newAuthor = new Author("Samuel Langhorne", "Clemens", 1835);
echo $newAuthor->getCompleteName();
