<?php
echo "<h2> If - Else Statements </h2>";

// If Statement:
echo "<h3>1. If Statement:  === >></h3>";
$num_1 = 32;
$num_2 = 0;

if ($num_1 > $num_2){
    echo "Have a great day.";
}

echo "<br>";

// If-Else Statement:
echo "<h3>2. If-Else Statement:  === >></h3>";
$Marks_1 = 32;

if ($Marks_1 >= 33){
    echo "You are Pass the exam.";
}else{
    echo "You are Fail in exam.";
}

echo "<br>";

// If-Elseif-Else Statement:
echo "<h3>3. If-Elseif-Else Statement:  === >></h3>";
$Marks_2 = 68;

if (100 >= $Marks_2 && $Marks_2 > 90){
    echo "You gain A1 Grade";
}elseif(90 >= $Marks_2 && $Marks_2 > 80){
    echo "You gain A2 Grade.";
}elseif(80 >= $Marks_2 && $Marks_2 > 70){
    echo "You gain B1 Grade.";
}elseif(70 >= $Marks_2 && $Marks_2 > 60){
    echo "You gain B2 Grade.";
}elseif(60 >= $Marks_2 && $Marks_2 > 50){
    echo "You gain C1 Grade.";
}elseif(50 >= $Marks_2 && $Marks_2 > 40){
    echo "You gain C2 Grade.";
}elseif(40 >= $Marks_2 && $Marks_2 >= 33){
    echo "You gain D Grade.";
}else{
    echo "You gain F(Fail) Grade.";
}

echo "<br>";

// Nested If Statement:
echo "<h3>4. Nested If Statement:  === >></h3>";
$Marks_3 = 95;

if ($Marks_3 >= 33){
    if (100 >= $Marks_3 && $Marks_3 > 90){
        echo "You gain A1 Grade";
    }elseif(90 >= $Marks_3 && $Marks_3 > 80){
        echo "You gain A2 Grade.";
    }elseif(80 >= $Marks_3 && $Marks_3 > 70){
        echo "You gain B1 Grade.";
    }elseif(70 >= $Marks_3 && $Marks_3 > 60){
        echo "You gain B2 Grade.";
    }elseif(60 >= $Marks_3 && $Marks_3 > 50){
        echo "You gain C1 Grade.";
    }elseif(50 >= $Marks_3 && $Marks_3 > 40){
        echo "You gain C2 Grade.";
    }elseif(40 >= $Marks_3 && $Marks_3 >= 33){
        echo "You gain D Grade.";
    }else{
        echo "You gain F(Fail) Grade.";
    }
}else{
    echo "You are Fail in exam.";
}