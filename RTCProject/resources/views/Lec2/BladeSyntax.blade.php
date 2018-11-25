<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BladeSyntax</title>
</head>
<body>

    <h1><?php 
    $X="asdasdasd";
    
    echo $X;
    
    ?></h1>
    <h1><?= $X ?></h1>
    <h1>{{$X}}</h1>

    <hr>
    <?php 
    $X=null ;
    ?>
    <h1>
        <?php
            if(isset($X)){
                echo "<h1>$X</h1>";
            }else{
                echo "<h1>no value </h1>";
            }

            ?>
    </h1>
    <h1>
            @if(isset($X)){
               <h1>{{$X}}</h1>";
            @else
              <h1>no value </h1>";
           @endif
    </h1>
</body>
</html>