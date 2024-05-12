<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Travelwithdependra</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        .partners-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .partner {
            width: calc(50% - 20px);
            border: 1px solid #ccc;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
        }
        .partner img {
    max-width: 100%;
    height: 200px; 
    display: block;
}
p{
    color: black;
}
        .partner img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .partner .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 10px;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .partner:hover .overlay {
            opacity: 1;
        }

        .partner h3 {
            margin-top: 0;
            margin-bottom: 5px;
        }

        .partner p {
            margin: 0;
            font-size: 14px;
        }
        .partners-section {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.partner {
    width: 250px;
    text-align: center;
    margin-bottom: 20px;
}

.partner-img {
    width: 200px; /* Fixed size */
    height: 200px; /* Fixed size */
    display: block;
    margin: 0 auto; /* Center horizontally */
}

.overlay {
    position: relative;
}

.overlay h3,
.overlay p {
    margin: 0;
    padding: 10px;
}

.overlay h3 {
    color: #fff;
    background-color: #333;
}

.overlay p {
    background-color: #f1f1f1;
}
.partners-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; /* Distribute items evenly with the first item at the start and the last item at the end */
}

.partner {
    width: calc(50% - 10px); /* Adjust width to accommodate two partners with some spacing */
    margin-bottom: 20px;
    text-align: center;
}

.partner-img {
    width: 200px; /* Fixed size */
    height: 200px; /* Fixed size */
    display: block;
    margin: 0 auto; /* Center horizontally */
}

.overlay {
    position: relative;
}

.overlay h3,
.overlay p {
    margin: 0;
    padding: 10px;
}

.overlay h3 {
    color: #fff;
    background-color: #333;
}

.overlay p {
    background-color: #f1f1f1;
}
.partners-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.partner {
    width: calc(50% - 10px);
    margin-bottom: 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center; /* Center items horizontally */
}

.partner-img {
    width: 200px;
    height: 200px;
    display: block;
}

.overlay {
    position: relative;
}

.overlay h3,
.overlay p {
    margin: 0;
    padding: 10px;
}

.overlay h3 {
    color: #fff;
    background-color: #333;
}

.overlay p {
    background-color: #f1f1f1;
}

.partner {
    width: calc(50% - 20px);
    border: 1px solid #ccc;
    margin-bottom: 20px;
    position: relative;
    overflow: hidden;
    height: 300px; /* Set a fixed height for all partner boxes */
}

.partner img {
    max-width: 100%;
    height: 100%; /* Make the image fill the entire height of the partner box */
    display: block;
}

.partner .overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    color: #fff;
    padding: 10px;
    opacity: 0;
    transition: all 0.3s ease;
}

.partner:hover .overlay {
    opacity: 1;
}

.partner h3 {
    margin-top: 0;
    margin-bottom: 5px;
}

.partner p {
    margin: 0;
    font-size: 14px;
}

    </style>
</head>

<body>
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

    <section class="partners-section">
        <div class="partner">
            <img src="img/bhutan123.jpg" alt="Global Travel Co.">
            <div class="overlay">
                <h3>Amen Bhutan Tours</h3>
                <p>Based in the Bhutan, Amen Bhutan Tours offers a wide range of travel packages catering to various preferences and budgets. With their extensive network and expertise, they ensure unforgettable travel experiences for their clients.</p>
            </div>
        </div>

        <div class="partner">
            <img src="img/euro.png" alt="EuroTrip Adventures">
            <div class="overlay">
                <h3>EuroTrip Adventures</h3>
                <p>Operating from Europe, EuroTrip Adventures specializes in crafting personalized travel itineraries across the picturesque landscapes and vibrant cities of Europe. Whether it's a romantic getaway or a family vacation, they excel in creating memorable journeys.</p>
            </div>
        </div>
        <div class="partner">
            <img src="img/Expedia.png" alt="EuroTrip Adventures">
            <div class="overlay">
                <h3>Expedia Group</h3>
                <p>Expedia Group is a leading global travel technology company that operates several online travel brands, including Expedia.com, Hotels.com, Orbitz, Travelocity, and Vrbo. It provides a wide range of travel products and services, including booking flights, hotels, vacation rentals, car rentals, cruises, and activities.</p>
            </div>
        </div>
        <div class="partner">
            <img src="img/Booking_Holdings.svg" alt="EuroTrip Adventures">
            <div class="overlay">
                <h3>Booking Holdings</h3>
                <p>Booking Holdings is a multinational company that owns and operates several popular online travel agencies and travel fare aggregators. Some of its well-known brands include Booking.com, Priceline.com, Agoda, Kayak, and Rentalcars.com. Booking Holdings offers a comprehensive range of travel services, including accommodations, flights, rental cars, and vacation packages.</p>
            </div>
        </div>
        <div class="partner">
            <img src="img/TripAdvisor.png" alt="EuroTrip Adventures">
            <div class="overlay">
                <h3>Tripadvisor</h3>
                <p>Tripadvisor is a popular travel platform that offers a wide range of travel-related content, including user-generated reviews and opinions of accommodations, restaurants, attractions, and travel experiences. In addition to reviews, Tripadvisor also provides booking options for hotels, vacation rentals, flights, and restaurants through its website and mobile app</p>
            </div>
        </div>
        <div class="partner">
            <img src="img/trip.com.jpg" alt="EuroTrip Adventures">
            <div class="overlay">
                <h3>Trip.com Group</h3>
                <p>Trip.com Group is one of the largest online travel agencies in the world, based in China. It offers a comprehensive range of travel services, including flight bookings, hotel reservations, train tickets, car rentals, and vacation packages. Trip.com Group operates several brands, including Trip.com, Ctrip, Skyscanner, and Qunar.</p>
            </div>
        </div>
        <div class="partner">
            <img src="img/american.webp" alt="EuroTrip Adventures">
            <div class="overlay">
                <h3>American Express Travel</h3>
                <p>American Express Travel is the travel agency division of American Express, offering travel booking services and exclusive travel offers for American Express cardholders. It provides access to a wide range of travel products and services, including flights, hotels, car rentals, cruises, vacation packages, and travel insurance.</p>
            </div>
        </div>

        <div class="partner">
            <img src="img/Thomas.png" alt="EuroTrip Adventures">
            <div class="overlay">
                <h3>Thomas Cook Group</h3>
                <p>Thomas Cook Group was a British global travel group that offered package holidays, flights, hotels, and other travel-related services. It operated several travel brands, including Thomas Cook, Neckermann, Condor Airlines, and Thomas Cook Airlines. Unfortunately, the company ceased operations in 2019.</p>
            </div>
        </div>

       

        

       

        

    </section>

    <footer class="footer">
        Copyright &copy; 2020 - <?php echo date("Y"); ?>. Dependra Tour and Travel
    </footer>

</body>

</html>
