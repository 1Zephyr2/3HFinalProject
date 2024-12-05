<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Home - MedTherapy</title>
</head>
<body>
    <header>
        <h1>Welcome to MedTherapy</h1>
        <nav>
            <ul>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#appointments">Appointments</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="services">
            <h2>Services Offered</h2>
            <div class="services-container"> <!-- Added container for centering -->
            <div class="service">
                <img src="images/individual.png"/>
                <h3>Individual Therapy</h3>
                <p>One-on-one sessions to help you work through personal challenges and improve mental health.</p>
            </div>
            <div class="service">
                <img src="images/couple.png"/>
                <h3>Couples Therapy</h3>
                <p>Guided sessions for couples to improve communication and resolve conflicts.</p>
            </div>
            <div class="service">
                <img src="images/group.png"/>
                <h3>Group Therapy</h3>
                <p>Supportive group sessions that provide a safe space to share experiences and learn from others.</p>
            </div>
            </div>
        </section>

        <section id="about">
            <h2>About Our Services</h2>
            <p>Our therapists are trained professionals dedicated to helping you achieve your mental health goals. We offer a variety of services tailored to meet your individual needs. Whether you're seeking support for anxiety, depression, relationship issues, or personal growth, we are here to help.</p>
        </section>

        <section id="appointments">
            <h2>Book an Appointment</h2>
            <form action="submit_appointment.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="service">Select Service:</label>
                <select id="service" name="service" required>
                    <option value="individual">Individual Therapy</option>
                    <option value="couples">Couples Therapy</option>
                    <option value="group">Group Therapy</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Preferred Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Preferred Time:</label>
                <input type="time" id="time" name="time" required>
            </div>
                <button type="submit">Book Appointment</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Therapist Booking Website. All rights reserved.</p>
    </footer>
</body>
</html>