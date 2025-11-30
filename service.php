<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Northern Samar Colleges</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root { --primary-blue: #0f204b; --accent-blue: #2a5bd7; --accent-gold: #fbbf24; --success-green: #10b981; --bg-light: #f8faff; --text-dark: #1e293b; }
        body { font-family: 'Poppins', sans-serif; background-color: var(--bg-light); color: var(--text-dark); overflow-x: hidden; }
        
        .navbar { background: rgba(15, 32, 75, 0.95); padding: 15px 0; box-shadow: 0 4px 15px rgba(0,0,0,0.2); }
        .navbar-brand img { height: 70px; width: 70px; border-radius: 50%; object-fit: cover; border: 2px solid rgba(255,255,255,0.2); margin-right: 15px; }
        .brand-text { font-size: 1.6rem; font-weight: 700; color: white; line-height: 1; white-space: nowrap; text-transform: uppercase; letter-spacing: 0.5px; }
        .nav-link { color: rgba(255,255,255,0.8) !important; font-weight: 500; font-size: 1rem; margin-left: 25px; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { color: var(--accent-gold) !important; font-weight: 700; }

        .page-hero { background: linear-gradient(135deg, #030b18 0%, #0f204b 100%); padding: 100px 0 80px 0; text-align: center; color: white; position: relative; margin-bottom: -50px; padding-bottom: 120px; }
        .hero-title { font-weight: 800; font-size: 3.5rem; text-transform: uppercase; letter-spacing: 2px; }
        .hero-subtitle { color: var(--accent-gold); font-size: 1.2rem; font-weight: 500; letter-spacing: 1px; margin-top: 10px; max-width: 700px; margin-left: auto; margin-right: auto; }

        .services-wrapper { position: relative; z-index: 10; padding-bottom: 80px; }
        .service-container-card { background: white; border-radius: 20px; padding: 50px; box-shadow: 0 15px 40px rgba(0,0,0,0.05); margin-bottom: 40px; border-left: 6px solid var(--accent-gold); transition: transform 0.3s ease; }
        .service-container-card:hover { transform: translateY(-5px); box-shadow: 0 20px 50px rgba(0,0,0,0.1); }
        .service-header { display: flex; align-items: center; margin-bottom: 30px; border-bottom: 1px solid #eee; padding-bottom: 20px; }
        .service-icon-box { width: 80px; height: 80px; background: rgba(42, 91, 215, 0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 25px; color: var(--primary-blue); font-size: 2.5rem; }
        .service-title { font-size: 2rem; font-weight: 700; color: var(--primary-blue); margin: 0; }
        
        .aesthetic-list { list-style: none; padding: 0; margin: 0; }
        .aesthetic-list li { position: relative; padding-left: 35px; margin-bottom: 15px; font-size: 1.05rem; color: #555; font-weight: 500; }
        .aesthetic-list li::before { content: '\f058'; font-family: 'Font Awesome 6 Free'; font-weight: 900; position: absolute; left: 0; top: 3px; color: var(--success-green); font-size: 1.2rem; }
        .issuance-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 10px 40px; }
        @media (max-width: 768px) { .issuance-grid { grid-template-columns: 1fr; } .service-header { flex-direction: column; text-align: center; } .service-icon-box { margin-right: 0; margin-bottom: 15px; } }

        footer { background-color: #030511; color: white; padding-top: 70px; margin-top: 50px; }
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
                    <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="service.php">Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-hero">
        <div class="container"><h1 class="hero-title">Our Services</h1><p class="hero-subtitle">The Office of the Registrar offers comprehensive services on student records management and issuance.</p></div>
    </div>

    <div class="container services-wrapper">
        <div class="service-container-card">
            <div class="service-header"><div class="service-icon-box"><i class="fas fa-user-check"></i></div><div><h2 class="service-title">Verification of Records</h2><p class="text-muted mb-0">Validation of student data and standing</p></div></div>
            <ul class="aesthetic-list"><li>Enrollment Credentials</li><li>Eligibility for Admission</li><li>Academic Status</li></ul>
        </div>
        <div class="service-container-card" style="border-left-color: var(--accent-blue);">
            <div class="service-header"><div class="service-icon-box" style="color: var(--accent-blue); background: rgba(16, 185, 129, 0.1);"><i class="fas fa-file-signature"></i></div><div><h2 class="service-title" style="color: var(--primary-blue);">Issuance of Records</h2><p class="text-muted mb-0">Request for official academic documents</p></div></div>
            <div class="issuance-grid">
                <ul class="aesthetic-list"><li>Diploma</li><li>Official Transcript of Records</li><li>Temporary Transcript of Records</li><li>Transfer Credential (Honorable Dismissal)</li><li>Certification of Enrollment/Attendance</li><li>Certification of Grading System</li></ul>
                <ul class="aesthetic-list"><li>Certification of English as Medium of Instruction</li><li>Certification of Candidacy of Graduation</li><li>Certification of Graduation</li><li>Other certifications related to academic records</li><li>Completion, Dropping and Application forms for Academic Records</li></ul>
            </div>
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