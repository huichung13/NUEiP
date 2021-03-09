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
    $arrB = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
    $arrC = [];
    $arrD = [];
    $arrE = [];
    $lenA = count($arrA);
    $lenB = count($arrB);

    for ($i=0; $i < $lenA; $i++) { 
        for ($j=0; $j < $lenB; $j++) { 
            if ($arrA[$i] == $arrB[$j]) {
                array_push($arrC, $arrA[$i]);
            }
        }
    }


    for ($i=0; $i < $lenA; $i++) { 
        
            if (!in_array($arrA[$i], $arrB)) {
                array_push($arrD, $arrA[$i]);
            }
        
    }
    


    echo "c交集 intersection：";
    print_r($arrC); 
    echo "<br>";
    echo "d差集 diff：";
    print_r($arrD); 
    echo "<br>";
    echo "e聯集 union of：";
    print_r($arrE); 
    ?>
    
</body>
</html>