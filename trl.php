<?php
$tableau = [
    'key' => 'value'
];
$books = [
    [
      'nom' => 'Koka bala',
      'author' => 'John Doe',
      'edition' => '2015 Paris',
      'pages' => 63,
    ],
    [
       'nom' => '',
      'author' => '',
      'edition' => '',
      'pages' => '', 
    ]
];

function filter(array $items, $function) {
    $filtered = [];
    foreach($items as $item) {
        if($function($item)) {
            $filtered[] = $item;
        }
    }

}
(condition) ? vrai : faux;
filter($books, function($book){
    return $book['author'] == 'John';
})
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach(filter($tableau, 'John') as $tab): ?>
            <?php if($tab['author'] == 'ed Sherran'): ?>
            <li>
                <?= $tab[''] ?>
            </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>