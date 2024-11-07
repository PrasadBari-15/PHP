<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Admin</title>
</head>
<body>
    <div class="container">
        My first website
        <?php
        echo "<br>";
        echo "Hello world using php";

        //This is single line comment
       /* This
        is 
        multi-line comment
        */
           
        // Lorem ipsum dolor sit.
        // Lorem ipsum dolor sit amet.
        // Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione?
        
        //variable
        echo "<br>";
        $variable1 = 15;
        echo "Value of variable1:-",$variable1;
        echo "&nbsp";;
        $variable2 = 50;
        echo "Value of variable2:-",$variable2;
        echo "<br>";
        echo "<br>";

        //Operators 
        //1.Arithmetic Operator : +,-,*,/
        echo "Arithmetic Operators";
        echo "<br>";
        echo "Variable 1 + Variable 2 :";
        echo $variable1 + $variable2;
        echo "<br>";
        echo "Variable 1 - Variable 2 :";
        Echo $variable2-$variable1;
        echo "<br>";
        echo "Variable 1 * Variable 2 :";
        echo $variable2*$variable1;
        echo "<br>";
        echo "Variable 1 / Variable 2 :";
        echo $variable2 / $variable1;
        echo "<br>";
        echo "<br>";

        //2. Assignment Operator : =.+=.-=,*=,/=
        echo "Assignment operator";
        echo "<br>";
        $newvar=$variable1;
        echo "value of new variable is:",$newvar;
        echo "<br>";
        // $newvar +=1;
        // $newvar -=1;
        // $newvar *=2;
        $newvar /=3;
        echo $newvar;
        echo "<br>";
        echo "<br>";

        //3.Comparision Operator : ==,!=, >,<,=>,<=
       // echo "<h1>Comparision operator</h1>";
        echo "Comparision Operator";
        echo "<br>";
        echo "Value of of 1==2 is :";
        echo var_dump(1==2);
        echo "<br>";
        echo "Value of of 1!=2 is :";
        echo var_dump(1!=2);
        echo "<br>";
        echo "Value of of 1<=2 is :";
        echo var_dump(1<=2);
        echo "<br>";
        echo "Value of of 1=>2 is :";
        echo var_dump(1>=2);
        echo "<br>";
        echo "<br>";

        //4.Increment-Decrement Operator : ++,--
        echo "Increment-Decrement Operator";
        echo "<br>";
       echo $variable1++;
       echo $variable1--;
       echo ++$variable1;
       echo --$variable1;
       echo "<br>";
       echo "<br>";

       //5. Logical Operator: and(&&), or(||),not(!),xor
       echo "Logical Operator";
       echo "<br>";
       $var=(true && false);
       echo var_dump($var);
       echo "<br>";
       $a=(false || true);
       echo var_dump($a);
       echo "<br>";
       $b=(true xor true);
       echo var_dump($b);
       echo "<br>";
       $c=(!false);
       echo var_dump($c);
       echo "<br>";
       echo "<br>";

     ?>

     <?php
     echo "Data Types";
     echo "<br>";
       //Data Types in php
       /* 
       1. Integer
       2. Float
       3. Array
       4. String
       5. object
       6. boolen
       7. Null
       8. Resource
       */

       $aa=1;
       echo var_dump($aa);
       echo "<br>";

       $ab=1.9;
       echo var_dump($ab);
       echo "<br>";

       $ac="This is string";
       echo var_dump($ac);
       echo "<br>";

       $ad=true;
       echo var_dump($ad);
       echo "<br>";

       $colour=array("orange","Red","Yellow","Black");
       echo var_dump($colour);
       echo "<br>";
       echo $colour[2];
       echo "<br>";
       echo count($colour);
       echo "<br>";
       echo "<br>";

       //Constant
       echo "Constant";
       echo "<br>";
       define('pi',3.14);
       echo pi;
       echo "<br>";
       echo var_dump(pi);
       echo "<br>";
       echo pi*100;



     ?>


    </div>
</body>
</html>