<link rel="stylesheet" href="A.css">
<?php
    $Name=$_POST['Usn'];
    $Mail=$_POST['Email'];
    $Gen=$_POST['Gender'];
    $Add=$_POST['province'];
    $Hob=$_POST['hobby'];
?>
<h1>Info</h1>
<p>Name: <?php echo $Name?></p>
<p>Email: <?php echo $Mail?></p>
<p>Gender: <?php echo ($Gen==0)? 'Male':'Female'?></P>
<p>Address: <?php echo $Add?></p>
<p>Hobby: 
    <?php
        foreach($Hob as $value){
            echo $value . ",";
        }
    ?>
</p>

