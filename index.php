<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Eugine Joseph — Full Stack Web Developer & SEO Specialist</title>
<meta name="description" content="Senior Full Stack Web Developer specializing in PHP, Laravel, WordPress, and On-Page SEO. Based in Dubai, UAE."/>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

<!-- Icons & UI -->
<link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/panzoom/panzoom.css"/>

<?php
// ---- DATA ----
$person = (object)[
    'name'    => 'Eugine Joseph',
    'phone'   => '0566275294',
    'email'   => 'euginepj@yahoo.com',
    'title'   => 'Full Stack Developer & SEO Specialist',
    'country' => 'Dubai, UAE',
    'bio'     => 'Architecting high-performance web solutions with a decade of expertise across PHP, Laravel, WordPress, and SEO. Delivering pixel-perfect UIs and scalable backends for enterprise clients.',
    'social'  => [
        'linkedin-in'  => 'https://www.linkedin.com/in/eugine-p-j-67ab6719/',
        'github'       => 'https://github.com/euginepj',
        'twitter'      => 'https://twitter.com/euginepj',
        'stack-overflow' => 'https://stackoverflow.com/users/1587049/eugine-joseph',
    ]
];

$skills = [
    'PHP / Laravel', 'MySQL / PostgreSQL',
    'WordPress / CMS', 'Tailwind CSS',
    'Bootstrap', 'JavaScript / jQuery',
    'Node.js', 'Payment Gateways',
    'HTML5 / CSS3', 'On-Page SEO',
    'CodeIgniter', 'GitHub / Git',
];

$works = [
    ["name"=>"Promotion Pages",   "img"=>"promotions-img-1.webp", "cat"=>"tw,la",  "href"=>"https://promotions.leosdevelopments.com/knightsbridge-brown/", "year"=>"2024", "stack"=>["Laravel","Tailwind"],           "other_imgs"=>["promotions-img-1.webp"]],
    ["name"=>"Central Pacific One","img"=>"img-cpo-1.png",         "cat"=>"tw,la",  "href"=>"https://centralpacificone.com/",                              "year"=>"2024", "stack"=>["Laravel","Tailwind","SEO"],      "other_imgs"=>["img-cpo-2.png","img-cpo-3.png","img-cpo-4.png","img-cpo-5.png"]],
    ["name"=>"Design LUD",         "img"=>"img-lud-01.png",         "cat"=>"wp",     "href"=>"https://designlud.com/",                                       "year"=>"2024", "stack"=>["WordPress","SEO"],               "other_imgs"=>["img-lud-02.png","img-lud-03.png"]],
    ["name"=>"Nursery",            "img"=>"img-nursery.png",        "cat"=>"bt,ci",  "href"=>"http://falconcitynursery.ae",                                  "year"=>"2021", "stack"=>["Bootstrap","CodeIgniter"]],
    ["name"=>"Falconcity Markets", "img"=>"img-markets.png",        "cat"=>"bt,php", "href"=>"http://falconcitymarkets.ae/",                                 "year"=>"2020", "stack"=>["Bootstrap","PHP"]],
    ["name"=>"Panworld Travels",   "img"=>"img-panworld.png",       "cat"=>"bt,wp",  "href"=>"http://panworldtravels.com/",                                  "year"=>"2019", "stack"=>["WordPress","Bootstrap"]],
    ["name"=>"A & A Cargo",        "img"=>"img-aandacargo.png",     "cat"=>"bt,php", "href"=>"#",                                                            "year"=>"2019", "stack"=>["Bootstrap","PHP"]],
    ["name"=>"AOAMS",              "img"=>"img-aoams.png",          "cat"=>"bt,php", "href"=>"http://almoosa-oam.com/",                                      "year"=>"2018", "stack"=>["Bootstrap","PHP"]],
];

