<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
     $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $mailTo = "inquiry@helloarabtourism.com";
    $headers = "From: ".$mailFrom;
    $txt = "Hello Arab Inquiry Request By ".$name. ". Contact Number is ".$phone.".\n\n".$message;
mail($mailTo, $subject, $txt,  $headers);
    Header("Location: index.php?mailsend");
    
}
?>