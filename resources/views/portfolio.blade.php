<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naomi Nosa — Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700&family=DM+Sans:wght@300;400;500&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <style>
        :root {
            --cream: #FAF7F2;
            --blush: #F2C4CE;
            --rose: #D4899A;
            --wine: #8B3A52;
            --dark: #1A0A10;
            --sage: #B5C4B1;
            --gold: #C9A96E;
            --text: #2C1A22;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            background: var(--cream);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            overflow-x: hidden;
        }
        /* NAV */
        nav {
            position: fixed; top: 0; width: 100%; z-index: 100;
            padding: 1.2rem 3rem;
            display: flex; justify-content: space-between; align-items: center;
        }
        nav::before {
            content: '';
            position: absolute; inset: 0;
            background: rgba(250,247,242,0.92);
            backdrop-filter: blur(12px);
            z-index: -1;
            border-bottom: 1px solid rgba(212,137,154,0.2);
        }
        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem; font-style: italic;
            color: var(--wine);
        }
        .nav-links { display: flex; gap: 2rem; align-items: center; }
        .nav-links a {
            text-decoration: none; color: var(--text);
            font-size: 0.85rem; letter-spacing: 0.1em;
            text-transform: uppercase; font-weight: 500;
            transition: color 0.3s;
        }
        .nav-links a:hover { color: var(--wine); }
        .nav-btn {
            background: var(--wine) !important;
            color: white !important;
            padding: 0.6rem 1.4rem;
            border-radius: 50px;
        }
        /* HAMBURGER */
        .hamburger {
            display: none;
            flex-direction: column; gap: 5px;
            cursor: pointer; background: none; border: none; padding: 5px;
        }
        .hamburger span {
            width: 25px; height: 2px;
            background: var(--wine); border-radius: 2px;
            transition: all 0.3s;
        }
        .mobile-menu {
            display: none;
            position: fixed; top: 65px; left: 0; right: 0;
            background: rgba(250,247,242,0.98);
            backdrop-filter: blur(12px);
            padding: 1.5rem 2rem;
            flex-direction: column; gap: 1.2rem;
            z-index: 99;
            border-bottom: 1px solid rgba(212,137,154,0.2);
        }
        .mobile-menu a {
            text-decoration: none; color: var(--text);
            font-size: 1rem; letter-spacing: 0.1em;
            text-transform: uppercase; font-weight: 500;
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(212,137,154,0.1);
        }
        .mobile-menu.open { display: flex; }
        /* HERO */
        #hero {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            padding: 8rem 3rem 4rem;
            position: relative;
            overflow: hidden;
            max-width: 100%;
        }
        .hero-bg {
            position: absolute; inset: 0; z-index: 0;
            background:
                radial-gradient(ellipse 60% 70% at 80% 50%, rgba(242,196,206,0.4) 0%, transparent 70%),
                radial-gradient(ellipse 40% 40% at 20% 80%, rgba(181,196,177,0.3) 0%, transparent 60%);
        }
        .hero-decoration {
            position: absolute;
            font-family: 'Playfair Display', serif;
            font-size: 18vw; font-weight: 900;
            color: rgba(212,137,154,0.06);
            line-height: 1; top: 50%; right: -2%;
            transform: translateY(-50%);
            pointer-events: none; user-select: none;
        }
        .hero-left { position: relative; z-index: 1; }
        .hero-tag {
            display: inline-block;
            background: var(--blush); color: var(--wine);
            font-size: 0.75rem; letter-spacing: 0.15em;
            text-transform: uppercase; padding: 0.4rem 1rem;
            border-radius: 50px; margin-bottom: 1.5rem;
            font-weight: 500;
        }
        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.5rem, 5vw, 5rem);
            line-height: 1.05; font-weight: 900;
            color: var(--dark); margin-bottom: 0.5rem;
        }
        .hero-title em { font-style: italic; color: var(--wine); }
        .hero-subtitle {
            font-family: 'DM Serif Display', serif;
            font-size: clamp(1rem, 2vw, 1.5rem);
            color: var(--rose); font-style: italic;
            margin-bottom: 1.5rem;
        }
        .hero-desc {
            font-size: 1rem; line-height: 1.8;
            color: #6B4F5A; max-width: 420px;
            margin-bottom: 2.5rem; font-weight: 300;
        }
        .hero-btns { display: flex; gap: 1rem; align-items: center; flex-wrap: wrap; }
        .btn-primary {
            background: var(--wine); color: white;
            padding: 0.9rem 2rem; border-radius: 50px;
            text-decoration: none; font-size: 0.9rem;
            font-weight: 500; transition: all 0.3s; display: inline-block;
        }
        .btn-primary:hover {
            background: var(--dark); transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(139,58,82,0.3);
        }
        .btn-secondary {
            color: var(--wine); text-decoration: none;
            font-size: 0.9rem; font-weight: 500;
            display: flex; align-items: center; gap: 0.5rem;
            transition: gap 0.3s;
        }
        .btn-secondary:hover { gap: 0.8rem; }
        .hero-right {
            position: relative; z-index: 1;
            display: flex; justify-content: center; align-items: center;
        }
        .hero-image-wrap { position: relative; width: 320px; height: 400px; }
        .hero-image-bg {
            position: absolute; width: 280px; height: 360px;
            background: linear-gradient(135deg, var(--blush), var(--sage));
            border-radius: 60% 40% 55% 45% / 50% 55% 45% 50%;
            top: 20px; left: 20px;
            animation: morph 8s ease-in-out infinite;
        }
        @keyframes morph {
            0%, 100% { border-radius: 60% 40% 55% 45% / 50% 55% 45% 50%; }
            50% { border-radius: 40% 60% 45% 55% / 55% 45% 50% 50%; }
        }
        .hero-image-card {
            position: absolute; inset: 0;
            border-radius: 55% 45% 50% 50% / 45% 50% 50% 55%;
            overflow: hidden;
            animation: morph 8s ease-in-out infinite reverse;
        }
        .hero-image-card img {
            width: 100%; height: 100%;
            object-fit: cover; object-position: center 20%;
        }
        .hero-name-tag {
            position: absolute; bottom: 20px; left: -20px;
            background: white; padding: 0.8rem 1.2rem;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
        }
        .hero-name-tag p { font-size: 0.7rem; color: var(--rose); letter-spacing: 0.1em; text-transform: uppercase; }
        .hero-name-tag h4 { font-family: 'Playfair Display', serif; font-size: 1rem; color: var(--dark); }
        .hero-stats {
            position: absolute; top: 20px; right: -30px;
            background: var(--wine); padding: 1rem 1.2rem;
            border-radius: 12px; text-align: center;
        }
        .hero-stats .num { font-family: 'Playfair Display', serif; font-size: 1.8rem; font-weight: 700; color: white; line-height: 1; }
        .hero-stats .label { font-size: 0.65rem; color: var(--blush); letter-spacing: 0.08em; text-transform: uppercase; }
        .scroll-hint {
            position: absolute; bottom: 2rem; left: 50%;
            transform: translateX(-50%);
            display: flex; flex-direction: column; align-items: center; gap: 0.5rem;
            font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase;
            color: var(--rose); animation: bounce 2s ease-in-out infinite;
        }
        .scroll-line { width: 1px; height: 50px; background: linear-gradient(to bottom, var(--rose), transparent); }
        @keyframes bounce {
            0%, 100% { transform: translateX(-50%) translateY(0); }
            50% { transform: translateX(-50%) translateY(8px); }
        }
        /* MARQUEE */
        .marquee-wrap {
            background: var(--wine); padding: 1rem 0;
            overflow: hidden; white-space: nowrap;
        }
        .marquee-track {
            display: inline-flex; gap: 3rem;
            animation: marquee 20s linear infinite;
        }
        .marquee-track span {
            font-family: 'Playfair Display', serif;
            font-style: italic; font-size: 1rem; color: var(--blush);
        }
        .marquee-track .dot { color: var(--gold); }
        @keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }
        /* SECTIONS */
        section { padding: 5rem 3rem; max-width: 1100px; margin: 0 auto; }
        .section-label { display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; }
        .section-label span { font-size: 0.75rem; letter-spacing: 0.2em; text-transform: uppercase; color: var(--rose); font-weight: 500; }
        .section-label::before { content: ''; width: 40px; height: 1px; background: var(--rose); }
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(1.8rem, 4vw, 3rem);
            font-weight: 900; color: var(--dark);
            line-height: 1.1; margin-bottom: 1.5rem;
        }
        .section-title em { font-style: italic; color: var(--wine); }
        /* ABOUT */
        #about { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; }
        .about-text { font-size: 1rem; line-height: 1.9; color: #6B4F5A; font-weight: 300; margin-bottom: 1.5rem; }
        .about-details { display: flex; flex-direction: column; gap: 0.8rem; margin-bottom: 2rem; }
        .about-detail { display: flex; gap: 1rem; align-items: flex-start; }
        .about-detail-label { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--rose); min-width: 80px; }
        .about-detail-value { font-size: 0.95rem; color: var(--dark); font-weight: 500; }
        .about-right { position: relative; }
        .about-photo {
            width: 100%; height: 300px; border-radius: 20px;
            overflow: hidden; margin-bottom: 1.5rem;
        }
        .about-photo img { width: 100%; height: 100%; object-fit: cover; object-position: center 15%; }
        .about-card {
            background: linear-gradient(135deg, var(--wine), #4A1A28);
            border-radius: 24px; padding: 2rem;
            color: white; position: relative; overflow: hidden;
        }
        .about-card p {
            font-family: 'DM Serif Display', serif;
            font-size: 1.1rem; font-style: italic;
            line-height: 1.7; color: rgba(255,255,255,0.9);
        }
        .about-card-footer {
            margin-top: 1rem; padding-top: 1rem;
            border-top: 1px solid rgba(255,255,255,0.15);
            font-size: 0.8rem; color: var(--blush);
            letter-spacing: 0.08em; text-transform: uppercase;
        }
        /* SKILLS */
        .skills-wrap {
            background: var(--dark); border-radius: 32px;
            margin: 0 3rem; padding: 4rem;
        }
        .skills-wrap .section-label span { color: var(--blush); }
        .skills-wrap .section-label::before { background: var(--blush); }
        .skills-wrap .section-title { color: white; }
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1rem; margin-top: 2rem;
        }
        .skill-item {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 16px; padding: 1.2rem 0.8rem;
            text-align: center; transition: all 0.3s;
        }
        .skill-item:hover { background: var(--wine); border-color: var(--wine); transform: translateY(-4px); }
        .skill-item .skill-icon { font-size: 1.6rem; margin-bottom: 0.4rem; }
        .skill-item h4 { font-size: 0.85rem; color: white; font-weight: 500; }
        .skill-item p { font-size: 0.7rem; color: rgba(255,255,255,0.4); margin-top: 0.2rem; }
        /* PROJECTS */
        .projects-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; }
        .project-card {
            background: white; border-radius: 20px; overflow: hidden;
            transition: all 0.4s;
            box-shadow: 0 2px 20px rgba(139,58,82,0.06);
        }
        .project-card:hover { transform: translateY(-8px); box-shadow: 0 20px 50px rgba(139,58,82,0.15); }
        .project-card:first-child { grid-column: span 2; }
        .project-top {
            height: 180px; position: relative;
            display: flex; align-items: center; justify-content: center;
        }
        .project-card:nth-child(1) .project-top { background: linear-gradient(135deg, var(--wine), #4A1A28); }
        .project-card:nth-child(2) .project-top { background: linear-gradient(135deg, var(--sage), #7A9A75); }
        .project-card:nth-child(3) .project-top { background: linear-gradient(135deg, var(--gold), #A07840); }
        .project-top-text { font-family: 'Playfair Display', serif; font-size: 3.5rem; font-weight: 900; font-style: italic; color: rgba(255,255,255,0.15); }
        .project-num { position: absolute; top: 1rem; left: 1.2rem; font-size: 0.7rem; letter-spacing: 0.15em; text-transform: uppercase; color: rgba(255,255,255,0.5); }
        .project-body { padding: 1.5rem; }
        .project-tags { display: flex; flex-wrap: wrap; gap: 0.4rem; margin-bottom: 0.8rem; }
        .project-tag { font-size: 0.7rem; padding: 0.25rem 0.7rem; border-radius: 50px; letter-spacing: 0.08em; text-transform: uppercase; font-weight: 500; background: var(--cream); color: var(--wine); border: 1px solid var(--blush); }
        .project-body h3 { font-family: 'Playfair Display', serif; font-size: 1.1rem; color: var(--dark); margin-bottom: 0.5rem; }
        .project-body p { font-size: 0.85rem; color: #6B4F5A; line-height: 1.7; font-weight: 300; }
        /* CONTACT */
        .contact-wrap {
            background: linear-gradient(135deg, #1A0A10 0%, #2C1A22 50%, #1A0A10 100%);
            border-radius: 32px; margin: 0 3rem 4rem;
            padding: 5rem 4rem; position: relative; overflow: hidden;
        }
        .contact-wrap::before {
            content: '';
            position: absolute; width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(212,137,154,0.15) 0%, transparent 70%);
            top: -200px; right: -100px; pointer-events: none;
        }
        .contact-inner {
            max-width: 900px; margin: 0 auto;
            display: grid; grid-template-columns: 1fr 1fr;
            gap: 4rem; align-items: start;
        }
        .contact-left .section-label span { color: var(--blush); }
        .contact-left .section-label::before { background: var(--blush); }
        .contact-left .section-title { color: white; }
        .contact-desc { color: rgba(255,255,255,0.5); font-size: 0.95rem; line-height: 1.8; font-weight: 300; }
        .contact-info { margin-top: 2rem; display: flex; flex-direction: column; gap: 1rem; }
        .contact-item { display: flex; align-items: center; gap: 1rem; }
        .contact-item-icon { width: 40px; height: 40px; border-radius: 10px; background: rgba(255,255,255,0.05); display: flex; align-items: center; justify-content: center; font-size: 1rem; }
        .contact-item p { font-size: 0.85rem; color: rgba(255,255,255,0.5); }
        .contact-item h5 { font-size: 0.95rem; color: white; font-weight: 400; }
        .msg-success { background: rgba(181,196,177,0.2); color: #B5C4B1; border: 1px solid rgba(181,196,177,0.3); padding: 1rem 1.2rem; border-radius: 12px; margin-bottom: 1.5rem; font-size: 0.9rem; text-align: center; }
        .msg-error { background: rgba(212,137,154,0.2); color: #F2C4CE; border: 1px solid rgba(212,137,154,0.3); padding: 1rem 1.2rem; border-radius: 12px; margin-bottom: 1.5rem; font-size: 0.9rem; text-align: center; }
        form { display: flex; flex-direction: column; gap: 1rem; }
        form input, form textarea {
            width: 100%; padding: 1rem 1.2rem;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 12px; font-size: 0.9rem;
            color: white; font-family: 'DM Sans', sans-serif;
            transition: all 0.3s;
        }
        form input::placeholder, form textarea::placeholder { color: rgba(255,255,255,0.3); }
        form input:focus, form textarea:focus { outline: none; border-color: var(--rose); background: rgba(255,255,255,0.08); }
        form textarea { height: 130px; resize: vertical; }
        form button {
            padding: 1rem 2rem;
            background: linear-gradient(135deg, var(--rose), var(--wine));
            color: white; border: none; border-radius: 50px;
            font-size: 0.9rem; font-weight: 500;
            font-family: 'DM Sans', sans-serif;
            cursor: pointer; transition: all 0.3s;
        }
        form button:hover { transform: translateY(-2px); box-shadow: 0 12px 30px rgba(212,137,154,0.3); }
        footer { text-align: center; padding: 3rem; font-size: 0.85rem; color: rgba(139,58,82,0.5); }
        .fade-up { opacity: 0; transform: translateY(30px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .fade-up.visible { opacity: 1; transform: translateY(0); }

        /* ===== MOBILE RESPONSIVE ===== */
        @media (max-width: 900px) {
            nav { padding: 1rem 1.5rem; }
            .nav-links { display: none; }
            .hamburger { display: flex; }
            #hero {
                grid-template-columns: 1fr;
                padding: 6rem 1.5rem 3rem;
                text-align: center;
            }
            .hero-right { display: none; }
            .hero-desc { margin: 0 auto 2rem; }
            .hero-btns { justify-content: center; }
            .hero-decoration { display: none; }
            #about {
                grid-template-columns: 1fr;
                gap: 2rem;
                padding: 3rem 1.5rem;
            }
            .about-photo { height: 250px; }
            .skills-wrap {
                margin: 0 1rem;
                padding: 3rem 1.5rem;
                border-radius: 20px;
            }
            .skills-grid { grid-template-columns: repeat(2, 1fr); }
            section { padding: 3rem 1.5rem; }
            .projects-grid { grid-template-columns: 1fr; }
            .project-card:first-child { grid-column: span 1; }
            .contact-wrap {
                margin: 0 1rem 2rem;
                padding: 3rem 1.5rem;
                border-radius: 20px;
            }
            .contact-inner {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }
    </style>
</head>
<body>

<nav>
    <div class="logo">Naomi.</div>
    <div class="nav-links">
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#contact" class="nav-btn">Say Hello ✦</a>
    </div>
    <button class="hamburger" onclick="toggleMenu()" aria-label="Menu">
        <span></span><span></span><span></span>
    </button>
</nav>

<div class="mobile-menu" id="mobileMenu">
    <a href="#about" onclick="closeMenu()">About</a>
    <a href="#skills" onclick="closeMenu()">Skills</a>
    <a href="#projects" onclick="closeMenu()">Projects</a>
    <a href="#contact" onclick="closeMenu()">Say Hello ✦</a>
</div>

<!-- HERO -->
<section id="hero">
    <div class="hero-bg"></div>
    <div class="hero-decoration">N</div>
    <div class="hero-left fade-up">
        <div class="hero-tag">✦ Available for work</div>
        <h1 class="hero-title">Creative<br><em>Developer</em><br>& Designer</h1>
        <p class="hero-subtitle">Naomi Iwinosa Nosa</p>
        <p class="hero-desc">Building beautiful, meaningful web experiences from Lagos, Nigeria. I turn ideas into elegant digital realities with clean code and intentional design.</p>
        <div class="hero-btns">
            <a href="#projects" class="btn-primary">View my work</a>
            <a href="#contact" class="btn-secondary">Let's talk →</a>
        </div>
    </div>
    <div class="hero-right fade-up">
        <div class="hero-image-wrap">
            <div class="hero-image-bg"></div>
            <div class="hero-image-card">
                <img src="{{ asset('images/omie.jpeg') }}" alt="Naomi">
            </div>
            <div class="hero-name-tag">
                <p>Based in</p>
                <h4>Lagos, Nigeria 🇳🇬</h4>
            </div>
            <div class="hero-stats">
                <div class="num">∞</div>
                <div class="label">Ideas</div>
            </div>
        </div>
    </div>
    <div class="scroll-hint">
        <div class="scroll-line"></div>
        <span>Scroll</span>
    </div>
</section>

<!-- MARQUEE -->
<div class="marquee-wrap">
    <div class="marquee-track">
        <span>Laravel</span><span class="dot">✦</span>
        <span>PHP</span><span class="dot">✦</span>
        <span>MySQL</span><span class="dot">✦</span>
        <span>React</span><span class="dot">✦</span>
        <span>TypeScript</span><span class="dot">✦</span>
        <span>JavaScript</span><span class="dot">✦</span>
        <span>Web Design</span><span class="dot">✦</span>
        <span>UI / UX</span><span class="dot">✦</span>
        <span>Laravel</span><span class="dot">✦</span>
        <span>PHP</span><span class="dot">✦</span>
        <span>MySQL</span><span class="dot">✦</span>
        <span>React</span><span class="dot">✦</span>
        <span>TypeScript</span><span class="dot">✦</span>
        <span>JavaScript</span><span class="dot">✦</span>
        <span>Web Design</span><span class="dot">✦</span>
        <span>UI / UX</span><span class="dot">✦</span>
    </div>
</div>

<!-- ABOUT -->
<section id="about">
    <div class="about-left fade-up">
        <div class="section-label"><span>About me</span></div>
        <h2 class="section-title">A girl who codes<br><em>with heart</em></h2>
        <p class="about-text">I'm Naomi, a passionate web developer based in Lagos, Nigeria. I love creating digital experiences that are not just functional, but genuinely beautiful and meaningful to the people who use them.</p>
        <p class="about-text">Currently mastering Laravel and PHP, I bring together technical skill and an eye for design to build things the web deserves.</p>
        <div class="about-details">
            <div class="about-detail">
                <span class="about-detail-label">Location</span>
                <span class="about-detail-value">Lagos, Nigeria 🇳🇬</span>
            </div>
            <div class="about-detail">
                <span class="about-detail-label">Stack</span>
                <span class="about-detail-value">Laravel · PHP · MySQL · React · TS</span>
            </div>
            <div class="about-detail">
                <span class="about-detail-label">Status</span>
                <span class="about-detail-value">Open to opportunities ✦</span>
            </div>
        </div>
        <a href="#contact" class="btn-primary">Work with me</a>
    </div>
    <div class="about-right fade-up">
        <div class="about-photo">
            <img src="{{ asset('images/omie.jpeg') }}" alt="Naomi">
        </div>
        <div class="about-card">
            <p>"I believe every pixel has a purpose and every line of code tells a story."</p>
            <div class="about-card-footer">Naomi Nosa · Developer & Designer</div>
        </div>
    </div>
</section>

<!-- SKILLS -->
<div class="skills-wrap" id="skills">
    <div class="section-label"><span>What I do</span></div>
    <h2 class="section-title">Skills &amp; <em>Tools</em></h2>
    <div class="skills-grid">
        <div class="skill-item fade-up"><div class="skill-icon">🌐</div><h4>HTML</h4><p>Structure</p></div>
        <div class="skill-item fade-up"><div class="skill-icon">🎨</div><h4>CSS</h4><p>Styling</p></div>
        <div class="skill-item fade-up"><div class="skill-icon">⚡</div><h4>JavaScript</h4><p>Interactivity</p></div>
        <div class="skill-item fade-up"><div class="skill-icon">⚛️</div><h4>React</h4><p>Frontend</p></div>
        <div class="skill-item fade-up"><div class="skill-icon">🔷</div><h4>TypeScript</h4><p>Typed JS</p></div>
        <div class="skill-item fade-up"><div class="skill-icon">🐘</div><h4>PHP</h4><p>Backend</p></div>
        <div class="skill-item fade-up"><div class="skill-icon">🔴</div><h4>Laravel</h4><p>Framework</p></div>
        <div class="skill-item fade-up"><div class="skill-icon">🗄️</div><h4>MySQL</h4><p>Database</p></div>
        <div class="skill-item fade-up"><div class="skill-icon">🖥️</div><h4>Backend</h4><p>APIs & Logic</p></div>
        <div class="skill-item fade-up"><div class="skill-icon">📱</div><h4>Responsive</h4><p>All screens</p></div>
    </div>
</div>

<!-- PROJECTS -->
<section id="projects">
    <div class="fade-up">
        <div class="section-label"><span>My work</span></div>
        <h2 class="section-title">Featured <em>Projects</em></h2>
    </div>
    <div class="projects-grid">
        <div class="project-card fade-up">
            <div class="project-top">
                <span class="project-num">01</span>
                <span class="project-top-text">Portfolio</span>
            </div>
            <div class="project-body">
                <div class="project-tags">
                    <span class="project-tag">Laravel</span>
                    <span class="project-tag">PHP</span>
                    <span class="project-tag">MySQL</span>
                </div>
                <h3>This Portfolio</h3>
                <p>A stunning one-page portfolio built with Laravel 12, PHP 8.2, and MySQL. Features a contact form and beautiful modern design.</p>
            </div>
        </div>
        <div class="project-card fade-up">
            <div class="project-top">
                <span class="project-num">02</span>
                <span class="project-top-text">Project</span>
            </div>
            <div class="project-body">
                <div class="project-tags">
                    <span class="project-tag">React</span>
                    <span class="project-tag">TypeScript</span>
                </div>
                <h3>Project Two</h3>
                <p>Describe your second project here — what it does and what you learned building it.</p>
            </div>
        </div>
        <div class="project-card fade-up">
            <div class="project-top">
                <span class="project-num">03</span>
                <span class="project-top-text">Work</span>
            </div>
            <div class="project-body">
                <div class="project-tags">
                    <span class="project-tag">PHP</span>
                    <span class="project-tag">MySQL</span>
                </div>
                <h3>Project Three</h3>
                <p>Describe your third project here — what it does and what you learned building it.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<div class="contact-wrap" id="contact">
    <div class="contact-inner">
        <div class="contact-left fade-up">
            <div class="section-label"><span>Get in touch</span></div>
            <h2 class="section-title">Let's create<br><em>something beautiful</em></h2>
            <p class="contact-desc">Have a project in mind? Want to collaborate or just say hi? I'd love to hear from you!</p>
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-item-icon">📍</div>
                    <div><p>Location</p><h5>Lagos, Nigeria</h5></div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon">✉️</div>
                    <div><p>Email</p><h5>naominosa296@gmail.com</h5></div>
                </div>
            </div>
        </div>
        <div class="contact-right fade-up">
            @if(session('success'))
                <div class="msg-success">✦ {{ session('success') }}</div>
            @endif
            @if($errors->any())
                <div class="msg-error">⚠️ Please fill in all fields correctly.</div>
            @endif
            <form action="{{ route('contact') }}" method="POST" id="contactForm">
                @csrf
                <input type="text" name="name" id="fname" placeholder="Your name" value="{{ old('name') }}" required>
                <input type="email" name="email" id="femail" placeholder="Your email" value="{{ old('email') }}" required>
                <textarea name="message" id="fmessage" placeholder="Tell me about your project..." required>{{ old('message') }}</textarea>
                <button type="submit">Send Message ✦</button>
            </form>
        </div>
    </div>
</div>

<footer>
    <p>Crafted with ♥ by <strong>Naomi Iwinosa Nosa</strong> · Lagos, Nigeria · Built with Laravel & PHP</p>
</footer>

<script>
    function toggleMenu() {
        document.getElementById('mobileMenu').classList.toggle('open');
    }
    function closeMenu() {
        document.getElementById('mobileMenu').classList.remove('open');
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => entry.target.classList.add('visible'), i * 100);
            }
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

    @if(session('success'))
        document.getElementById('fname').value = '';
        document.getElementById('femail').value = '';
        document.getElementById('fmessage').value = '';
    @endif
</script>
</body>
</html>