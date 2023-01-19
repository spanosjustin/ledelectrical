<? php

if (isset($_POST['sumbit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['project'];
    $message = $_POST['message'];

    $mailTo = "spanosjustin@yahoo.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an e-mail from: ".$name.".\n\n".$message;
    $phoneNum = "Phone Number: ".$phone;

    mail($mailTo, $subject, $txt, $header, $phoneNum);
    header("Location: index.php?mailsend");
}

