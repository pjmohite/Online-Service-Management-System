<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
     <link rel="stylesheet" type="text/css" href="css/feedback.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/all.min.css">
     <link rel="stylesheet" href="css/custom.css">
     <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">


</head>

<body>
 <div class="main">
    <div class="feedback">
        <h1 class="h1-tag">Your Feedback Is important For Us</h1>
         <form id="feedback" method="post">
            <input type="text" class="form-control" name="name" id="exampleInputText" placeholder="Enter Your Name">
                <br><br>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <br><br>       
                <input type="text" class="form-control" id="exampleInputText" name="contact" placeholder="Enter contact (optional)">
               <br><br>
               <textarea class="form-control" id="exampleFormControlTextarea1" name="feedback" rows="3" placeholder="Enter your feedback "></textarea>
                <br><br>
            
             <div class="button" >
            <input type="submit" value="submit" value="submit" id="submit">
            </div>

         <a href="#" class="close">

        </form>
    </div>
</div>

</body>

</html>

<?php 

include 'dbConnection.php';

if ($_SERVER['REQUEST_METHOD']=="POST") 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $feedback = $_POST['feedback'];

    $insertquery3 = "insert into feedback(name,email,contact,feedback) values('$name','$email','$contact','$feedback')";
    $result3 = mysqli_query($conn,$insertquery3);

    if ($result3) 
    {
       ?>
        <script>
            alert("data inserted properly");
       </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("data not inserted");
        </script>
        <?php
    }
}    
mysqli_close($conn);

?>