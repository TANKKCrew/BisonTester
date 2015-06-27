<?php
//$output = shell_exec('pwd');
//echo $output;
$task_number = 1;
$counter = 1;
$current_in_file = file_get_contents("TestData/Task$task_number/result$counter.txt");
echo $current_in_file;
//echo "<pre>$output</pre>";
?>

<input type="radio" name="p_task" value="1">  Task a+b </br>
            <input type="radio" name="p_task" value="2"> Task a*b </br>
            <input type="radio" name="p_task" value="3"> Task !n </br>