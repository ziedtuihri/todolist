<!-- template.php -->
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
        <?= $todo ?>
    </li>
    <?php endforeach ?>
  </ul>
</body>
</html>
