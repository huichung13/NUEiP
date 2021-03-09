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
    // 子類別繼承父類別後會擁有父類別的特徵與行為能力
    // 建立抽象的交通工具vehicle
    // 讓汽車和機車繼承

    interface vehicle{
        public function tire();       

    }
    interface vehType extends vehicle{       
        function speed();
    }

    class car implements vehType{
        function tire(){
            echo "汽車有四個輪胎" . "<br>";
            
        }
        function speed(){
            echo "速度快";
        }
    }

    class autobike implements vehType{
        function tire(){
            echo "機車兩輪" . "<br>";
        }
        function speed(){
            echo "速度一般";
        }
    }

    $car = new car();
    $car -> tire();
    $car -> speed();
    echo "<hr>";
    $autobike = new autobike();
    $autobike -> tire();
    $autobike -> speed();

    ?>
    
</body>
</html>