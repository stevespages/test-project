<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Project</title>
</head>
<body>
    <h1>Test Project</h1>
    <p>
        The time according to PHP is: 
<?php
    echo date('l jS \of F Y h:i:s A');
?>
    </p>
    <p id="javascript-time-p"></p>
    <script type="module" src="./javascript/main.js">
        // console.log("what is going on?");
    </script>
</body>
</html>