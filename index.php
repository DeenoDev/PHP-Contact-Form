<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Contact From</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        
        <form class="contact-form" action="contactform.php" method="post">
        <p>SEND E-Mail</p>
            <input type="text" name="name" placeholder="Full Name">
            <input type="text" name="mail" placeholder="Your E-mail">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message" rows="10" cols="22"></textarea>
            <button type="submit" name="submit">SEND MAIL</button>
        </form>
    </main>
    
</body>
</html>