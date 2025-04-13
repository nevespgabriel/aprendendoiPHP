<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>
<body>
    

<?php

    $string = $_POST['string'];
    $string = explode("#", $string);
    $string[1] = explode(",", $string[1]);
    $string = [
        "family" => $string[0],
        "names" => $string[1],
        "pet" => $string[2]
    ];
    ?>
    <h2><?=ucfirst(array_key_first($string)) . " " .  current($string)?></h2>
    <ul>
    <?php 
        array_shift($string);
        $string = array_reverse($string);
        foreach ($string as $key => $value) :
            
    ?>
        <li><?php 
                if(!is_array($value)){
                    echo "<strong>" . ucfirst($key) . "</strong>" . ": " . $value;
                } else{
                    echo "<strong>Members</strong>:";
            ?>
            <ol>
                <?php
                    foreach($value as $v): 
                ?>
                <li><?=$v?></li>
                <?php
                    endforeach;
                ?>
            </ol>
            <?php
                }
            ?>
        </li>
    <?php
        endforeach;
    ?>
    </ul>

</body>
</html>