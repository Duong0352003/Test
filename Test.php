<!-- <html>
    <body>
        <form method="post" action="Test.php">
            <input type="text" name="answer">
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $answer=$_POST['answer'];
        if(is_numeric($answer)){
            $Tb=0;
            for($i=1;$i<=$answer;$i++){
                $Tb+=$i;
            }
            echo $Tb/$answer;
        }
        else{
            echo 'Wrong format';
        }
    }
?> -->

<!-- <html>
    <body>
        <form method="post" action="Test.php">
            <input type="number" name="a" placeholder="From">
            <input type="number" name="b" placeholder="To">
            <input type="submit" name="go" value="Go">
        </form>
    </body>
</html>
<?php
    ini_set('display_errors',1); //Check for errors
    if(isset($_POST['go']))
    {
        $from=$_POST['a'];
        $to=$_POST['b'];
        $T=0;
        for($from;$from<=$to;$from++){
            if($from%10==0){
                $T+=$from; 
            }
        }
        echo $T;
    }
?> -->
