<?php
//error_reporting(0);
//include 'dbconnection.php';
$test_s = 0;
$test_f= 0;
$min = 1;
$max = 999;
$task_number = $_POST['p_task'];
//echo "Task numer $task_number";
//echo "$task_number";
if (!$_POST['code']) {
    header("Location: http://localhost/BisonTester/");
}
else{
    $code = $_POST['code'];
    $ran = rand($min, $max);
    $file = "main$ran.c";
    $file_exec = "ex$ran";
    $file_f = fopen($file, "w"); 
    $current = $code;
    file_put_contents($file, $current);
//$current_in_file = file_get_contents($file);
    $output = exec("gcc $file -o $file_exec -w 2>&1");
    fclose($file_f);
    unlink($file);
    if($output == NULL)
    {
        $test_s = 0;
        for($counter = 1; $counter <= 3; $counter++)
        {
            $output = exec("./$file_exec < TestData/Task$task_number/test$counter.txt");
            $current_in_file = file_get_contents("TestData/Task$task_number/result$counter.txt");
            $output= $output . " ";
            if(!(strcmp($output, $current_in_file) == -1))
            {
                $test_s++;
            }
            else
            {
                $test_f++;
            }
            var_dump($output);
            var_dump($current_in_file);
            echo strcmp($output, $current_in_file);
        }
    
    //var_dump($output);
        
        //echo $test_s;
        //if($test_s > 0)header("Location: http://localhost/BisonTester/index.php?parr=Success $task_number!!!");else
        header("Location: http://localhost/BisonTester/index.php?parr=SUCCESS: $test_s FAIL: $test_f");
    
    
    //End task chacking
   // header("Location: http://localhost/BisonTester/index.php?parr=$output");
    unlink($file_exec);
}
 else
 {
     header("Location: http://localhost/BisonTester/index.php?parr=Error while compiling");
 }
}


?>