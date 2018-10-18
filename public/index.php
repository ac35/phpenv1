<?php
use Medoo\Medoo;

require_once '../vendor/autoload.php';

$database = new Medoo([
    'database_type' => 'sqlite',
    'database_file' => '../storage/database.db'
]);
dump($database);

$comment = new SitePoint\Comment($database);
$comment->setEmail('bruno@skvorc.me')
        ->setName('Bruno Skvorc')
        ->setComment('Hooray! Saving comments works!')
        ->save();
dump($database);
dump($comment);
?>

<!doctype html>
<head>
    <title></title>
</head>
<body>
  <form method="post">
    <label for="">Name: <input type="text" name="name" placeholder="Your name"></label>
    <label for="">Email: <input type="text" name="email" placeholder="your@email.com"></label>
    <label for="">Comment: <textarea name="comment" cols="30" rows="10"></textarea></label>
    <input type="submit" value="Save">
  </form>
</body>
</html>
