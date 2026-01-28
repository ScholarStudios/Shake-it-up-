<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shake It Up! | Project Website</title>

  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<header>
  <nav class="navbar">
    <div class="logo">Shake<span>ItUp!</span></div>
    <ul class="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#plan">Business Plan</a></li>
      <li><a href="#team">Team</a></li>
      <li><a href="#admission">Registration</a></li>
    </ul>
  </nav>
</header>

<!-- HERO -->
<section id="home" class="hero">
  <h1>SHAKE IT UP!</h1>
  <p>A student-led business project by <strong>The Zillionaires</strong></p>
  <div class="hero-buttons">
    <a href="#plan" class="btn">View Business Plan</a>
    <a href="#admission" class="btn-outline">Register</a>
  </div>
</section>

<!-- BUSINESS PLAN -->
<section id="plan" class="section">
  <h2>Business Plan</h2>

  <p class="center max">
    This business plan is created for the upcoming school bake sales day
    scheduled on <strong>6th March</strong>. The business will operate as a
    <strong>partnership of seven members</strong>, built on trust and shared responsibility.
  </p>

  <div class="cards">
    <div class="card">
      <h3>Nature of Business</h3>
      <p>
        Shake It Up! is both a <strong>product-based</strong> and
        <strong>service-based</strong> business. We will sell food items and
        also provide entertainment services such as sketching sessions,
        lucky draws, and board game competitions.
      </p>
    </div>

    <div class="card">
      <h3>Market Research</h3>
      <p>
        Market research showed that the most popular items among students
        are fried snacks such as macaroni, rolls, and french fries.
        Our product selection is based on this demand.
      </p>
    </div>

    <div class="card">
      <h3>Funding</h3>
      <p>
        Each of the seven partners will contribute <strong>Rs. 3,000</strong>,
        generating a total startup fund of approximately
        <strong>Rs. 21,000</strong>.
      </p>
    </div>

    <div class="card">
      <h3>Location</h3>
      <p>
        The stall will be set up within school premises, near the canteen,
        to ensure access to electricity and necessary equipment
        (with prior permission).
      </p>
    </div>

    <div class="card">
      <h3>Brand Name</h3>
      <p>
        Based on our research and theme, the business has been named
        <strong>“Shake It Up!”</strong> to reflect energy, fun, and creativity.
      </p>
    </div>

    <div class="card">
      <h3>Marketing Strategy</h3>
      <p>
        Marketing will include posters in classrooms, customized clothing
        with the brand logo, announcements via speakers, and customer
        feedback to improve visibility and trust.
      </p>
    </div>
  </div>
</section>

<!-- TEAM -->
<section id="team" class="section light-bg">
  <h2>Our Team – The Zillionaires</h2>

  <div class="cards">
    <div class="card"><strong>Fawwaz</strong><br>Manager</div>
    <div class="card"><strong>Mujtaba</strong><br>Decorator</div>
    <div class="card"><strong>Furqan</strong><br>Salesman</div>
    <div class="card"><strong>Abdur Rahman</strong><br>Cashier</div>
    <div class="card"><strong>Maaz</strong><br>Stall Keeper</div>
    <div class="card"><strong>Ahmed Ghazi</strong><br>Chef</div>
    <div class="card"><strong>Usman</strong><br>Games Keeper</div>
  </div>
</section>

<!-- REGISTRATION FORM -->
<section id="admission" class="section">
  <h2>Registration Form</h2>

  <form action="send.php" method="POST" class="contact-form">

    <h3>Participant Information</h3>
    <input type="text" name="student_name" placeholder="Full Name" required>
    <input type="text" name="class" placeholder="Class" required>

    <h3>Contact Details</h3>
    <input type="text" name="father_name" placeholder="Guardian Name" required>
    <input type="text" name="father_phone" placeholder="Contact Number" required>

    <textarea name="address" placeholder="Address" required></textarea>

    <button type="submit" class="btn">Submit</button>
  </form>
</section>

<!-- FOOTER -->
<footer>
  <p>© 2026 Shake It Up! | Project by The Zillionaires</p>
</footer>

</body>
</html>