<h1>Loops</h1>

<h4>While loop</h4>
<?php
//while loop

$init = 0;
while($init < 10){
    print $init . "<br>";
    $init++;
}
?>

<h4>Do-While Loop</h4>
<?php
// do-while loop

$i = 11;
    do{
        print $i . "<br>";
        $i++;
    }while($i < 16)
?><h1>Loops</h1>

<h4>While loop</h4>
<?php
//while loop

$init = 0;
while($init < 10){
    print $init . "<br>";
    $init++;
}
?>

<h4>Do-While Loop</h4>
<?php
// do-while loop

$i = 11;
    do{
        print $i . "<br>";
        $i++;
    }while($i < 16)
?>
<h4>foreach</h4>
<?php
$Months =["January", "February", "March", "April",
	"May",	"June","July",
	"August",	"September",	"October",
    	"November",	"December"];

        foreach($Months AS $Month){
            print $month . ", ";

        }
        ?>
        <form action="">
    <select name="" id=""> 
        <option value="">--Months--</option>
        <?php
            foreach($months AS $month){
                echo"<option value= ''>$month</option>";
            } 
        ?>
    </select>
    <select name="" id=""> 
        <option value="">--Years--</option>
        <?php
           $y = 2015;
           while(4y < 2030){
                print"<option value = ''>$y</option>";
                $y++;
           }
        ?>
    </select>
</form>




