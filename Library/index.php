<?php
require 'Book.php';
require 'Magazine.php';
require 'Member.php';
require 'Library.php';

echo "\nWELCOME TO TRIDENT ACADEMY'S LIBRARY \n";
echo "\nexplore and pick books of your choice!\n";
echo "\n";


$library = new Library();


$book1 = new Book("Iron Flame", "9875-1342-789", "Rebecca Yarros");
$mag1  = new Magazine("Vogue Magazine", "Vogue Enterprises", 101);

echo "\n";
$library->addItem($book1);
echo "\n";
$library->addItem($mag1);

echo "\n";
$member1 = new Member("Shikha", 50);
$library->addMember($member1);

echo "\n";
$member1->borrowItem($book1);
echo "\n";
$member1->borrowItem($mag1);


echo "\n ITEM DETAILS\n";

$book1->displayDetails();
echo "\n";
$mag1->displayDetails();


echo "\n MEMBER DETAILS\n";

$member1->displayMemberDetails();


echo "\n RETURN ITEMS : \n";
$member1->returnItem($book1);
?>
