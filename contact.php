<?php
if(isset($_POST['submit'])) {
    $name     = $_POST['name'];
    $email      = $_POST['email'];
    $subject    = $_POST['subject'];
    $message    = $_POST['message'];
    $toJan      = 'jos@glu.nl';
    $from       = $name . ' ' . '<' . $email . '>';
    $headers    = "From:" . $from . "\r\n" . "CC: hugo.230204@gmail.com";
    mail($toJan, $subject, $message, $headers);
    header('location: index.php');
}
?>