<?php
/**
 *
 * Created by PhpStorm.
 * User: zawad
 * Date: 21/02/2018
 * Time: 12:22
 */

error_reporting(0);

# create random numer
$random_number = random_int(0, 100);

# create sql command
$sql = "SELECT * FROM artikelen WHERE Prijs =$random_number";

# execute sql command
$result = mysqli_query($sql);

# if result is not true
if (!$result) {
    $date = date("d-m-Y");
    $time = date("h:i:sa");
    # save log in log.txt
    error_log("[$date][$time]==> Databasequery $sql kan niet worden uitgevoerd. <== \n", 3, "log.txt");
}
?>
<a href="log.txt">Log.txt</a>
