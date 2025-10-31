<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spider-Man</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include("header.php")?>
    <section id="home" class="hero-section">
        <div class="web-pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="hero-title">The Amazing Spider-Man</h1>
                    <p class="hero-subtitle">Your friendly neighborhood web-slinger protecting New York City</p>
                    <button class="btn btn-spider">Explore the Spider-Verse</button>
                </div>
            </div>
        </div>
    </section>

    <section id="characters" class="py-5">
        <div class="container">
            <h2 class="section-title">Spider-Heroes</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="character-card">
                        <img src="peter.jpg" alt="Peter Parker" class="character-img">
                        <h3 class="character-name"><a href="https://en.wikipedia.org/wiki/Peter_Parker_(Marvel_Cinematic_Universe)" target="_blank">Peter Parker</a></h3>
                        <p class="character-description">
                            The original Spider-Man, Peter Parker gained his powers after being bitten by a radioactive spider. 
                            With great power comes great responsibility - a lesson he learned the hard way.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="character-card">
                        <img src="miles.webp" alt="Miles Morales" class="character-img">
                        <h3 class="character-name"><a href="https://en.wikipedia.org/wiki/Miles_Morales" target="_blank">Miles Morales</a></h3>
                        <p class="character-description">
                            The Ultimate Spider-Man, Miles Morales brings his own unique abilities including invisibility 
                            and bio-electric venom blasts to protect his city and universe.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="character-card">
                        <img src="gwen.webp" alt="Spider-Gwen" class="character-img">
                        <h3 class="character-name"><a href="https://en.wikipedia.org/wiki/Spider-Gwen" target="_blank">Spider-Gwen</a></h3>
                        <p class="character-description">
                            From an alternate universe, Gwen Stacy was bitten by the radioactive spider instead of Peter Parker. 
                            She balances being a superhero with her passion for music.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="stats" class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number">60+</span>
                        <span class="stat-label">Years of Comics</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Movies</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number">1000+</span>
                        <span class="stat-label">Villains Defeated</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number">∞</span>
                        <span class="stat-label">Spider-Verses</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="section-title">Join the Web</h2>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="character-card text-center">
                        <h3 class="character-name">Stay Connected</h3>
                        <p class="character-description mb-4">
                            Get the latest updates from the Spider-Verse and join our community of web-slingers!
                        </p>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Enter your Spider-name" style="border-radius: 25px; padding: 12px 20px;">
                        </div>
                        <a href="login.html">
                        <button class="btn btn-spider">Join the Spider-Verse</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery Validation Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="script.js"></script>
</body>
</html>