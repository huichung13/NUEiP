<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>一、</div>
    <div>二、「人易科技:上 機 測 驗 - 演算法」</div>
    <?php
    $q2 = "人易科技:上 機 測 驗 - 演算法";
    $a10 = strpos($q2, ":");
    //echo $a1;
    $a11 = substr_replace($q2, "：", 12, 1);
    echo $a11;
    echo "<br>";
    

    $a20 = str_replace(" ", "", $a11);
    $a21 = str_replace("-", " - ", $a20);
    echo $a21;
    echo "<br>";


    $a30 = mb_substr($a21, 5, 4 );
    echo $a30;



    

    


   
    
    
    ?>
    <div></div>
    <div></div>
    <div></div>
</body>
</html>