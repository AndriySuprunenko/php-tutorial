
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>

<body>
    <?php
    // Data
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
    // Funtion
    function filter($books, $author)
    {
        $filteredBooks = [];
        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }
    ?>
    <h1>
        This is my favorite book
    </h1>
    <ul>
        <?php foreach (filter($books, 'M.Kidruk') as $book) : ?>
                <li>
                    <a href="<?php echo $book['url']; ?>">
                        <?php echo $book['name']; ?> (<?php echo $book['year']; ?>) - By <?php echo $book['author']; ?>
                    </a>
                </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
