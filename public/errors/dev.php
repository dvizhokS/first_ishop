<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
</head>
<body>
    <h1>An error has occurred</h1>
    <p><b>Code errors:</b> <?= $errno ?> </p>
    <p><b>Text errors:</b> <?= $errstr ?> </p>
    <p><b>File errors:</b> <?= $errfile ?> </p>
    <p><b>Line errors:</b> <?= $errline ?> </p>
</body>
</html>