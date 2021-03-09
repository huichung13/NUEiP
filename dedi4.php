<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <?php
    
    
    $arrA = array(77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9);
    $len = count($arrA);
    

    for ($i=1; $i < $len ;  $i++) { 
        for ($j=0; $j < $len-$i; $j++) { 
            if ($arrA[$j] > $arrA[$j+1]) {
                $tmp = $arrA[$j+1];
                $arrA[$j+1]=$arrA[$j];
                $arrA[$j]=$tmp;             
                
            }
        }
    }

    echo "正序排列後：";
    print_r($arrA);
    
    
    ?>
    <div></div>
    <div></div>
    <div></div>
</body>
</html>