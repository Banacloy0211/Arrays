<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = [];

        for ($i = 0; $i <= 50; $i++){
            $array[$i] = rand(0,99);
            do {
                if(isset($array[$i]) == $array[$i - 1]){
                    $array[$i]= rand(0,99);
                }
            } while (isset($array[$i]) == $array[$i - 1]);
        }
        sort($array);
        print_r($array);
    ?>
</body>
</html>