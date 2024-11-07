<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP +BASICS</title>
</head>
<body>
    <div class="container">
        <?php
        echo "Conditional Statement";
        echo "<br>";
        $age=19;
        if($age>=18){
            echo "You are eligible to vote";
        }
        else if($age<=5){
            echo "You are a kid now";
        }
        else echo "You are not eligible for vote";
        echo "<br><br>";

        //Loops in PHP
        //While loop
        echo "Loops In PHP";
        echo "<br> While Loop";
        $value=0;
        while($value<=10){
            echo "<br>";
            echo $value;
            $value++;
        }

        //Iterative method while printing array

        $Languages=array("C","C++","Java","Python");
        $a=0;
        while($a < count($Languages)){
            echo "<br>",$Languages[$a];
            $a++;
        }

        //for loop
        

        for($b=0;$b<=10;$b++){
            echo "<br>",$b;
        }
        echo "<br>";

        for($c=0;$c<=5;$c++){
            for($v=0;$v<=$c;$v++){
                echo "*";
                
            }
            echo "<br>";
        }


        ?>
    </div>
    
</body>
</html>