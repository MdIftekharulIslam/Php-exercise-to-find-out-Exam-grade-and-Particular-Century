<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $first_text= "A";
    
    $second_text= " B C D E F ";
    
    $third_text= "G";
    echo "<br>";
    $combined_text= $first_text. $second_text. $third_text;
    echo $combined_text;
    ?>
    <p>
<?php
$third_text= "pasila station";
echo substr($third_text,8,5);
?>
    </p>

    <p>
    this is the type of number:
    <?php
    $sample_number= rand(0,100);
    if(fmod($sample_number,2)==0){
        echo"{$sample_number} is even";
    }else{
        echo"{$sample_number} is odd";
    }
    ?>
    </p>

<p>
this is the type of number:
    <?php
    $sample_number= rand(0,100);
    echo (fmod($sample_number,2)==0)?"{$sample_number} is Even":"{$sample_number} is Odd";
    ?>
</p>

<p>
<?php
    $sample_year= rand(0,2019);
    
    function getCentury($sample_year){
return ceil($sample_year/100);

    }
    ?>
<?php
    $century= getCentury($sample_year);
    echo" The year of {$sample_year} belongs to the {$century}century";
?>
</p>

<p>
<?php
    $sample_grade= rand(0,100);
    
    function getScore($sample_grade){
        if ($sample_grade<50){
            return "fail";
        }
            if ($sample_grade==50){
                return "1";
            }
       
return ceil($sample_grade-50)/10;

    }
    ?>
<?php
    $grade= getScore($sample_grade);
    echo "The grade of {$sample_grade} will be the grade of {$grade}";
?>
</p>

</body>
</html>