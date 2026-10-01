<?php
$books = [];

$total = 0;
$amount_pass = 0;

const PASS_DISCOUNT = 0.05;
const IVA = 0.21;

$librarian_name = null;
$librarian_age = null;
$amount_books = null;

function get_input(string $message) {
    echo $message . " ";
    return trim(fgets(STDIN));
}

function get_books_total(array $books) {
    $total_amount = 0;
    foreach ($books as $name => $price) {
        $total_amount = $total_amount + (float)$price;
    }
    return $total_amount;
}

$librarian_name = (string)get_input("What is your name?:\n");
$librarian_age = (int)get_input("How old are you?:\n");
$amount_books = (int)get_input("How many books do you wanna buy?:\n");

for ($i = 0; $i < $amount_books; $i++) {
    $book_name = get_input("Book name:");
    $book_price = get_input("Book price:");

    $books[$book_name] = $book_price;
}

$total = get_books_total($books);
echo "Total cost: " . $total . "\n";