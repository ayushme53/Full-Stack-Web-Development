<?php
if(isset($_POST['submit'])){
    echo 'ID -'.$_POST['id'].'<br>';
    echo 'Username -'.$_POST['username'].'<br>';
    echo 'Age -'.$_POST['age'].'<br>';
    echo 'Contact -'.$_POST['contact'].'<br>';
    echo 'Email -'.$_POST['email'].'<br>';
}
else
{
    echo "Welcome Guest";
}
?>



<html>
<head><title>Input Data</title></head>
<body>
    <form action="input.php" method="post">
     ID - <input name="id" type ="number" placeholder="Enter ID"><br>        
     UserName - <input name="username" type = "text" placeholder="Enter Username"><br>
     Age - <input name="age" type ="number" placeholder="Enter Age"><br>
     Contact - <input name="contact" type ="number" placeholder="Enter contact "><br>        
     Email - <input name="email" type ="email" placeholder="Enter Email"><br>
             <input name="submit" type ="submit">
    </form>
</body>
</html>