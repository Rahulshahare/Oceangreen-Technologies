<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <h1>Welcome</h1>
    <h2>See the Messages</h2>

    <?php $dir = "messages";
    $files = glob($dir . "/*.txt");
    //print_r($files);
    foreach( $files as $file){
        echo "<a href=\"{$file}\">{$file}</a><br/>";
    }
    ?>
</body>
</html>