<?php

$name = $_POST['username'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mailhearder = "From:".$name."<".$email.">\r\n";

$recipient = "rampage@ofentserampa.co.za";

mail($recipient, $subject, $message, $mailhearder)
or die("Error!");

echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Personal Portfolio of Ofentse Rampa</title>
    <link rel=\"stylesheet\" href=\"tailwind.css\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\"> 
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin> 
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap\" rel=\"stylesheet\">

</head>
<body class=\"bg-body text-white font-poppins pb-12\">
    
    <header class=\"py-6\">
        <div class=\"container flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full\">
            <div class=\"text-lg font-bold\">Ofentse Rampa</div>
    </header>

	<p class=\"text-lg text-center mt-36\">Thank you for contacting me. I'll be sure to get back to you as soon as possible!</p>
	<p class=\"back text-center font-poppins py-4\">Go back to the <a href=\"./index.html\" class=\"text-selected-text\">homepage</a></p>

</body>
</html>
";

?>