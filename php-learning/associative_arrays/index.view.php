<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= "php-learning"; ?></title>
  </head>
  <style media="screen">
    header{
      background: #e3e3e3;
      padding: 3em;
      text-align: center;
    }
  </style>
  <body>
    <header>
      <h1>
        Associative arrays
      </h1>
    </header>

    <ul>
      <?php foreach ($tasks as $key => $task):?>
        <?php if($key == 'completed'): ?>
          <li><strong><?= ucwords($key); ?> :</strong><?= $task ? 'Finished':'Incomplete'; ?></li>
            <?php else: ?>
              <li><strong><?= ucwords($key); ?> :</strong><?= $task; ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>
  </body>
</html>
