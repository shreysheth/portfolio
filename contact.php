<?php
    $to = 'contact@shreysheth.com';
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = 'KNOCK KNOCK!! You\'ve got an inquiry from '.$name.'.';
    $rec_subject = 'Copy of your form submission.';
    $message = 'Name: '.$name.'\nSubject: '.$_POST['subject'].'\nMessage: '.$_POST['message'];
    $rec_message = 'Dear '.$name.','.'\n\nThank you for contacting shreysheth.com. Here is a copy of your form submission for reference.\nName: '.$name.'\nSubject: '.$_POST['subject'].'\nMessage: '.$_POST['message'].'\n\nI will be in touch with you ASAP.';
    $header = 'From: '.$from;
    $rec_header = 'From: '.$to;
    mail($to, $subject, $message, $header);
    mail($from, $rec_subject, $rec_message, $rec_header);
    header('Location: submit.html');
        //redirect to the 'thank you' page
?>
