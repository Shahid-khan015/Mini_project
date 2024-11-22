 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        video{
            width:100%;
            height:500px;
        }
    </style>
</head>
<body>
<?php
$link = $_REQUEST['link'];
echo "<video controls autoplay muted loop>
            <source src='$link' type='video/mp4'>
            Your browser does not support the video tag.
        </video>";
?>
</body>
</html>