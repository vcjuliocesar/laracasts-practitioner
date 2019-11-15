<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Classes</title>
  </head>
  <body>
    <ul>
      <?php foreach ($tasks as $task):?>
        <?php if ($task->isCompleted()): ?>
          <strike> <li><?= $task->description; ?></li></strike>
          <?php else: ?>
              <li><?= $task->description; ?></li>
        <?php endif; ?>

    <?php endforeach; ?>
    </ul>
  </body>
</html>
