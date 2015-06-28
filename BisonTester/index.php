<!DOCTYPE html>

<html>
    <head>
        <title>BisonPlatform</title>
        <?php error_reporting(0); ?>
    </head>
    
    <body>
        <meta charset="utf-8"/>
        <link rel=stylesheet href="CodeMirror/doc/docs.css">
        <link rel="stylesheet" href="CodeMirror/lib/codemirror.css">
        <script src="CodeMirror/lib/codemirror.js"></script>
        <script src="CodeMirror/addon/edit/matchbrackets.js"></script>
        <link rel="stylesheet" href="CodeMirror/addon/hint/show-hint.css">
        <script src="CodeMirror/addon/hint/show-hint.js"></script>
        <script src="CodeMirror/mode/clike/clike.js"></script>
        <style>.CodeMirror {border: 2px inset #dee;}</style>

        <form action="code_checker.php" method="POST">
            <select id="serv" name="p_task">
                <option value="1">a+b</option>
                <option value="2">a*b</option>
                <option value="3">!n</option>
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
                if($_GET['parr'] != ""){
                    echo '<b>'.$_GET['parr'].'</b>';
                }
            ?>
    </body>
</html>

