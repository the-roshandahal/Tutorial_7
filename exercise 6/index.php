<?php
require_once 'Book.php';
require_once 'Library.php';
require_once 'Member.php';

$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald");
$book2 = new Book("To Kill a Mockingbird", "Harper Lee");
$book3 = new Book("1984", "George Orwell");

$library = new Library();
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

$library->displayBooks();

$member1 = new Member("Roshan Dahal", "Premium");
$member2 = new Member("Thapa Ram", "Standard");

$member1->borrowBook($book1);
$member1->borrowBook($book3);
$member2->borrowBook($book2);

$member1->displayBorrowedBooks();
$member2->displayBorrowedBooks();
?>