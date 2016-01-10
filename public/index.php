<?php


$app = require __DIR__.'/../bootstrap/app.php';

try {
  $request = Illuminate\Http\Request::capture();
  $app->run($request);
} catch(\Exception $e) {
    //todo: remove this debug code
    echo "<pre>";
    echo $e;
    echo "</pre>";
}
