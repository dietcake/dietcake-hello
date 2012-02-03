<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>DietCake Hello</title>
  </head>
  <body>
    <p><?php eh($message) ?></p>
    <p><?php eh(round(microtime(true) - TIME_START, 3)) ?>sec</p>
  </body>
</html>
