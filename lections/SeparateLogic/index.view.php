<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
</head>

<body>
  <h1>
    This is my favorite book
  </h1>
  <ul>
    <?php foreach ($filteredBooks as $book) : ?>
      <li>
        <a href="<?php echo $book['url']; ?>">
          <?php echo $book['name']; ?> (<?php echo $book['year']; ?>) - By <?php echo $book['author']; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>