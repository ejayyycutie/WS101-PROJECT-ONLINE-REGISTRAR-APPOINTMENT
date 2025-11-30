<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Northern Samar Colleges - Office of the Registrar</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        /* ================= VARIABLES ================= */
        :root {
            --primary-blue: #0f204b;
            --accent-blue: #2a5bd7;
            --accent-gold: #fbbf24;
            --text-light: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        /* ================= NAVBAR ================= */
        .navbar {
            background: rgba(15, 32, 75, 0.95);
            padding: 15px 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .navbar-brand img {
            height: 70px;
            width: 70px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid rgba(255,255,255,0.2);
        }

        .brand-text {
            font-size: 1.6rem;
            font-weight: 700;
            color: white;
            line-height: 1;
            white-space: nowrap;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .nav-link {
            color: rgba(255,255,255,0.8) !important;
            font-weight: 500;
            font-size: 1rem;
            margin-left: 25px;
            transition: 0.3s;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--accent-gold) !important;
            font-weight: 700;
        }

        /* ================= HERO SECTION ================= */
        .hero-section {
            position: relative;
            height: 90vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            /* Siguraduhin na nasa assets/img folder ang building.jpg */
            background-image: url('assets/img/building.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, 
                rgba(3, 11, 24, 0.95) 0%, 
                rgba(3, 11, 24, 0.85) 45%, 
                rgba(3, 11, 24, 0.1) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
            max-width: 750px;
            padding-left: 5%;
        }

        .hero-welcome {
            color: var(--accent-gold);
            font-weight: 600;
            letter-spacing: 3px;
            font-size: 1.1rem;
            text-transform: uppercase;
            margin-bottom: 15px;
            display: inline-block;
            border-bottom: 2px solid var(--accent-gold);
            padding-bottom: 5px;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 10px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }

        .hero-subtitle {
            font-size: 2.2rem;
            font-weight: 700;
            color: #a5b4fc;
            margin-bottom: 25px;
            text-transform: uppercase;
        }

        .hero-desc {
            font-size: 1.1rem;
            line-height: 1.8;
            opacity: 0.9;
            margin-bottom: 40px;
            border-left: 4px solid var(--accent-gold);
            padding-left: 20px;
        }

        /* Login Buttons */
        .btn-portal {
            padding: 12px 35px;
            font-weight: 700;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .btn-student {
            background-color: var(--accent-gold);
            color: var(--primary-blue);
            border: 2px solid var(--accent-gold);
        }
        .btn-student:hover {
            background-color: transparent;
            color: var(--accent-gold);
        }

        .btn-registrar {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }
        .btn-registrar:hover {
            background-color: white;
            color: var(--primary-blue);
        }

        /* ================= SERVICES PREVIEW ================= */
        .services-section {
            padding: 80px 0;
            background-color: #f3f6f9;
        }

        .service-card {
            background: white;
            border-radius: 15px;
            padding: 40px 25px;
            text-align: center;
            height: 100%;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(15, 32, 75, 0.15);
        }

        .icon-circle {
            width: 70px;
            height: 70px;
            background: rgba(15, 32, 75, 0.05);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
            color: var(--primary-blue);
            font-size: 1.8rem;
            transition: 0.3s;
        }

        .service-card:hover .icon-circle {
            background: var(--primary-blue);
            color: white;
        }

        .btn-aesthetic {
            background: var(--primary-blue);
            color: white;
            padding: 10px 25px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }
        
        .btn-aesthetic:hover {
            background: var(--accent-blue);
            color: white;
        }

        /* ================= FOOTER ================= */
        footer {
            background-color: #030511;
            color: white;
            padding-top: 70px;
        }
        
        .footer-logo {
            height: 90px;
            width: 90px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid transparent;
        }

        .footer-logo-text {
            font-family: 'Impact', sans-serif;
            font-size: 2rem;
            line-height: 1;
            text-transform: uppercase;
            margin-left: 15px;
        }
        
        .copyright-bar {
            background-color: #1a1f36;
            padding: 20px 0;
            margin-top: 50px;
            text-align: center;
            font-size: 0.9rem;
            color: #aaa;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo.png" alt="NSC Logo" onerror="this.src='https://via.placeholder.com/70?text=LOGO'"> 
                <span class="brand-text">Northern Samar Colleges</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="service.php">Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <div class="hero-overlay"></div>

        <div class="container hero-content">
            <div class="hero-welcome">Welcome To</div>
            <h1 class="hero-title">Northern Samar<br>Colleges</h1>
            <h2 class="hero-subtitle">Office of the Registrar</h2>
            <p class="hero-desc">
                The official custodian of academic records. We ensure integrity, accuracy, and accessibility for all student documents. Secure your future with us.
            </p>
            
            <div class="d-flex gap-3 flex-wrap">
                <a href="login_student.php" class="btn-portal btn-student">
                    <i class="fas fa-user-graduate me-2"></i> Student Portal
                </a>
                
                <a href="login_registrar.php" class="btn-portal btn-registrar">
                    <i class="fas fa-user-shield me-2"></i> Registrar Login
                </a>
            </div>
        </div>
    </div>

    <div class="container services-section">
        <div class="row g-4">
            
            <div class="col-md-3">
                <div class="service-card">
                    <div class="icon-circle"><i class="fas fa-certificate"></i></div>
                    <h5 class="fw-bold mb-3">Verify Records</h5>
                    <p class="text-muted small mb-4">Fast and secure verification of student records for graduates.</p>
                    <a href="service.php" class="btn-aesthetic">Verify Now</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="service-card">
                    <div class="icon-circle"><i class="fas fa-laptop-file"></i></div>
                    <h5 class="fw-bold mb-3">Online Request</h5>
                    <p class="text-muted small mb-4">Apply for TOR, Diploma, and other certifications online.</p>
                    <a href="service.php" class="btn-aesthetic">Request Now</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="service-card">
                    <div class="icon-circle"><i class="fas fa-magnifying-glass-location"></i></div>
                    <h5 class="fw-bold mb-3">Track Status</h5>
                    <p class="text-muted small mb-4">Real-time tracking of your walk-in document requests.</p>
                    <a href="service.php" class="btn-aesthetic">Track Status</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="service-card">
                    <div class="icon-circle"><i class="fas fa-circle-question"></i></div>
                    <h5 class="fw-bold mb-3">Help & FAQs</h5>
                    <p class="text-muted small mb-4">Find answers to frequently asked questions.</p>
                    <a href="service.php" class="btn-aesthetic">Read FAQs</a>
                </div>
            </div>

        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="assets/img/logo.png" alt="NSC Logo" class="footer-logo" onerror="this.src='https://via.placeholder.com/90?text=LOGO'">
                        <div class="footer-logo-text">
                            <div>Northern</div>
                            <div>Samar Colleges</div>
                        </div>
                    </div>
                    <p class="small text-secondary" style="max-width: 90%;">Excellence in education since 1948. Shaping the future of Northern Samar, one student at a time.</p>
                </div>

                <div class="col-lg-3 mb-4">
                    <h5 class="text-primary fw-bold mb-3">Contact Us</h5>
                    <p class="small text-secondary">
                        <strong>Basic Education Department</strong><br>
                        Annunciation Street<br>
                        Catarman Northern Samar<br><br>
                        <strong>College Department</strong><br>
                        Brgy. Dalakit,<br>
                        Catarman Northern Samar
                    </p>
                </div>

                <div class="col-lg-4">
                    <h5 class="text-primary fw-bold mb-3">About NSC</h5>
                    <p class="small text-secondary" style="text-align: justify;">
                        Northern Samar Colleges, formerly Northern Samar Academy, located along Annunciacion corner Roxas Streets, Brgy. J. P. Rizal, Catarman, Northern Samar, was established in 1949 and incorporated in 1950 in response to the clamor for a school that could meet the needs of a particular segment of the town populace. At that time, there were only two schools in town; one was a private Roman Catholic high school; another, a public agricultural school about three kilometers away from the town proper across the river. There was no bridge then connecting the town to the road going that way and it was accessible only by banca. Public buses were scarce and tricycles and pedicabs were non-existent by then. A student from town had to hike the distance after crossing the river.
                    </p>
                </div>
            </div>
        </div>
        <div class="copyright-bar">
            &copy; 2025 Northern Samar Colleges. All Rights Reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>