$companies = [
    [
        'title' => 'Full Stack Web Developer &amp; SEO Specialist',
        'name'  => 'LEOS International Group, Dubai',
        'time'  => 'Jan 2024 — Present',
        'tasks' => [
            "Optimized and customized a website to win the <b>'Best Developer Website' Award</b> at the <i>Dubai Property Awards 2024–2025</i>.",
            "Boosted <b>Google PageSpeed score to 95+</b> through performance optimizations, enhancing load times and UX.",
            "Implemented <b>Amazon Pay and APS payment gateways</b>, enabling seamless and secure transactions.",
            "Built <b>SEO-optimized websites</b> (e.g., <i>Central Pacific One, DesignLUD</i>), improving organic traffic and visibility.",
            "Managed <b>server infrastructure, security, and uptime (99.9%)</b> for all LEOS Developments websites.",
        ]
    ],
    [
        'title' => 'Full Stack Developer',
        'name'  => 'Falconcity of Wonders, Dubai',
        'time'  => '6 Years',
        'tasks' => [
            "Developed <b>SEO-optimized corporate websites</b> with on-page best practices to enhance visibility.",
            "Built custom in-house applications using <b>Laravel</b>: HRMS, Document Management, IT Management, DocSign, Tax Allocation, Archive System.",
            "Built corporate websites for Almoosa Group using <b>WordPress, Core PHP, and CodeIgniter</b>.",
            "Created responsive <b>email newsletters</b>, deployed via SendGrid for marketing campaigns.",
        ]
    ],
    [
        'title' => 'Full Stack Developer',
        'name'  => 'Menora Software, India',
        'time'  => '10 Months',
        'tasks' => [
            "Developed a <b>cloud-based CRM system using Zend Framework</b>, streamlining business operations.",
            "Performed code reviews, debugged complex issues, and optimized existing code for better performance.",
            "Built <b>responsive websites from mockups</b> ensuring pixel-perfect implementation.",
        ]
    ],
    [
        'title' => 'Full Stack Developer',
        'name'  => 'Jwimps Innovations, India',
        'time'  => '2 Years',
        'tasks' => [
            "Developed <b>jwimps.com</b> — an eBay-style e-commerce platform enabling shops to sell products online.",
            "Built and launched sites: WordPress (<b>q8malayali.com</b>), CodeIgniter (<b>tourorganiserindia.in</b>), Magento (<b>citydamsel.com</b>).",
            "Specialized in <b>full-cycle website development</b> from concept to deployment.",
        ]
    ]
];
?>

