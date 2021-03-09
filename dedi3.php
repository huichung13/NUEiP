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
    
    
    $listA = array(77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9);
    $listB = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
    $sumEve = 0;
    $sumOdd = 0;
    
    foreach ($listB as $key => $value) {
        if ($value % 2 == 0) {
            $sumEve += $value; 
        }else{
            $sumOdd += $value;
        }
    }
    $minus = $sumOdd - $sumEve;
    echo "「奇數值總和」減去「偶數值總和」：" . $minus;
    echo "<br>";

    $arrEve = [];
    $arrOdd = [];

    foreach ($listB as $key => $value) {
        if ($value % 2 == 0) {
            $arrEve[] = $value;
        }else{
            $arrOdd[] = $value;
        }
    }

    echo "「偶數值」陣列：";
    print_r($arrEve);
    // foreach ($arrEve as $key => $value) {
    //     echo $key . "=>" . $value ;
    // }
    echo "<br>";
    echo "「奇數值」陣列：";
    print_r($arrOdd);

    
    ?>
  
</body>
</html>