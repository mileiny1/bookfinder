<?php
header("Content-Type: application/json");

$genre = $_GET['genre'] ?? '';
$xml = simplexml_load_file("books.xml");

$result = [];

foreach ($xml->book as $book) {
    if ($genre === "" || strtolower($book->genre) === strtolower($genre)) {
        $result[] = [
            "title" => (string)$book->title,
            "author" => (string)$book->author,
            "year" => (string)$book->year,
            "genre" => (string)$book->genre
        ];
    }
}

echo json_encode($result);
