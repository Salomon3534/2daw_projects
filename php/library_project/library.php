<?php
$books = [];

$total = 0;

const DISCOUNT = 0.05;
const IVA = 0.21;

$buyer_name = null;
$buyer_age = null;
$number_of_books = null;

function get_input(string $message) {
    echo $message;
    return (fgets(STDIN));
}

function get_books_total(array $books) {
    $total_amount = 0;

    foreach ($books as $name => $price) {
        $total_amount = $total_amount + (float)$price;
    }

    return $total_amount;
}

$buyer_name = (string)get_input("What is the buyers name?:\n");
$buyer_age = (int)get_input("How old is the buyer?:\n");

$number_of_books = (int)get_input("How many books does the buyer want to purchase?:\n");
define("DISCOUNT_THRESHOLD", (float)get_input(
    "Enter the book amount from which the 5% discount is applied:\n"
));

for ($i = 0; $i < $number_of_books; $i++) {
    $book_title = (string)get_input("Book title:\n");
    $book_price = (float)get_input("Book price:\n");

    $books[$book_title] = $book_price;
}

$total = get_books_total($books);

echo "Books bougth:\n";

foreach ($books as $title => $price) {
    $price_with_iva = $price + ($price * IVA);

    echo "Title: " . $title . "\n";
    echo "Original price: " . $price . " €\n";
    echo "Price with IVA: " . $price_with_iva . " €\n";
    echo "\n";
}

$total_with_iva = $total + ($total * IVA);

echo "Total to pay with IVA: " . $total_with_iva . " €\n";

if ($total_with_iva >= DISCOUNT_THRESHOLD) {
    $discount = $total_with_iva * DISCOUNT;
    $total_with_discount = $total_with_iva - $discount;

    echo "5% discount applied.\n";
    echo "Total after discount: " . $total_with_discount . " €\n";
}
?>