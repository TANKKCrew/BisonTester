<!DOCTYPE html>

<html>
    <?php error_reporting(0); ?>
	<head>
		<title>Bison Tester</title>
		<meta charset="UTF-8"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	
	<body style="margin-top: 55px;    
	margin-left: auto;
    margin-right: auto;
    
    background-color: #FFFFFF">
            
             <meta charset="utf-8"/>
        <link rel=stylesheet href="CodeMirror/doc/docs.css">
        <link rel="stylesheet" href="CodeMirror/lib/codemirror.css">
        <script src="CodeMirror/lib/codemirror.js"></script>
        <script src="CodeMirror/addon/edit/matchbrackets.js"></script>
        <link rel="stylesheet" href="CodeMirror/addon/hint/show-hint.css">
        <script src="CodeMirror/addon/hint/show-hint.js"></script>
        <script src="CodeMirror/mode/clike/clike.js"></script>
        <style>.CodeMirror {border: 2px inset #dee;}</style>
	
		<nav class="navbar navbar-inverse navbar-fixed-top" >
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<a class="navbar-brand" class="active" href="index.php">Bison Tester</a>
				</div>
			
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav" >
                                    <li><a href="about_us.php">About us<span class="sr-only">(current)</span></a></li>
                                    <li><a href="future.php">Future</a></li>		
				</ul>
				</div>
			</div>
		</nav>

        <form action="code_checker.php" method="POST" style="size: 10%">
            <select id="serv" name="p_task" style="size: 10%">
                <option value="1">a+b</option>
                <option value="2">a*b</option>
                <option value="3">n!</option>
            </select></br>
            <div><textarea id="c-code" name="code">
#include <stdio.h>

int main() 
{
    printf("Hello world");
    return 0;
}
            </textarea></div></br>

                <script>
                    var cEditor = CodeMirror.fromTextArea(document.getElementById("c-code"), {
                    lineNumbers: true,
                    matchBrackets: true,
                    mode: "text/x-csrc"
                    });
                    var mac = CodeMirror.keyMap.default == CodeMirror.keyMap.macDefault;
                     CodeMirror.keyMap.default[(mac ? "Cmd" : "Ctrl") + "-Space"] = "autocomplete";
                    </script>
                <input type="submit" value="Submit"></br>
            </form>
            <?php
            if($_GET['parr'] != 1)
            {
                if($_GET['success'] != "" && $_GET['fail'] != ""){
                    echo '<br> Passed tests: '.$_GET['success'].'</br>';
                    echo '<br> Failed tests: '.$_GET['fail'].'</br>';
                }
            }
            else
            {
                echo '<br>Error While Compiling</br>';
            }
            ?>
        
	</body>
</html>