<style>
/* ===== RESET & BASE ===== */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; font-size: 16px; }
body {
    background-color: #0a0a0a;
    color: #e5e2e1;
    font-family: 'Outfit', sans-serif;
    font-weight: 400;
    line-height: 1.6;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* ===== SCROLLBAR ===== */
::-webkit-scrollbar { width: 4px; }
::-webkit-scrollbar-track { background: #0a0a0a; }
::-webkit-scrollbar-thumb { background: #333; border-radius: 2px; }

/* ===== TYPOGRAPHY ===== */
h1, h2, h3, h4, h5 { font-family: 'Playfair Display', serif; }
.label {
    font-family: 'Outfit', sans-serif;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #888;
}

/* ===== LAYOUT ===== */
.site-wrapper {
    display: flex;
    min-height: 100vh;
    position: relative;
}

/* SIDEBAR */
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 280px;
    height: 100vh;
    background: #111111;
    border-right: 1px solid #222;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    padding: 2.5rem 2rem;
    gap: 2rem;
    z-index: 100;
}

/* MAIN */
.main-content {
    margin-left: 280px;
    flex: 1;
    padding: 3rem 3.5rem;
    display: flex;
    flex-direction: column;
    gap: 5rem;
    min-height: 100vh;
}

/* FOOTER */
.site-footer {
    margin-left: 280px;
    padding: 1.5rem 3.5rem;
    border-top: 1px solid #222;
    background: #111;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}

/* ===== SIDEBAR ELEMENTS ===== */
.sidebar-avatar {
    width: 140px;
    height: 155px;
    background: #1a1a1a;
    border: 1px solid #222;
    overflow: hidden;
    flex-shrink: 0;
}
.sidebar-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: grayscale(1);
    opacity: 0.85;
    transition: filter 0.6s, opacity 0.6s;
}
.sidebar-avatar:hover img { filter: grayscale(0); opacity: 1; }

.sidebar-name {
    font-family: 'Playfair Display', serif;
    font-size: 1.9rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: -0.01em;
    color: #ffffff;
    line-height: 1.05;
}
.sidebar-subtitle { font-size: 0.7rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; color: #666; margin-top: 0.4rem; }

/* NAV */
.sidebar-nav { display: flex; flex-direction: column; gap: 0; border-top: 1px solid #222; padding-top: 1.5rem; }
.sidebar-nav a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.6rem 0;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    text-decoration: none;
    color: #666;
    border-bottom: 1px solid transparent;
    transition: color 0.2s;
}
.sidebar-nav a:hover { color: #fff; }
.sidebar-nav a.active { color: #fff; border-bottom-color: #fff; padding-bottom: 0.5rem; }
.sidebar-nav a .material-symbols-outlined { font-size: 14px; opacity: 0; transition: opacity 0.2s; }
.sidebar-nav a:hover .material-symbols-outlined,
.sidebar-nav a.active .material-symbols-outlined { opacity: 1; }

/* SIDEBAR SECTIONS */
.sidebar-section { display: flex; flex-direction: column; gap: 0.6rem; }
.sidebar-section-title { font-size: 0.65rem; font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase; color: #555; border-bottom: 1px solid #222; padding-bottom: 0.5rem; margin-bottom: 0.2rem; font-family: 'Outfit', sans-serif; }
.sidebar-bio { font-size: 0.8rem; color: #777; line-height: 1.7; }

/* CONTACT */
.contact-item { display: flex; align-items: center; gap: 0.6rem; font-size: 0.78rem; color: #777; text-decoration: none; transition: color 0.2s; }
.contact-item:hover { color: #fff; }
.contact-item i { width: 14px; text-align: center; font-size: 0.7rem; color: #555; }

/* SOCIAL */
.social-row { display: flex; gap: 1rem; margin-top: 0.5rem; }
.social-row a { color: #555; font-size: 0.85rem; text-decoration: none; transition: color 0.2s; }
.social-row a:hover { color: #fff; }

/* SKILLS GRID */
.skills-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0; }
.skills-grid span {
    font-size: 0.65rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #666;
    padding: 0.45rem 0;
    border-bottom: 1px solid #1e1e1e;
}

/* CV BUTTON */
.cv-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #333;
    background: transparent;
    color: #fff;
    font-size: 0.7rem;
    font-family: 'Outfit', sans-serif;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
    transition: background 0.2s, color 0.2s;
    margin-top: auto;
}
.cv-btn:hover { background: #fff; color: #000; }
.cv-btn .material-symbols-outlined { font-size: 16px; }

/* ===== SECTION HEADING ===== */
.section-heading {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    border-bottom: 1px solid #222;
    padding-bottom: 1rem;
    margin-bottom: 2.5rem;
}
.section-heading h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.01em;
    color: #fff;
}

/* ===== FILTER CONTROLS ===== */
.filter-controls { display: flex; flex-wrap: wrap; align-items: center; gap: 0.5rem 1.5rem; }
.filter-label { font-size: 0.65rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; color: #444; font-family: 'Outfit', sans-serif; }
.fltr-controls {
    font-size: 0.65rem;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #555;
    cursor: pointer;
    padding-bottom: 2px;
    border-bottom: 1px solid transparent;
    transition: color 0.2s;
    font-family: 'Outfit', sans-serif;
}
.fltr-controls:hover { color: #ccc; }
.fltr-controls.active { color: #fff; border-bottom-color: #fff; }

/* ===== PROJECTS GRID ===== */
.projects-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1px;
    background: #222;
    border: 1px solid #222;
}

.project-card {
    background: #0a0a0a;
    cursor: pointer;
    transition: background 0.3s;
    display: flex;
    flex-direction: column;
}
.project-card:hover { background: #111; }
.project-card.hidden { display: none; }

.project-card-thumb {
    position: relative;
    aspect-ratio: 4/3;
    overflow: hidden;
    background: #1a1a1a;
}
.project-card-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: grayscale(1);
    opacity: 0.65;
    transition: filter 0.5s, opacity 0.5s, transform 0.6s;
    display: block;
}
.project-card:hover .project-card-thumb img {
    filter: grayscale(0);
    opacity: 1;
    transform: scale(1.04);
}
.project-card-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.75);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s;
}
.project-card:hover .project-card-overlay { opacity: 1; }
.project-card-overlay .material-symbols-outlined { font-size: 2rem; color: #fff; }

.project-card-info {
    padding: 1rem 1.1rem 1.2rem;
    background: #111;
    border-top: 1px solid #222;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 0.5rem;
    flex: 1;
}
.project-card-info-left { display: flex; flex-direction: column; gap: 0.3rem; }
.project-year { font-size: 0.65rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; color: #555; font-family: 'Outfit', sans-serif; }
.project-name { font-family: 'Outfit', sans-serif; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; color: #e0e0e0; line-height: 1.3; }
.project-tags { display: flex; flex-wrap: wrap; gap: 3px; margin-top: 0.4rem; }
.project-tag {
    font-size: 0.58rem;
    font-weight: 600;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #555;
    border: 1px solid #2a2a2a;
    padding: 1px 5px;
    font-family: 'Outfit', sans-serif;
}
.project-link { color: #444; text-decoration: none; flex-shrink: 0; margin-top: 2px; transition: color 0.2s; }
.project-link:hover { color: #fff; }
.project-link .material-symbols-outlined { font-size: 16px; }

/* ===== EXPERIENCE ===== */
.experience-list { display: flex; flex-direction: column; }
.exp-item {
    display: grid;
    grid-template-columns: 140px 40px 1fr;
    border-bottom: 1px solid #1a1a1a;
    padding: 2rem 0;
    gap: 0;
    position: relative;
}
.exp-item:first-child { padding-top: 0; }

.exp-date {
    font-size: 0.65rem;
    font-weight: 600;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #555;
    padding-top: 0.15rem;
    font-family: 'Outfit', sans-serif;
    padding-right: 1rem;
}
.exp-line {
    display: flex;
    justify-content: center;
    position: relative;
}
.exp-line::before {
    content: '';
    position: absolute;
    top: 0; bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 1px;
    background: #222;
}
.exp-dot {
    width: 8px;
    height: 8px;
    border-radius: 0;
    background: #333;
    border: 1px solid #444;
    position: relative;
    z-index: 1;
    margin-top: 0.2rem;
    transition: background 0.3s, transform 0.3s;
    flex-shrink: 0;
}
.exp-item:hover .exp-dot { background: #fff; transform: scale(1.4); }
.exp-item:first-child .exp-dot { background: #fff; }

.exp-body { padding-left: 1.5rem; }
.exp-title {
    font-family: 'Outfit', sans-serif;
    font-size: 0.9rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: #fff;
    margin-bottom: 0.2rem;
}
.exp-company {
    font-size: 0.65rem;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #555;
    margin-bottom: 1rem;
    font-family: 'Outfit', sans-serif;
}
.exp-tasks {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    padding-left: 1rem;
    border-left: 1px solid #222;
}
.exp-tasks li { font-size: 0.85rem; color: #888; line-height: 1.65; }
.exp-tasks b { color: #ccc; font-weight: 600; }
.exp-tasks i { color: #999; }

/* ===== MOBILE HEADER ===== */
.mobile-header {
    display: none;
    position: sticky;
    top: 0;
    z-index: 200;
    background: #111;
    border-bottom: 1px solid #222;
    padding: 1rem 1.25rem;
    justify-content: space-between;
    align-items: center;
}
.mobile-header-name { font-family: 'Playfair Display', serif; font-size: 1.1rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; color: #fff; }
.mobile-menu-btn { background: none; border: none; cursor: pointer; color: #888; padding: 0.25rem; }
.mobile-menu-btn:hover { color: #fff; }
.mobile-menu-btn .material-symbols-outlined { font-size: 1.5rem; }

/* MOBILE DRAWER */
.mobile-drawer {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 300;
}
.mobile-drawer.open { display: block; }
.drawer-backdrop { position: absolute; inset: 0; background: rgba(0,0,0,0.85); }
.drawer-panel {
    position: absolute;
    top: 0; left: 0;
    width: 280px;
    height: 100%;
    background: #111;
    border-right: 1px solid #222;
    padding: 2rem 1.5rem;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    gap: 2rem;
}
.drawer-close { background: none; border: none; cursor: pointer; color: #888; }
.drawer-close:hover { color: #fff; }

/* ===== FOOTER ===== */
.site-footer { color: #555; }
.site-footer p { font-size: 0.7rem; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; }
.footer-links { display: flex; gap: 1.5rem; }
.footer-links a { font-size: 0.7rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; color: #555; text-decoration: none; transition: color 0.2s; }
.footer-links a:hover { color: #fff; }

/* ===== RESPONSIVE ===== */
@media (max-width: 1024px) {
    .sidebar { display: none; }
    .mobile-header { display: flex; }
    .main-content { margin-left: 0; padding: 2rem 1.5rem; gap: 4rem; }
    .site-footer { margin-left: 0; }
    .projects-grid { grid-template-columns: repeat(2, 1fr); }
    .exp-item { grid-template-columns: 110px 30px 1fr; }
}
@media (max-width: 600px) {
    .projects-grid { grid-template-columns: 1fr; }
    .exp-item { grid-template-columns: 1fr; gap: 0.5rem; }
    .exp-line { display: none; }
    .section-heading { flex-direction: column; align-items: flex-start; gap: 1rem; }
}
</style>
</head>

<body>

<!-- ===== MOBILE HEADER ===== -->
<header class="mobile-header" id="mobileHeader">
    <div class="mobile-header-name">Eugine Joseph</div>
    <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Open menu">
        <span class="material-symbols-outlined">menu</span>
    </button>
</header>

<!-- ===== MOBILE DRAWER ===== -->
<div class="mobile-drawer" id="mobileDrawer">
    <div class="drawer-backdrop" id="drawerBackdrop"></div>
    <div class="drawer-panel">
        <div style="display:flex;justify-content:space-between;align-items:center;">
            <span class="label">Navigation</span>
            <button class="drawer-close" id="drawerClose"><span class="material-symbols-outlined">close</span></button>
        </div>
        <nav style="display:flex;flex-direction:column;gap:1rem;">
            <a href="#projects" class="fltr-controls" style="color:#888;text-decoration:none;">Featured Work</a>
            <a href="#experience" class="fltr-controls" style="color:#888;text-decoration:none;">Experience</a>
            <a href="#contact" class="fltr-controls" style="color:#888;text-decoration:none;">Contact</a>
        </nav>
        <a href="Full-Stack-Developer-Eugine-Joseph-2025-1.pdf" class="cv-btn">
            <span class="material-symbols-outlined">download</span> Download CV
        </a>
    </div>
</div>

<!-- ===== SITE WRAPPER ===== -->
<div class="site-wrapper">

    <!-- ===== SIDEBAR ===== -->
    <aside class="sidebar">

        <!-- Avatar + Name -->
        <div style="display:flex;flex-direction:column;gap:1.2rem;">
            <div class="sidebar-avatar">
                <img src="https://avatars0.githubusercontent.com/u/5563836?s=400&v=4"
                     alt="Eugine Joseph - Full Stack Web Developer"/>
            </div>
            <div>
                <div class="sidebar-name">EUGINE<br/>JOSEPH</div>
                <div class="sidebar-subtitle">Full Stack Developer</div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="sidebar-nav">
            <a href="#projects" class="active">
                <span>Featured Work</span>
                <span class="material-symbols-outlined">arrow_forward</span>
            </a>
            <a href="#experience">
                <span>Experience</span>
                <span class="material-symbols-outlined">arrow_forward</span>
            </a>
            <a href="#contact">
                <span>Contact</span>
                <span class="material-symbols-outlined">arrow_forward</span>
            </a>
        </nav>

        <!-- Profile -->
        <div class="sidebar-section">
            <div class="sidebar-section-title">Profile</div>
            <p class="sidebar-bio"><?= $person->bio ?></p>
        </div>

        <!-- Contact -->
        <div class="sidebar-section" id="contact">
            <div class="sidebar-section-title">Contact</div>
            <a href="mailto:<?= $person->email ?>" class="contact-item">
                <i class="fas fa-envelope"></i> <?= $person->email ?>
            </a>
            <a href="tel:+971<?= $person->phone ?>" class="contact-item">
                <i class="fas fa-phone"></i> <?= $person->phone ?>
            </a>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i> <?= $person->country ?>
            </div>
            <div class="social-row">
                <?php foreach ($person->social as $key => $url): ?>
                    <a href="<?= $url ?>" target="_blank" rel="noopener" title="<?= ucfirst($key) ?>">
                        <i class="fab fa-<?= $key ?>"></i>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Technical Stack -->
        <div class="sidebar-section">
            <div class="sidebar-section-title">Technical Stack</div>
            <div class="skills-grid">
                <?php foreach ($skills as $skill): ?>
                    <span><?= $skill ?></span>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- CV Download -->
        <a href="Full-Stack-Developer-Eugine-Joseph-2025-1.pdf" class="cv-btn" style="margin-top:auto;">
            <span class="material-symbols-outlined">download</span> Download CV
        </a>

    </aside>

    <!-- ===== MAIN CONTENT ===== -->
    <main class="main-content">

        <!-- ====== FEATURED PROJECTS ====== -->
        <section id="projects">
            <div class="section-heading">
                <h2>Featured Projects</h2>
                <div class="filter-controls">
                    <span class="filter-label">Filter:</span>
                    <span class="fltr-controls active" data-filter="all">All</span>
                    <span class="fltr-controls" data-filter="la">Laravel</span>
                    <span class="fltr-controls" data-filter="wp">WordPress</span>
                    <span class="fltr-controls" data-filter="php">PHP</span>
                    <span class="fltr-controls" data-filter="ci">CodeIgniter</span>
                    <span class="fltr-controls" data-filter="bt">Bootstrap</span>
                </div>
            </div>

            <div class="projects-grid" id="projectsGrid">
                <?php foreach ($works as $i => $work): ?>
                <article class="project-card" data-category="<?= $work['cat'] ?>">
                    <div class="project-card-thumb">
                        <a data-fancybox="gallery_<?= $i ?>"
                           href="images/<?= $work['img'] ?>"
                           tabindex="-1">
                            <img src="images/sm-<?= $work['img'] ?>"
                                 alt="<?= htmlspecialchars($work['name']) ?>"/>
                            <div class="project-card-overlay">
                                <span class="material-symbols-outlined">open_in_full</span>
                            </div>
                        </a>
                        <?php if (!empty($work['other_imgs'])): ?>
                            <?php foreach ($work['other_imgs'] as $img): ?>
                                <a data-fancybox="gallery_<?= $i ?>" href="images/<?= $img ?>" style="display:none;"></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="project-card-info">
                        <div class="project-card-info-left">
                            <span class="project-year"><?= $work['year'] ?? '' ?></span>
                            <span class="project-name"><?= htmlspecialchars($work['name']) ?></span>
                            <?php if (!empty($work['stack'])): ?>
                            <div class="project-tags">
                                <?php foreach ($work['stack'] as $tag): ?>
                                    <span class="project-tag"><?= $tag ?></span>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php if ($work['href'] !== '#'): ?>
                        <a href="<?= $work['href'] ?>" target="_blank" rel="noopener"
                           class="project-link" title="Visit <?= htmlspecialchars($work['name']) ?>">
                            <span class="material-symbols-outlined">north_east</span>
                        </a>
                        <?php endif; ?>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- ====== EXPERIENCE ====== -->
        <section id="experience">
            <div class="section-heading">
                <h2>Experience</h2>
            </div>

            <div class="experience-list">
                <?php foreach ($companies as $idx => $company): ?>
                <div class="exp-item">
                    <div class="exp-date"><?= $company['time'] ?></div>
                    <div class="exp-line">
                        <div class="exp-dot"></div>
                    </div>
                    <div class="exp-body">
                        <div class="exp-title"><?= $company['title'] ?></div>
                        <div class="exp-company"><?= $company['name'] ?></div>
                        <ul class="exp-tasks">
                            <?php foreach ($company['tasks'] as $task): ?>
                                <li><?= $task ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

    </main><!-- /.main-content -->
</div><!-- /.site-wrapper -->

<!-- ===== FOOTER ===== -->
<footer class="site-footer">
    <p>© <?= date('Y') ?> Eugine Joseph — Crafted with Precision.</p>
    <div class="footer-links">
        <a href="mailto:<?= $person->email ?>">Email</a>
        <a href="<?= $person->social['linkedin-in'] ?>" target="_blank">LinkedIn</a>
        <a href="Full-Stack-Developer-Eugine-Joseph-2025-1.pdf">CV</a>
    </div>
</footer>

<!-- ===== SCRIPTS ===== -->
<script src="node_modules/mdbootstrap/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/panzoom/panzoom.umd.js"></script>
<script>
// ---- Fancybox ----
Fancybox.bind('[data-fancybox]', {
    contentClick: "toggleCover",
    Images: { Panzoom: { maxScale: 2 } },
    Thumbs: { type: "classic" },
    Toolbar: { display: { left: [], middle: ["prev", "infobar", "next"], right: ["close"] } },
});

// ---- Filter ----
document.querySelectorAll('.fltr-controls').forEach(function(btn) {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.fltr-controls').forEach(function(b) { b.classList.remove('active'); });
        this.classList.add('active');
        var filter = this.dataset.filter;
        document.querySelectorAll('#projectsGrid .project-card').forEach(function(card) {
            if (filter === 'all') {
                card.classList.remove('hidden');
            } else {
                var cats = card.dataset.category.split(',').map(function(c) { return c.trim(); });
                card.classList.toggle('hidden', !cats.includes(filter));
            }
        });
    });
});

// ---- Mobile Menu ----
var menuBtn   = document.getElementById('mobileMenuBtn');
var drawer    = document.getElementById('mobileDrawer');
var closeBtn  = document.getElementById('drawerClose');
var backdrop  = document.getElementById('drawerBackdrop');

if (menuBtn) {
    menuBtn.addEventListener('click', function() { drawer.classList.add('open'); });
    closeBtn.addEventListener('click', function() { drawer.classList.remove('open'); });
    backdrop.addEventListener('click', function() { drawer.classList.remove('open'); });
}

// ---- Smooth scroll + close drawer ----
document.querySelectorAll('a[href^="#"]').forEach(function(link) {
    link.addEventListener('click', function(e) {
        var target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            drawer.classList.remove('open');
        }
    });
});

// ---- Sidebar active state on scroll ----
var sections = document.querySelectorAll('section[id]');
var navLinks  = document.querySelectorAll('.sidebar-nav a');
window.addEventListener('scroll', function() {
    var scrollPos = window.scrollY + 120;
    sections.forEach(function(sec) {
        if (sec.offsetTop <= scrollPos && (sec.offsetTop + sec.offsetHeight) > scrollPos) {
            navLinks.forEach(function(a) { a.classList.remove('active'); });
            var active = document.querySelector('.sidebar-nav a[href="#' + sec.id + '"]');
            if (active) active.classList.add('active');
        }
    });
});
</script>
</body>
</html>
