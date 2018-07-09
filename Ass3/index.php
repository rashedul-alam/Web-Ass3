<!DOCTYPE html>
<html>
    <head>
        <title>File Read</title>
    </head>
    <body>
        <form>
        <h>Enter the file name  :</h><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"><input type="text" name="fileid"><input type="submit" name="submit" value="SUBMIT">
        </form>
        <?php

        if(!empty($_POST['Filename']))

        {

            echo "File Info:";

            $myfile = fopen($_POST['fileid'].".txt", "a") or die("Unable to open file!");

            echo fread($myfile,filesize($_POST['fileid'].".txt"));

            fclose($myfile);

        }

        ?> 

    </body>

</html>
