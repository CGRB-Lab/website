<?php
$name = $_POST['name'];
$email = $_POST['email'];
$education = $_POST['qualification'];
$query = $_POST['query'];
$email_from = ':C/website/test.html';
$email_subject = 'Query from the laboratory website';
$email_body = "The following query was posted in the website:.\n".
                "Name: $name.\n".
                "Email: $email.\n".
                "Education Qualification: $qualification.\n".
                "Query: $query.\n";
$to = 'bo20mtech14003@iith.ac.in';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: test.html")
?>