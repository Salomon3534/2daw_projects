<?php
$books = null;

$total = null;
$amount_pass = null;

const PASS_DISCOUNT = 0.05;
const IVA = 0.21;

function get_input(string $message) {
    return readline($message);
}

function get_books_total() {
    foreach ($books as $name => $price) {
        
    }
}


$librarian_name = get_input("What is your name?");
$libraraian_age = get_input("How old are you?");

$amount_books = get_input("How many book do you wanna buy?");



for ($i = 1; $amount_books;) {
    $book_name = get_input("Books name:");
    $book_price = get_input("Books price:");

    $books[$book_name] = $book_price;

    $total = get_books_total()