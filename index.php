<?php


$message_sent = false;

if(isset($_POST['email']) && $_POST['email'] != ''){

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

        $username = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        $submit = $_POST['submit'];
        
        
        $to = "mauricejahwizwid@gmail.com";
        
        $body = "";
        
        $body .= "From ".$username. "\r\n";
        $body .= "Email ".$email. "\r\n";
        $body .= "Message ".$comment. "\r\n";
        
        mail($to,$comment, $body);

        $message_sent = true;
    } else{
        $message_sent = false;
        echo "not sent";
    }
    

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
</head>
<body>
    <?php

      if($message_sent):
?>
  <h3>Thanks, we'll be in touch</h3>
<?php
  
      else:

?>
    <form action="" method="post">
        <h1>Post comments</h1>
        <label for="name">name</label>
        <input type="text" name="name" id="name">
        <br>
        <br>

        <label for="email">email</label>
        <input type="text" name="email" id="email">
        <br>
        <br>


        <label for="email">Comment</label>
        <textarea name="comment"></textarea>
        <br>
        <br>

        <button type="submit" name="submit">Submit</button>

    </form>

    <?php
     endif;
    ?>
</body>
</html>