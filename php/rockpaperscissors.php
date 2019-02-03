<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form  method="post">
<select name="value">
    <option value="rock">Rock</option>
    <option value="paper">Paper</option>
    <option value="scissors">Scissors</option>
</select>
<input type="submit" value="Submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $userchoice = $_POST['value'];
    $computerchoice = rand(1,100);
    if ($computerchoice < 34 ){
        $computerchoice = "rock";
    }
        elseif($computerchoice < 67){
            $computerchoice = "scissors";
        }
            else{
            $computerchoice = "paper";
            }


echo "Computer = $computerchoice";
        echo "<br>";
    function compare ($choice1, $choice2){

        if($choice1 == $choice2){
           return "The result is a tie";
        }
        elseif ($choice1 == "rock"){
            if($choice2 == "scissors"){
                return "rock wins";
        }
            else{
                return"paper wins";
            }
        }
        elseif($choice1 == "paper"){
            if($choice2 == "scissors"){
                return "scissors wins";
        }
            else{
                return "paper wins";
            }
        }
        elseif($choice1 == "scissors"){
            if($choice2 == "paper"){
                return "scissors wins";
            }
            else{
                return "rock wins";
            }
        }
        else{
            return "Haha";
        }
     }

$t = compare($userchoice, $computerchoice);
    echo  $t;
}


//error_reporting(0);
?>
</body>
</html>



