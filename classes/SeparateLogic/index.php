<?php

$books = [
    ['name' => 'Colony', 'author' => 'M.Kidruk', 'year' => 2023, 'url' => 'http://gotosomeurl.com'],
    ['name' => 'Robin Good', 'author' => 'John Doe', 'year' => 1950, 'url' => 'http://gotosomeurl.com'],
    ['name' => 'Harry Potter', 'author' => 'Joahn Rouling', 'year' => 1990, 'url' => 'http://gotosomeurl.com'],
    ['name' => 'My pet', 'author' => 'Hue Lua', 'year' => 2000, 'url' => 'http://gotosomeurl.com'],
    ['name' => 'My cat', 'author' => 'Hue Lua', 'year' => 2001, 'url' => 'http://gotosomeurl.com'],
    ['name' => 'My dog', 'author' => 'Hue Lua', 'year' => 2002, 'url' => 'http://gotosomeurl.com'],
    ['name' => 'The Venus', 'author' => 'Some Astronaut', 'year' => 1950, 'url' => 'http://gotosomeurl.com'],
    ['name' => 'The Mars', 'author' => 'Some Astronaut', 'year' => 1950, 'url' => 'http://gotosomeurl.com'],
    ['name' => 'Robin Bobin', 'author' => 'John Doe', 'year' => 1930, 'url' => 'http://gotosomeurl.com'],
];

$filteredBooks = array_filter($books, function ($book) {
    return $book['year'] >= 2000;
});

require "index.view.php";
