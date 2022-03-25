<?php 
if(isset($_POST['email']) && !empty($_POST['email'])) {
    $to = "successbear@mail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "FROM MY SITE";
    $subject2 = "Copy of your message for him";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "success";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>