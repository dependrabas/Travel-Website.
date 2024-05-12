<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Travelwithdependra</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<div class="header-div">
    <header class="header">
        <a href="index.php">Dependra Tour and Travel</a>
        <a href="index.php"><img src="img/logo.jpg"></a>
        <hr style="width:80%">
    </header>
    <center>
        <nav class="menu">

            <a href="index.php">HOME</a>
            <a href="about.php">ABOUT US</a>
            <a href="destinations.php">DESTINATIONS</a>
            <a href="traveltips.php">PARTNERS</a>
            <a href="contact.php">CONTACT</a>
        </nav>
    </center>

</div>


<body>
    <div class="form-container">

        <h2>Interested in working with us?</h2>
        <p>I'd love to hear from our readers – so no matter what you want to chat to us about; whether it be some travel advice, some feedback on the site or simply some random banter feel free to contact us using the form below.</p>
        <hr>
        <div class="form">

            <form method="post" action="process.php">

                <label for="Name">Name</label><br>
                <input type="text" name="name" required><br>
                <label for="Email">Email</label><br>
                <input type="email" name="email" placeholder="Enter your email" required><br>
                <label for="Subject">Subject</label><br>
                <input type="text" name="subject"><br>
                <label for="Message">Message</label><br>
                <textarea placeholder="Message" name="message" rows="10" cols="30" style="margin: 0px; width: 503px; height: 179px; background-color: lightgrey;font-size: 16px;border-radius: 10px;" required>   </textarea>
                <button type="submit" name="submit">Submit</button>



            </form>
        </div><br>
        <hr>
        <img src="img/c.jpg" style="height: 548px;width: 1000px;padding: -1px 10px 10px 10px">
    </div>



    <footer class="footer">
        Copyright &copy; 2020 - <?php echo date("Y"); ?>. Dependra Tour and Travel
    </footer>



</body>

</html>