<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Northern Samar Colleges</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root { --primary-blue: #0f204b; --accent-blue: #2a5bd7; --accent-gold: #fbbf24; --bg-light: #f8faff; --text-dark: #1e293b; }
        body { font-family: 'Poppins', sans-serif; background-color: var(--bg-light); color: var(--text-dark); overflow-x: hidden; }
        
        .navbar { background: rgba(15, 32, 75, 0.95); padding: 15px 0; box-shadow: 0 4px 15px rgba(0,0,0,0.2); }
        .navbar-brand img { height: 70px; width: 70px; border-radius: 50%; border: 2px solid rgba(255,255,255,0.2); margin-right: 15px; object-fit: cover; }
        .brand-text { font-size: 1.6rem; font-weight: 700; color: white; line-height: 1; white-space: nowrap; text-transform: uppercase; letter-spacing: 0.5px; }
        .nav-link { color: rgba(255,255,255,0.8) !important; font-weight: 500; font-size: 1rem; margin-left: 25px; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { color: var(--accent-gold) !important; font-weight: 700; }

        .page-hero { background: linear-gradient(135deg, #030b18 0%, #0f204b 100%); padding: 100px 0 80px 0; text-align: center; color: white; position: relative; overflow: hidden; }
        .hero-circle { position: absolute; border-radius: 50%; background: rgba(255,255,255,0.03); z-index: 0; }
        .c1 { width: 300px; height: 300px; top: -50px; left: -50px; }
        .c2 { width: 500px; height: 500px; bottom: -100px; right: -100px; }
        .hero-title { font-weight: 800; font-size: 3.5rem; text-transform: uppercase; letter-spacing: 2px; position: relative; z-index: 1; }
        .hero-subtitle { color: var(--accent-gold); font-size: 1.2rem; font-weight: 500; letter-spacing: 1px; text-transform: uppercase; margin-top: 10px; position: relative; z-index: 1; }

        .intro-section { padding: 80px 0; position: relative; }
        .intro-box { background: white; border-radius: 20px; padding: 50px; box-shadow: 0 15px 40px rgba(0,0,0,0.05); text-align: center; position: relative; margin-top: -60px; z-index: 10; }
        .intro-logo { width: 120px; height: 120px; border-radius: 50%; object-fit: contain; background: white; padding: 5px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 30px; }
        .intro-text { font-size: 1.15rem; line-height: 1.9; color: #555; font-weight: 300; }
        .intro-highlight { font-weight: 600; color: var(--primary-blue); }

        .vision-section { background-color: var(--primary-blue); color: white; padding: 80px 0; position: relative; text-align: center; border-radius: 30px; margin: 40px 0; overflow: hidden; }
        .vision-section::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px; opacity: 0.5; }
        .vision-title { font-size: 1.5rem; text-transform: uppercase; letter-spacing: 3px; color: var(--accent-gold); margin-bottom: 20px; position: relative; z-index: 2; }
        .vision-quote { font-size: 1.8rem; font-weight: 700; font-style: italic; line-height: 1.5; max-width: 900px; margin: 0 auto; position: relative; z-index: 2; }
        .vision-quote i { color: rgba(251, 191, 36, 0.3); font-size: 3rem; vertical-align: top; margin: 0 10px; }

        .section-heading { font-size: 2.2rem; font-weight: 800; color: var(--primary-blue); margin-bottom: 40px; text-align: center; text-transform: uppercase; }
        .section-heading span { border-bottom: 5px solid var(--accent-gold); }
        
        .mission-list { counter-reset: mission-counter; padding: 0; }
        .mission-item { list-style: none; background: white; padding: 25px 30px 25px 70px; border-radius: 10px; margin-bottom: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.03); position: relative; transition: transform 0.3s; font-size: 1rem; color: #444; line-height: 1.6; }
        .mission-item:hover { transform: translateX(10px); border-left: 5px solid var(--accent-gold); }
        .mission-item::before { counter-increment: mission-counter; content: counter(mission-counter); position: absolute; left: 20px; top: 50%; transform: translateY(-50%); background: var(--primary-blue); color: white; width: 35px; height: 35px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 0.9rem; }

        .obj-card { background: white; padding: 30px; border-radius: 15px; height: 100%; border-top: 5px solid var(--accent-blue); box-shadow: 0 10px 20px rgba(0,0,0,0.05); transition: 0.3s; }
        .obj-card:hover { transform: translateY(-5px); box-shadow: 0 15px 30px rgba(0,0,0,0.1); }
        .obj-icon { font-size: 2.5rem; color: var(--accent-blue); margin-bottom: 20px; opacity: 0.2; }

        footer { background-color: #030511; color: white; padding-top: 70px; margin-top: 80px; }
        .footer-logo { height: 90px; width: 90px; border-radius: 50%; object-fit: cover; border: 2px solid transparent; }
        .footer-logo-text { font-family: 'Impact', sans-serif; font-size: 2rem; line-height: 1; text-transform: uppercase; margin-left: 15px; }
        .copyright-bar { background-color: #1a1f36; padding: 20px 0; margin-top: 50px; text-align: center; font-size: 0.9rem; color: #aaa; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo.png" alt="NSC Logo" onerror="this.src='https://via.placeholder.com/70?text=LOGO'"> 
                <span class="brand-text">Northern Samar Colleges</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="about.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="service.php">Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-hero">
        <div class="hero-circle c1"></div><div class="hero-circle c2"></div>
        <div class="container">
            <h1 class="hero-title">About Us</h1>
            <p class="hero-subtitle">Getting to know the Office of the Registrar</p>
        </div>
    </div>

    <div class="container">
        <div class="intro-section">
            <div class="intro-box">
                <img src="assets/img/logo.png" alt="NSC Logo" class="intro-logo" onerror="this.src='https://via.placeholder.com/120?text=LOGO'">
                <h2 class="mb-4 text-uppercase fw-bold" style="color: var(--primary-blue);">Office of the Registrar</h2>
                <p class="intro-text">
                    <span class="intro-highlight">One with the University in its commitment to the quest for Truth,</span> the Office of the Registrar is responsible for maintaining the integrity of the academic records of students under its custody, making them available upon request, subject to existing rules and regulations.
                </p>
            </div>
        </div>

        <div class="vision-section">
            <div class="vision-title">Our Vision</div>
            <div class="container">
                <p class="vision-quote">
                    <i class="fas fa-quote-left"></i>
                    Northern Samar Colleges as a premier school for community leaders, successful professionals, and workers with world-class technical skills and competencies.
                    <i class="fas fa-quote-right"></i>
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12"><h2 class="section-heading"><span>Our Mission</span></h2></div>
            <div class="col-lg-10 mx-auto">
                <ul class="mission-list">
                    <li class="mission-item">Strive to reach a level of excellence in its research and teaching programs that will earn for itself a place among the most prestigious educational institutions in the area.</li>
                    <li class="mission-item">Adopt advance research and teaching techniques so as to become source of innovative forms of learning, as well as contribute to a better balance between the cost and quality of research, communication, and education.</li>
                    <li class="mission-item">Adopt its teaching programs, founded upon basic research and the study of humanities, to the actual needs of a society undergoing progressive change and of wide region promoting international cooperation.</li>
                    <li class="mission-item">Seek, while working closely with other Philippine institutions, wider regional and international recognition so that it can be present in intellectual policy dialogues.</li>
                    <li class="mission-item">Strengthen and broaden the avenues for cooperation so that it can effectively contribute to social development and obtain from various sectors of the society necessary support to carry out its extension work.</li>
                    <li class="mission-item">Organize itself in a manner conducive to internal efficiency and effective coordination, while keeping enough flexibility, to enable all members of the school community to contribute freely and responsibly to the fulfilment of their common tasks.</li>
                    <li class="mission-item">Strive to attain, as a necessary condition for its autonomous development, a level of economic self-sufficiency that will allow the school to firmly establish itself as a center of academic excellence to initiate projects, and to admit well-qualified students from the underprivileged sector of society.</li>
                </ul>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-12"><h2 class="section-heading"><span>Our Objectives</span></h2><p class="text-center text-muted mb-5 w-75 mx-auto">Committed to building character and enhancing technical competence.</p></div>
            <div class="col-md-4 mb-4"><div class="obj-card"><i class="fas fa-heart obj-icon"></i><h5 class="fw-bold text-primary mb-3">Universal Values</h5><p class="text-muted">To provide quality education with strong adherence to time-honored universal values.</p></div></div>
            <div class="col-md-4 mb-4"><div class="obj-card"><i class="fas fa-chalkboard-user obj-icon"></i><h5 class="fw-bold text-primary mb-3">Dynamic Teaching</h5><p class="text-muted">To enhance learning through school facilities and dynamic teaching staff.</p></div></div>
            <div class="col-md-4 mb-4"><div class="obj-card"><i class="fas fa-hands-holding-circle obj-icon"></i><h5 class="fw-bold text-primary mb-3">Character Formation</h5><p class="text-muted">To strive to build the institution as a place for character formation with a high level of participation and unity.</p></div></div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-4"><div class="d-flex align-items-center mb-3"><img src="assets/img/logo.png" alt="NSC Logo" class="footer-logo" onerror="this.src='https://via.placeholder.com/90?text=LOGO'"><div class="footer-logo-text"><div>Northern</div><div>Samar Colleges</div></div></div><p class="small text-secondary" style="max-width: 90%;">Excellence in education since 1948. Shaping the future of Northern Samar, one student at a time.</p></div>
                <div class="col-lg-3 mb-4"><h5 class="text-primary fw-bold mb-3">Contact Us</h5><p class="small text-secondary"><strong>Basic Education Department</strong><br>Annunciation Street<br>Catarman Northern Samar<br><br><strong>College Department</strong><br>Brgy. Dalakit,<br>Catarman Northern Samar</p></div>
                <div class="col-lg-4"><h5 class="text-primary fw-bold mb-3">About NSC</h5><p class="small text-secondary" style="text-align: justify;">Northern Samar Colleges, formerly Northern Samar Academy, located along Annunciacion corner Roxas Streets, Brgy. J. P. Rizal, Catarman, Northern Samar, was established in 1949 and incorporated in 1950 in response to the clamor for a school that could meet the needs of a particular segment of the town populace. At that time, there were only two schools in town; one was a private Roman Catholic high school; another, a public agricultural school about three kilometers away from the town proper across the river. There was no bridge then connecting the town to the road going that way and it was accessible only by banca. Public buses were scarce and tricycles and pedicabs were non-existent by then. A student from town had to hike the distance after crossing the river.</p></div>
            </div>
        </div>
        <div class="copyright-bar">&copy; 2025 Northern Samar Colleges. All Rights Reserved.</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>