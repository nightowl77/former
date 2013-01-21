<?php
require 'vendor/autoload.php';
use Former\Facades\Agnostic as Former;
$query = array(
  array('name' => 'foo', 'id' => 'flu'),
  array('name' => 'bar', 'id' => 'vlr'),
);
?>
<!DOCTYPE html>
<html>
<head>
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
</head>
<body>
  <?= Former::horizontal_open('foo')->method('POST')->rules(array(
  'name' => 'required|max:5')) ?>

    <?php Former::populate(array('names_0' => true)) ?>

    <?= Former::legend('foobar') ?>
      <?= Former::text('name')->alpha_dash() ?>
      <?= Former::select('foo')->fromQuery($query, 'name', 'id')->state('error')->inlineHelp('DONT DO THAT') ?>
      <?= Former::textarea('foonul')->rows(10)->columns(25) ?>
      <?= Former::checkboxes('names', 'Names')->checkboxes('Maxime', 'Yves') ?>
    <?= Former::actions('foobar')->large_primary_submit() ?>

  <?= Former::close() ?>
</body>
</html>
