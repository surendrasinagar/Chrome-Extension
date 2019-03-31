<?php
    session_start();
    $name= $_SESSION['Email'];
    $conn=mysqli_connect('localhost','root','','ids');
     if(!$conn){
         echo "Die";
         die();
     }
     //echo "working";
     //$email1=$_SESSION['Email'];
     $query="SELECT Name1, Email FROM information WHERE Email='$name'";
if ($res = mysqli_query($conn, $query)){ 
    if (mysqli_num_rows($res) > 0) { 
        
        while ($row = mysqli_fetch_array($res)) {
            //echo "<table>"; 
            //echo "<tr>"; 
            //echo "<input type="text" name="username" value=".$row['Name1']">";
            //echo "<td>".$row['Name1']."</td>"."<br>"; 
            //echo "<td>".$row['Email']."</td>"."<br>";  
            //echo "</tr>";
            $flag=1;
        } 
        echo "</table>"; 
        mysqli_free_result($res); 
    } 
    else { 
        echo "No matching records are found.";
        $flag=0; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $query. "
                                .mysqli_error($conn); 
} 
mysqli_close($conn); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <button type="button" onclick="clicked()">try</button>
    <script src="http://localhost/Module1/content.js"> </script>
</body>
</html>