<!-- template/list.php -->
<!DOCTYPE html>
<html>
<head>
  <title>List of todos</title>
</head>
<body>
  <h1>List of todos</h1>
  <ul>
    <?php foreach ($todos as $todo): ?>
    <li>
       <a href="show.php?id=<?= $todo['tid'] ?>"> Todo id <?= $todo['tid'] ?>:<?= $todo['todo'] ?> </a>
    </li>
    <?php endforeach ?>
  </ul>
</body>
</html>