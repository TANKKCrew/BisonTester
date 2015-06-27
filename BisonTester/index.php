<!DOCTYPE html>

<html>
    <head>
        <title>BisonPlatform</title>
        <?php error_reporting(0); ?>
    </head>
    
    <body>
        <form action="code_checker.php" method="POST">
            <select id="serv" name="p_task">
                <option value="1">a+b</option>
                <option value="2">a*b</option>
                <option value="3">!n</option>
            </select></br>
            <textarea type="text" name="code" style="width: 300px; height: 150px;"></textarea></br>
            <input type="submit" value="Submit">
            <br>
            <?php
                if($_GET['parr'] != ""){
                    echo '<b>'.$_GET['parr'].'</b>';
                }
            ?>
            <code>
                </br>#include&lt;stdio.h&gt;</br>

                int main()</br>
                {</br>
                printf("Hello World!\n");</br>
                return 0;</br>
                }</br>
            </code>
        </form>
    </body>
</html>

