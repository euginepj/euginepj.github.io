<?php
// ---- DATA ----
$person = (object)[
    'name'    => 'Eugine Joseph',
    'phone'   => '0566275294',
    'email'   => 'euginepj@yahoo.com',
    'title'   => 'Senior Full Stack Developer & SEO Specialist',
    'country' => 'Dubai, UAE',
    'bio'     => 'Architecting high-performance web solutions with over a decade of expertise across PHP, Laravel, WordPress, and SEO. Delivering pixel-perfect user experiences and secure, scalable backends for enterprise clients.',
    'social'  => [
        'linkedin-in'  => 'https://www.linkedin.com/in/eugine-p-j-67ab6719/',
        'github'       => 'https://github.com/euginepj',
        'twitter'      => 'https://twitter.com/euginepj',
        'stack-overflow' => 'https://stackoverflow.com/users/1587049/eugine-joseph',
    ]
];

$skills = [
    'PHP / Laravel' => 'Enterprise web apps, API design, robust backends, and performance tuning.',
    'MySQL / PostgreSQL' => 'Relational database architecture, query optimization, indexing, and complex schemas.',
    'WordPress / CMS' => 'Custom plugin/theme development, Gutenberg building, headless setups, and multisite.',
    'Tailwind CSS' => 'Highly customized utility-first design systems, animations, and fluid layouts.',
    'Bootstrap' => 'Rapid responsive development, grid layouts, and legacy codebase migrations.',
    'JavaScript / jQuery' => 'Vanilla ES6+ interactivity, async operations, state handling, and custom plugins.',
    'Node.js' => 'Backend script automation, tooling configurations, and real-time utilities.',
    'Payment Gateways' => 'Amazon Payment Services (APS), Amazon Pay, PayPal, Stripe integrations.',
    'HTML5 / CSS3' => 'Semantic layouts, CSS grid/flexbox systems, responsive fluid systems, and transitions.',
    'On-Page SEO' => 'Schema markup, semantic hierarchies, meta structures, indexability audits, and keyword strategy.',
    'CodeIgniter' => 'Lightweight MVC application architecture, custom tool builds, and API integrations.',
    'GitHub / Git' => 'Branching strategies, action workflows, release management, and collaborative code reviews.',
];

$works = [
    ["name"=>"Promotion Pages", "img"=>"promotions-img-1.webp", "cat"=>"tw,la", "href"=>"https://promotions.leosdevelopments.com/knightsbridge-brown/", "year"=>"2024", "stack"=>["Laravel","Tailwind","SEO"], "desc"=>"Custom high-performance marketing landing pages engineered for high lead-conversion ratios."],
    ["name"=>"Central Pacific One","img"=>"img-cpo-1.png", "cat"=>"tw,la", "href"=>"https://centralpacificone.com/", "year"=>"2024", "stack"=>["Laravel","Tailwind","SEO"], "desc"=>"A robust real estate investment framework built on Laravel with an integrated CMS engine.", "other_imgs"=>["img-cpo-2.png","img-cpo-3.png","img-cpo-4.png","img-cpo-5.png"]],
    ["name"=>"Design LUD", "img"=>"img-lud-01.png", "cat"=>"wp", "href"=>"https://designlud.com/", "year"=>"2024", "stack"=>["WordPress","SEO"], "desc"=>"High-end architecture & interior design portfolio site featuring interactive galleries.", "other_imgs"=>["img-lud-02.png","img-lud-03.png"]],
    ["name"=>"Nursery", "img"=>"img-nursery.png", "cat"=>"bt,ci", "href"=>"http://falconcitynursery.ae", "year"=>"2021", "stack"=>["Bootstrap","CodeIgniter"], "desc"=>"Interactive, secure portal for educational nursery facilities managing admissions."],
    ["name"=>"Falconcity Markets", "img"=>"img-markets.png", "cat"=>"bt,php", "href"=>"http://falconcitymarkets.ae/", "year"=>"2020", "stack"=>["Bootstrap","PHP"], "desc"=>"Custom community retail market portal serving directory and promotions data."],
    ["name"=>"Falconcity Markets Sub-pages", "img"=>"img-markets-1.png", "cat"=>"bt,php", "href"=>"fcw-market-ug", "year"=>"2020", "stack"=>["Bootstrap","PHP"], "desc"=>"Internal database management and reporting sub-pages for market operations."],
    ["name"=>"Alco", "img"=>"img-alco.png", "cat"=>"bt", "href"=>"https://web.archive.org/web/20220407220859/http://www.alco-plant-hire.com/index.php", "year"=>"2020", "stack"=>["Bootstrap","HTML/CSS"], "desc"=>"Legacy site migration and conversion optimization for heavy machinery plant rental services."],
    ["name"=>"Panworld Travels", "img"=>"img-panworld.png", "cat"=>"bt,wp", "href"=>"http://panworldtravels.com/", "year"=>"2019", "stack"=>["WordPress","Bootstrap"], "desc"=>"Dynamic corporate travel bookings and custom holiday packages catalog system."],
    ["name"=>"DIRP", "img"=>"img-dirp.png", "cat"=>"bt,php", "href"=>"http://dirp.ae/", "year"=>"2019", "stack"=>["Bootstrap","PHP"], "desc"=>"Government compliance and document tracking portal built with clean PHP backend modules."],
    ["name"=>"Registration", "img"=>"img-registration.png", "cat"=>"bt,ci", "href"=>"#", "year"=>"2019", "stack"=>["Bootstrap","CodeIgniter"], "desc"=>"Custom user registration system integrated with a barcode scanning validation utility."],
    ["name"=>"A and A Cargo", "img"=>"img-aandacargo.png", "cat"=>"bt,php", "href"=>"#", "year"=>"2019", "stack"=>["Bootstrap","PHP"], "desc"=>"Logistics operations and quote computation application for international air/sea freight."],
    ["name"=>"AOAMS", "img"=>"img-aoams.png", "cat"=>"bt,php", "href"=>"http://almoosa-oam.com/", "year"=>"2018", "stack"=>["Bootstrap","PHP"], "desc"=>"Owner Association Management Portal displaying compliance docs, notices, and billing."],
    ["name"=>"CMC", "img"=>"img-cmc.png", "cat"=>"bt,php", "href"=>"http://cmc-uae.ae", "year"=>"2018", "stack"=>["Bootstrap","PHP"], "desc"=>"Corporate management portal for facilities, showcasing service offerings and locations."]
];

$companies = [
    [
        'title' => 'Senior Full Stack Web Developer & SEO Specialist',
        'name'  => 'LEOS International Group, Dubai',
        'time'  => 'Jan 2024 — Present',
        'tasks' => [
            "Optimized and customized a website to win the <b>'Best Developer Website' Award</b> at the <i>Dubai Property Awards 2024–2025</i>.",
            "Boosted <b>Google PageSpeed score to 95+</b> through performance optimizations, database tuning, and asset compression.",
            "Implemented <b>Amazon Pay and APS payment gateways</b>, enabling seamless and secure real estate reservation transactions.",
            "Built <b>SEO-optimized websites</b> (e.g., <i>Central Pacific One, DesignLUD</i>), ranking target terms on Google Page 1.",
            "Managed <b>server infrastructure, security, and uptime (99.9%)</b> for all LEOS Developments web assets.",
        ]
    ],
    [
        'title' => 'Full Stack Developer',
        'name'  => 'Falconcity of Wonders, Dubai',
        'time'  => 'Jan 2018 — Dec 2023',
        'tasks' => [
            "Developed <b>SEO-optimized corporate websites</b> with on-page best practices to maximize organic reach.",
            "Built custom in-house applications using <b>Laravel</b>: HRMS, Document Management, IT Management, DocSign, Tax Allocation, Archive System.",
            "Built corporate websites for Almoosa Group using <b>WordPress, Core PHP, and CodeIgniter</b>.",
            "Created responsive <b>email newsletters</b>, deployed via SendGrid for high-impact marketing campaigns.",
            "Collaborated cross-functionally with marketing, design, and operations teams to execute digital roadmaps.",
        ]
    ],
    [
        'title' => 'Full Stack Developer',
        'name'  => 'Menora Software, India',
        'time'  => 'Feb 2017 — Dec 2017',
        'tasks' => [
            "Successfully developed a <b>cloud-based CRM system using Zend Framework</b>, streamlining core business operations.",
            "Performed code reviews, debugged complex issues, and optimized legacy code for speed and security.",
            "Built <b>responsive websites from Figma/Photoshop mockups</b> ensuring pixel-perfect layout fidelity.",
        ]
    ],
    [
        'title' => 'Full Stack Developer',
        'name'  => 'Jwimps Innovations, India',
        'time'  => 'Jan 2015 — Jan 2017',
        'tasks' => [
            "Developed <b>jwimps.com</b> — a complex eBay-style e-commerce platform enabling shops to host and sell products online.",
            "Built and launched production sites: WordPress (<b>q8malayali.com</b>), CodeIgniter (<b>tourorganiserindia.in</b>), Magento (<b>citydamsel.com</b>).",
            "Specialized in <b>full-cycle website development</b> from database schema design to server deployment.",
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Eugine Joseph — Senior Full Stack Developer & SEO Specialist</title>
    <meta name="description" content="Senior Full Stack Web Developer & SEO Specialist in Dubai. Specialize in PHP, Laravel, WordPress, custom database architectures, and extreme speed optimization."/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>

    <!-- External Styles -->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

    <style>
        /* ===== COLOR SYSTEM & TOKENS ===== */
        :root {
            --bg-base: #050505;
            --bg-surface: #0c0c0c;
            --bg-surface-elevated: #141414;
            
            --border-muted: #1a1a1a;
            --border-active: #2a2a2a;
            
            --text-primary: #f5f5f5;
            --text-secondary: #a3a3a3;
            --text-muted: #626262;
            
            --accent: #F97316; /* Premium Agency Orange */
            --accent-hover: #ea580c;
            --accent-glow: rgba(249, 115, 22, 0.15);
            
            --sidebar-width: 320px;
            --transition-smooth: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* ===== RESET & ROOT STYLES ===== */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        html {
            scroll-behavior: smooth;
            font-size: 16px;
            background-color: var(--bg-base);
        }
        
        body {
            background-color: var(--bg-base);
            color: var(--text-primary);
            font-family: 'Outfit', sans-serif;
            font-weight: 400;
            line-height: 1.7;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            transition: var(--transition-smooth);
        }

        /* ===== CUSTOM SCROLLBAR ===== */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: var(--bg-base);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--border-active);
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent);
        }

        /* ===== TYPOGRAPHY ===== */
        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif;
            color: var(--text-primary);
            line-height: 1.2;
        }
        
        p {
            font-size: 0.95rem;
            color: var(--text-secondary);
        }
        
        a {
            color: inherit;
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .eyebrow {
            font-family: 'Outfit', sans-serif;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--accent);
            display: inline-block;
            margin-bottom: 0.75rem;
        }

        /* ===== LAYOUT WRAPPER ===== */
        .site-container {
            display: flex;
            min-height: 100vh;
            position: relative;
            transition: var(--transition-smooth);
        }

        /* ===== STICKY SIDEBAR ===== */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--bg-surface);
            border-right: 1px solid var(--border-muted);
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            padding: 3rem 2.25rem;
            gap: 2.5rem;
            z-index: 100;
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* Collapsed Sidebar State */
        body.sidebar-collapsed .sidebar {
            transform: translateX(-100%);
        }

        /* ===== MAIN CONTAINER ===== */
        .main-content {
            margin-left: var(--sidebar-width);
            flex: 1;
            padding: 5rem 4.5rem;
            display: flex;
            flex-direction: column;
            gap: 7.5rem;
            min-height: 100vh;
            max-width: 1400px;
            transition: var(--transition-smooth);
        }

        body.sidebar-collapsed .main-content {
            margin-left: 0;
            max-width: 1600px;
        }

        /* ===== SIDEBAR TOGGLE BUTTON ===== */
        .sidebar-toggle-btn {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 50px;
            height: 50px;
            background: var(--bg-surface-elevated);
            border: 1px solid var(--border-active);
            color: var(--text-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 250;
            box-shadow: 0 4px 20px rgba(0,0,0,0.5);
            transition: var(--transition-smooth);
        }
        .sidebar-toggle-btn:hover {
            border-color: var(--accent);
            color: var(--accent);
            box-shadow: 0 4px 20px var(--accent-glow);
        }
        .sidebar-toggle-btn span {
            font-size: 24px;
        }

        /* ===== SIDEBAR MODULES ===== */
        .sidebar-profile {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .sidebar-avatar-wrapper {
            position: relative;
            width: 120px;
            height: 120px;
            border-radius: 0px; /* Square profile image */
            overflow: hidden;
            border: 2px solid var(--border-active);
            transition: var(--transition-smooth);
        }
        
        .sidebar-avatar-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: grayscale(1);
            transition: var(--transition-smooth);
        }
        
        .sidebar-avatar-wrapper:hover {
            border-color: var(--accent);
            box-shadow: 0 0 20px var(--accent-glow);
        }
        
        .sidebar-avatar-wrapper:hover img {
            filter: grayscale(0);
            transform: scale(1.05);
        }

        .sidebar-info-header h1 {
            font-size: 2.2rem;
            font-weight: 800;
            letter-spacing: -0.02em;
            line-height: 1.05;
        }
        
        .sidebar-info-header p {
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--accent);
            margin-top: 0.5rem;
        }

        /* Sidebar navigation */
        .sidebar-nav {
            display: flex;
            flex-direction: column;
            border-top: 1px solid var(--border-muted);
            padding-top: 2rem;
        }
        
        .sidebar-nav a {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--text-muted);
            position: relative;
        }
        
        .sidebar-nav a::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--accent);
            transition: var(--transition-smooth);
        }
        
        .sidebar-nav a:hover {
            color: var(--text-primary);
        }
        
        .sidebar-nav a.active {
            color: var(--accent);
        }
        .sidebar-nav a.active::before {
            width: 100%;
        }
        
        .sidebar-nav a span.material-symbols-outlined {
            font-size: 16px;
            opacity: 0;
            transform: translateX(-10px);
            transition: var(--transition-smooth);
            color: var(--accent);
        }
        .sidebar-nav a:hover span.material-symbols-outlined,
        .sidebar-nav a.active span.material-symbols-outlined {
            opacity: 1;
            transform: translateX(0);
        }

        .sidebar-meta-block {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        
        .sidebar-meta-title {
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--text-muted);
            border-bottom: 1px solid var(--border-muted);
            padding-bottom: 0.5rem;
            margin-bottom: 0.25rem;
        }

        /* Sidebar contact and socials */
        .sidebar-contact-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.85rem;
            color: var(--text-secondary);
        }
        .sidebar-contact-link:hover {
            color: var(--accent);
        }
        .sidebar-contact-link i {
            color: var(--text-muted);
            font-size: 0.8rem;
            width: 16px;
            text-align: center;
        }

        .sidebar-social-row {
            display: flex;
            gap: 1.2rem;
            margin-top: 0.5rem;
        }
        .sidebar-social-row a {
            font-size: 1rem;
            color: var(--text-muted);
        }
        .sidebar-social-row a:hover {
            color: var(--accent);
            transform: translateY(-2px);
        }

        /* Sidebar CV download button */
        .sidebar-cv-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            background: transparent;
            border: 1px solid var(--border-active);
            color: var(--text-primary);
            padding: 0.85rem 1.5rem;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            transition: var(--transition-smooth);
            cursor: pointer;
            margin-top: auto;
        }
        .sidebar-cv-btn:hover {
            background: var(--accent);
            border-color: var(--accent);
            color: #fff;
            box-shadow: 0 5px 15px var(--accent-glow);
        }

        /* ===== HERO SECTION ===== */
        .hero-section {
            display: flex;
            flex-direction: column;
            gap: 3rem;
            padding-top: 2rem;
        }
        
        .hero-text-block {
            max-width: 800px;
        }
        
        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            letter-spacing: -0.03em;
            line-height: 1.1;
            margin-bottom: 1.5rem;
        }
        .hero-title span {
            color: var(--accent);
            font-family: inherit;
        }
        
        .hero-lead {
            font-size: 1.2rem;
            color: var(--text-secondary);
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .hero-ctas {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            background: var(--accent);
            border: 1px solid var(--accent);
            color: #fff;
            padding: 0.95rem 1.75rem;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            transition: var(--transition-smooth);
            box-shadow: 0 5px 15px var(--accent-glow);
        }
        .btn-primary:hover {
            background: var(--accent-hover);
            border-color: var(--accent-hover);
            transform: translateY(-2px);
        }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            background: transparent;
            border: 1px solid var(--border-active);
            color: var(--text-primary);
            padding: 0.95rem 1.75rem;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            transition: var(--transition-smooth);
        }
        .btn-secondary:hover {
            border-color: var(--accent);
            color: var(--accent);
            transform: translateY(-2px);
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            border-top: 1px solid var(--border-muted);
            border-bottom: 1px solid var(--border-muted);
            padding: 2rem 0;
            max-width: 900px;
        }
        
        .stat-item {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--text-primary);
            line-height: 1;
            font-family: 'Outfit', sans-serif;
        }
        .stat-number span {
            color: var(--accent);
        }
        
        .stat-label {
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--text-muted);
        }

        /* ===== CREDIBILITY LOGO CLOUD ===== */
        .logo-cloud-section {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .logo-cloud-title {
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--text-muted);
        }
        
        .logo-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }
        
        .logo-item {
            background: var(--bg-surface);
            border: 1px solid var(--border-muted);
            padding: 1.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Playfair Display', serif;
            font-size: 0.95rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: var(--text-muted);
            transition: var(--transition-smooth);
        }
        .logo-item:hover {
            border-color: var(--border-active);
            color: var(--accent);
            box-shadow: inset 0 0 15px rgba(249, 115, 22, 0.03);
        }

        /* ===== SECTION HEADER SYSTEM ===== */
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            border-bottom: 1px solid var(--border-muted);
            padding-bottom: 1.5rem;
            margin-bottom: 3.5rem;
            flex-wrap: wrap;
            gap: 1.5rem;
        }
        
        .section-header-title {
            font-size: 2.75rem;
            font-weight: 800;
            letter-spacing: -0.02em;
        }
        
        /* Filter controls */
        .filter-tabs {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }
        
        .filter-tab {
            font-family: 'Outfit', sans-serif;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--text-secondary);
            background: var(--bg-surface);
            border: 1px solid var(--border-muted);
            padding: 0.5rem 1.15rem;
            cursor: pointer;
            transition: var(--transition-smooth);
        }
        .filter-tab:hover {
            border-color: var(--border-active);
            color: var(--text-primary);
        }
        .filter-tab.active {
            background: var(--accent);
            border-color: var(--accent);
            color: #fff;
            box-shadow: 0 4px 10px var(--accent-glow);
        }

        /* ===== FEATURED PROJECTS REDESIGN ===== */
        .projects-wrapper {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 column layout */
            gap: 2rem;
        }
        
        .project-card {
            background: var(--bg-surface);
            border: 1px solid var(--border-muted);
            display: flex;
            flex-direction: column;
            position: relative;
            transition: var(--transition-smooth);
            overflow: hidden;
        }
        
        .project-card:hover {
            border-color: var(--border-active);
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }
        
        .project-card.hidden {
            display: none;
        }
        
        .project-media-box {
            position: relative;
            aspect-ratio: 16/11;
            overflow: hidden;
            background: #111;
        }
        
        .project-media-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top; /* Show top part of image */
            filter: brightness(0.6) grayscale(0.2);
            transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1),
                        filter 0.5s var(--transition-smooth);
            display: block;
        }
        
        .project-card:hover .project-media-box img {
            transform: scale(1.05);
            filter: brightness(1) grayscale(0);
        }
        
        .project-media-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0) 100%);
            display: flex;
            align-items: flex-end;
            padding: 1.5rem;
            opacity: 1;
            transition: var(--transition-smooth);
        }
        
        .project-click-indicator {
            position: absolute;
            top: 1.25rem;
            right: 1.25rem;
            width: 40px;
            height: 40px;
            background: rgba(0,0,0,0.6);
            border: 1px solid var(--border-active);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            opacity: 0;
            transform: scale(0.8);
            transition: var(--transition-smooth);
        }
        .project-card:hover .project-click-indicator {
            opacity: 1;
            transform: scale(1);
        }
        .project-click-indicator span {
            font-size: 18px;
        }

        .project-card-details {
            padding: 1.75rem 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            flex: 1;
        }
        
        .project-meta-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .project-card-year {
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--accent);
        }
        
        .project-card-title {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--text-primary);
        }
        
        .project-card-desc {
            font-size: 0.88rem;
            color: var(--text-secondary);
            line-height: 1.6;
        }

        .project-tech-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 0.4rem;
        }
        
        .project-tech-badge {
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: var(--text-secondary);
            background: var(--bg-surface-elevated);
            border: 1px solid var(--border-muted);
            padding: 0.25rem 0.6rem;
        }

        .project-action-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid var(--border-muted);
            padding-top: 1rem;
            margin-top: auto;
        }
        
        .project-action-link {
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-primary);
        }
        .project-action-link:hover {
            color: var(--accent);
        }
        .project-action-link span {
            font-size: 16px;
            transition: var(--transition-smooth);
        }
        .project-action-link:hover span {
            transform: translate(3px, -3px);
        }

        /* ===== WORKFLOW PROCESS SECTION ===== */
        .process-section {
            display: flex;
            flex-direction: column;
        }
        
        .process-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }
        
        .process-card {
            background: var(--bg-surface);
            border: 1px solid var(--border-muted);
            padding: 2.5rem 2rem;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            position: relative;
            transition: var(--transition-smooth);
        }
        
        .process-card:hover {
            border-color: var(--border-active);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
        
        .process-step-num {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--border-active);
            line-height: 1;
            font-family: 'Outfit', sans-serif;
            transition: var(--transition-smooth);
        }
        .process-card:hover .process-step-num {
            color: var(--accent);
        }
        
        .process-card-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--text-primary);
            font-family: 'Outfit', sans-serif;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .process-card-desc {
            font-size: 0.88rem;
            color: var(--text-secondary);
            line-height: 1.6;
        }

        /* ===== DEDICATED SKILLS GRID ===== */
        .tech-section {
            display: flex;
            flex-direction: column;
        }
        
        .tech-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }
        
        .tech-card {
            background: var(--bg-surface);
            border: 1px solid var(--border-muted);
            padding: 2rem 1.75rem;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            transition: var(--transition-smooth);
        }
        
        .tech-card:hover {
            border-color: var(--border-active);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .tech-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .tech-card-title {
            font-family: 'Outfit', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-primary);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .tech-card-dot {
            width: 6px;
            height: 6px;
            background: var(--border-active);
            border-radius: 50%;
            transition: var(--transition-smooth);
        }
        .tech-card:hover .tech-card-dot {
            background: var(--accent);
            box-shadow: 0 0 8px var(--accent);
        }
        
        .tech-card-desc {
            font-size: 0.82rem;
            color: var(--text-secondary);
            line-height: 1.6;
        }

        /* ===== EXPERIENCE TIMELINE ===== */
        .experience-list {
            display: flex;
            flex-direction: column;
        }
        
        .exp-item {
            display: grid;
            grid-template-columns: 200px 50px 1fr;
            border-bottom: 1px solid var(--border-muted);
            padding: 3rem 0;
            gap: 0;
            position: relative;
        }
        .exp-item:first-child { padding-top: 0; }
        
        .exp-date {
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 0.05em;
            color: var(--text-secondary);
            font-family: 'Outfit', sans-serif;
            padding-right: 1.5rem;
            line-height: 1.4;
        }
        
        .exp-line {
            display: flex;
            justify-content: center;
            position: relative;
        }
        .exp-line::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 1px;
            background: var(--border-muted);
        }
        .exp-dot-indicator {
            width: 10px;
            height: 10px;
            background: var(--bg-base);
            border: 2px solid var(--border-active);
            position: relative;
            z-index: 1;
            margin-top: 0.25rem;
            transition: var(--transition-smooth);
            border-radius: 50%;
        }
        .exp-item:hover .exp-dot-indicator {
            border-color: var(--accent);
            background: var(--accent);
            box-shadow: 0 0 10px var(--accent);
            transform: scale(1.3);
        }
        
        .exp-body {
            padding-left: 2rem;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }
        
        .exp-meta {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }
        
        .exp-title {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--text-primary);
        }
        
        .exp-company {
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--accent);
            font-family: 'Outfit', sans-serif;
        }
        
        .exp-tasks {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            padding-left: 1.25rem;
            border-left: 1px solid var(--border-muted);
        }
        .exp-tasks li {
            font-size: 0.92rem;
            color: var(--text-secondary);
            line-height: 1.75;
        }
        .exp-tasks b {
            color: var(--text-primary);
            font-weight: 600;
        }
        .exp-tasks i {
            color: var(--text-secondary);
        }

        /* ===== CONTACT FORM & LAYOUT ===== */
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 4rem;
        }
        
        .contact-info-column {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }
        
        .contact-text-block p {
            margin-bottom: 2rem;
        }
        
        .contact-card-list {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }
        
        .contact-card {
            background: var(--bg-surface);
            border: 1px solid var(--border-muted);
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1.25rem;
            transition: var(--transition-smooth);
        }
        .contact-card:hover {
            border-color: var(--border-active);
        }
        
        .contact-card-icon {
            width: 48px;
            height: 48px;
            background: var(--bg-surface-elevated);
            border: 1px solid var(--border-muted);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent);
            font-size: 1.2rem;
        }
        
        .contact-card-details {
            display: flex;
            flex-direction: column;
            gap: 0.15rem;
        }
        .contact-card-details label {
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--text-muted);
        }
        .contact-card-details a, .contact-card-details span {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-primary);
        }
        .contact-card-details a:hover {
            color: var(--accent);
        }

        /* Form styling */
        .contact-form {
            background: var(--bg-surface);
            border: 1px solid var(--border-muted);
            padding: 3rem 2.5rem;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .form-group label {
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--text-secondary);
        }
        
        .form-control {
            background: var(--bg-surface-elevated);
            border: 1px solid var(--border-muted);
            color: var(--text-primary);
            padding: 0.85rem 1.25rem;
            font-family: 'Outfit', sans-serif;
            font-size: 0.9rem;
            transition: var(--transition-smooth);
            width: 100%;
        }
        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 10px var(--accent-glow);
        }
        
        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        /* ===== FOOTER ===== */
        .site-footer {
            margin-left: var(--sidebar-width);
            padding: 2.5rem 4.5rem;
            border-top: 1px solid var(--border-muted);
            background: var(--bg-surface);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1.5rem;
            transition: var(--transition-smooth);
        }
        
        body.sidebar-collapsed .site-footer {
            margin-left: 0;
        }
        
        .site-footer p {
            font-size: 0.8rem;
            color: var(--text-muted);
        }
        
        .footer-links {
            display: flex;
            gap: 2rem;
        }
        .footer-links a {
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: var(--text-muted);
        }
        .footer-links a:hover {
            color: var(--accent);
        }

        /* ===== MOBILE STYLING ===== */
        .mobile-header {
            display: none;
            position: sticky;
            top: 0;
            z-index: 200;
            background: var(--bg-surface);
            border-bottom: 1px solid var(--border-muted);
            padding: 1.25rem 1.5rem;
            justify-content: space-between;
            align-items: center;
        }
        
        .mobile-header-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.25rem;
            font-weight: 800;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: #fff;
        }
        
        .mobile-header-menu-btn {
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-primary);
            padding: 0.25rem;
        }
        .mobile-header-menu-btn span {
            font-size: 1.75rem;
        }

        /* Mobile Drawer Panel */
        .mobile-drawer-overlay {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 300;
        }
        .mobile-drawer-overlay.open {
            display: block;
        }
        
        .mobile-drawer-backdrop {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(5px);
        }
        
        .mobile-drawer-panel {
            position: absolute;
            top: 0;
            left: 0;
            width: 300px;
            height: 100%;
            background: var(--bg-surface);
            border-right: 1px solid var(--border-muted);
            padding: 2.5rem 2rem;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
            box-shadow: 10px 0 30px rgba(0,0,0,0.5);
        }
        
        .mobile-drawer-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .mobile-drawer-close-btn {
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-primary);
        }
        .mobile-drawer-close-btn span {
            font-size: 1.75rem;
        }
        
        .mobile-nav-menu {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }
        .mobile-nav-menu a {
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: var(--text-secondary);
        }
        .mobile-nav-menu a.active {
            color: var(--accent);
        }

        /* ===== RESPONSIVE MEDIA QUERIES ===== */
        @media (max-width: 1300px) {
            .projects-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 1200px) {
            .main-content {
                padding: 4rem 3rem;
            }
            .tech-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .process-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 1024px) {
            .sidebar {
                display: none;
            }
            .sidebar-toggle-btn {
                display: none;
            }
            .mobile-header {
                display: flex;
            }
            .main-content {
                margin-left: 0;
                padding: 4rem 2rem;
                gap: 5.5rem;
            }
            .site-footer {
                margin-left: 0;
                padding: 2rem;
            }
            .logo-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .projects-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.75rem;
            }
            .section-header-title {
                font-size: 2.2rem;
            }
            .projects-grid {
                grid-template-columns: 1fr;
            }
            .process-grid {
                grid-template-columns: 1fr;
            }
            .tech-grid {
                grid-template-columns: 1fr;
            }
            .exp-item {
                grid-template-columns: 1fr;
                gap: 1rem;
                padding: 2.5rem 0;
            }
            .exp-line {
                display: none;
            }
            .exp-body {
                padding-left: 0;
            }
            .contact-container {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
            .form-row {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }
    </style>
</head>

<body>

    <!-- ===== MOBILE HEADER ===== -->
    <header class="mobile-header">
        <div class="mobile-header-logo">Eugine Joseph</div>
        <button class="mobile-header-menu-btn" id="mobileMenuBtn" aria-label="Open Navigation Drawer">
            <span class="material-symbols-outlined">menu</span>
        </button>
    </header>

    <!-- ===== MOBILE DRAWER ===== -->
    <div class="mobile-drawer-overlay" id="mobileDrawer">
        <div class="mobile-drawer-backdrop" id="mobileDrawerBackdrop"></div>
        <div class="mobile-drawer-panel">
            <div class="mobile-drawer-header">
                <span class="eyebrow" style="margin-bottom:0;">Navigation</span>
                <button class="mobile-drawer-close-btn" id="mobileDrawerClose" aria-label="Close Navigation Drawer">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <nav class="mobile-nav-menu">
                <a href="#hero" class="active">Overview</a>
                <a href="#projects">Featured Work</a>
                <a href="#process">My Process</a>
                <a href="#tech">Technologies</a>
                <a href="#experience">Experience</a>
                <a href="#contact">Contact</a>
            </nav>
            <a href="Full-Stack-Developer-Eugine-Joseph-2025-1.pdf" class="sidebar-cv-btn">
                <span class="material-symbols-outlined">download</span> Download CV
            </a>
        </div>
    </div>

    <!-- ===== SIDEBAR TOGGLE BUTTON (DESKTOP) ===== -->
    <button class="sidebar-toggle-btn" id="sidebarToggleBtn" aria-label="Toggle Sidebar Menu" title="Toggle Sidebar">
        <span class="material-symbols-outlined" id="sidebarToggleIcon">menu_open</span>
    </button>

    <!-- ===== SITE WRAPPER ===== -->
    <div class="site-container">

        <!-- ===== STICKY SIDEBAR ===== -->
        <aside class="sidebar">
            <div class="sidebar-profile">
                <div class="sidebar-avatar-wrapper">
                    <img src="https://avatars0.githubusercontent.com/u/5563836?s=400&v=4" alt="Eugine Joseph - Senior Full Stack Developer"/>
                </div>
                
                <div class="sidebar-info-header">
                    <h1>EUGINE<br/>JOSEPH</h1>
                    <p>Senior Developer</p>
                </div>
            </div>

            <nav class="sidebar-nav" id="sidebarNav">
                <a href="#hero" class="active">
                    <span>Overview</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
                <a href="#projects">
                    <span>Featured Work</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
                <a href="#process">
                    <span>My Process</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
                <a href="#tech">
                    <span>Technologies</span>
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

            <div class="sidebar-meta-block">
                <span class="sidebar-meta-title">Get In Touch</span>
                <a href="mailto:euginepj@yahoo.com" class="sidebar-contact-link">
                    <i class="fas fa-envelope"></i> euginepj@yahoo.com
                </a>
                <a href="tel:+9710566275294" class="sidebar-contact-link">
                    <i class="fas fa-phone"></i> 0566275294
                </a>
                <div class="sidebar-contact-link">
                    <i class="fas fa-map-marker-alt"></i> Dubai, UAE
                </div>
                <div class="sidebar-social-row">
                    <a href="https://www.linkedin.com/in/eugine-p-j-67ab6719/" target="_blank" rel="noopener" title="Linkedin-in">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/euginepj" target="_blank" rel="noopener" title="Github">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://twitter.com/euginepj" target="_blank" rel="noopener" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://stackoverflow.com/users/1587049/eugine-joseph" target="_blank" rel="noopener" title="Stack-overflow">
                        <i class="fab fa-stack-overflow"></i>
                    </a>
                </div>
            </div>

            <a href="Full-Stack-Developer-Eugine-Joseph-2025-1.pdf" class="sidebar-cv-btn">
                <span class="material-symbols-outlined">download</span> Download CV
            </a>
        </aside>

        <!-- ===== MAIN CONTENT AREA ===== -->
        <main class="main-content">

            <!-- ====== HERO SECTION ====== -->
            <section id="hero" class="hero-section">
                <div class="hero-text-block">
                    <span class="eyebrow">Senior Full Stack Web Developer</span>
                    <h2 class="hero-title">Architecting high-performance <span>web solutions</span> with Dubai's leading agencies.</h2>
                    <p class="hero-lead">I engineer robust database systems, build pixel-perfect interactive frontends, and implement extreme search engine optimization that converts visitors into enterprise results.</p>
                    <div class="hero-ctas">
                        <a href="#projects" class="btn-primary">View My Work <span class="material-symbols-outlined">arrow_downward</span></a>
                        <a href="Full-Stack-Developer-Eugine-Joseph-2025-1.pdf" class="btn-secondary">Download CV <span class="material-symbols-outlined">download</span></a>
                    </div>
                </div>

                <div class="stats-grid">
                    <div class="stat-item">
                        <span class="stat-number">10<span>+</span></span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">50<span>+</span></span>
                        <span class="stat-label">Projects Completed</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">95<span>%</span></span>
                        <span class="stat-label">Avg. PageSpeed Score</span>
                    </div>
                </div>
            </section>

            <!-- ====== CREDIBILITY LOGO CLOUD ====== -->
            <section class="logo-cloud-section">
                <h3 class="logo-cloud-title">Selected Companies & Clients I've Engineered For</h3>
                <div class="logo-grid">
                    <div class="logo-item">LEOS Int.</div>
                    <div class="logo-item">Falconcity</div>
                    <div class="logo-item">Menora Soft</div>
                    <div class="logo-item">Jwimps Inn.</div>
                </div>
            </section>

            <!-- ====== FEATURED PROJECTS ====== -->
            <section id="projects" class="projects-wrapper">
                <div class="section-header">
                    <h2 class="section-header-title">Featured Work</h2>
                    <div class="filter-tabs">
                        <button class="filter-tab active" data-filter="all">All</button>
                        <button class="filter-tab" data-filter="la">Laravel</button>
                        <button class="filter-tab" data-filter="wp">WordPress</button>
                        <button class="filter-tab" data-filter="php">Core PHP</button>
                        <button class="filter-tab" data-filter="ci">CodeIgniter</button>
                    </div>
                </div>

                <div class="projects-grid" id="projectsGrid">
                    
                    <article class="project-card" data-category="tw,la">
                        <div class="project-media-box">
                            <a data-fancybox="gallery_0" href="images/promotions-img-1.webp" tabindex="-1">
                                <img src="images/promotions-img-1.webp" alt="Promotion Pages Layout Overview" loading="lazy"/>
                                <div class="project-media-overlay"></div>
                                <div class="project-click-indicator">
                                    <span class="material-symbols-outlined">zoom_in</span>
                                </div>
                            </a>
                        </div>
                        <div class="project-card-details">
                            <div class="project-meta-row">
                                <span class="project-card-year">2024</span>
                                <div class="project-tech-badges">
                                    <span class="project-tech-badge">Laravel</span>
                                    <span class="project-tech-badge">Tailwind</span>
                                    <span class="project-tech-badge">SEO</span>
                                </div>
                            </div>
                            <h3 class="project-card-title">Promotion Pages</h3>
                            <p class="project-card-desc">Custom high-performance marketing landing pages engineered for high lead-conversion ratios.</p>
                            
                            <div class="project-action-bar">
                                <a href="https://promotions.leosdevelopments.com/knightsbridge-brown/" target="_blank" rel="noopener" class="project-action-link">
                                    Explore Site <span class="material-symbols-outlined">north_east</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    
                    <article class="project-card" data-category="tw,la">
                        <div class="project-media-box">
                            <a data-fancybox="gallery_1" href="images/img-cpo-1.png" tabindex="-1">
                                <img src="images/img-cpo-1.png" alt="Central Pacific One Layout Overview" loading="lazy"/>
                                <div class="project-media-overlay"></div>
                                <div class="project-click-indicator">
                                    <span class="material-symbols-outlined">zoom_in</span>
                                </div>
                            </a>
                            <a data-fancybox="gallery_1" href="images/img-cpo-2.png" style="display:none;"></a>
                            <a data-fancybox="gallery_1" href="images/img-cpo-3.png" style="display:none;"></a>
                            <a data-fancybox="gallery_1" href="images/img-cpo-4.png" style="display:none;"></a>
                            <a data-fancybox="gallery_1" href="images/img-cpo-5.png" style="display:none;"></a>
                        </div>
                        <div class="project-card-details">
                            <div class="project-meta-row">
                                <span class="project-card-year">2024</span>
                                <div class="project-tech-badges">
                                    <span class="project-tech-badge">Laravel</span>
                                    <span class="project-tech-badge">Tailwind</span>
                                    <span class="project-tech-badge">SEO</span>
                                </div>
                            </div>
                            <h3 class="project-card-title">Central Pacific One</h3>
                            <p class="project-card-desc">A robust real estate investment framework built on Laravel with an integrated CMS engine.</p>
                            
                            <div class="project-action-bar">
                                <a href="https://centralpacificone.com/" target="_blank" rel="noopener" class="project-action-link">
                                    Explore Site <span class="material-symbols-outlined">north_east</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    
                    <article class="project-card" data-category="wp">
                        <div class="project-media-box">
                            <a data-fancybox="gallery_2" href="images/img-lud-01.png" tabindex="-1">
                                <img src="images/img-lud-01.png" alt="Design LUD Layout Overview" loading="lazy"/>
                                <div class="project-media-overlay"></div>
                                <div class="project-click-indicator">
                                    <span class="material-symbols-outlined">zoom_in</span>
                                </div>
                            </a>
                            <a data-fancybox="gallery_2" href="images/img-lud-02.png" style="display:none;"></a>
                            <a data-fancybox="gallery_2" href="images/img-lud-03.png" style="display:none;"></a>
                        </div>
                        <div class="project-card-details">
                            <div class="project-meta-row">
                                <span class="project-card-year">2024</span>
                                <div class="project-tech-badges">
                                    <span class="project-tech-badge">WordPress</span>
                                    <span class="project-tech-badge">SEO</span>
                                </div>
                            </div>
                            <h3 class="project-card-title">Design LUD</h3>
                            <p class="project-card-desc">High-end architecture & interior design portfolio site featuring interactive galleries.</p>
                            
                            <div class="project-action-bar">
                                <a href="https://designlud.com/" target="_blank" rel="noopener" class="project-action-link">
                                    Explore Site <span class="material-symbols-outlined">north_east</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    
                    <article class="project-card" data-category="bt,ci">
                        <div class="project-media-box">
                            <a data-fancybox="gallery_3" href="images/img-nursery.png" tabindex="-1">
                                <img src="images/img-nursery.png" alt="Nursery Layout Overview" loading="lazy"/>
                                <div class="project-media-overlay"></div>
                                <div class="project-click-indicator">
                                    <span class="material-symbols-outlined">zoom_in</span>
                                </div>
                            </a>
                        </div>
                        <div class="project-card-details">
                            <div class="project-meta-row">
                                <span class="project-card-year">2021</span>
                                <div class="project-tech-badges">
                                    <span class="project-tech-badge">Bootstrap</span>
                                    <span class="project-tech-badge">CodeIgniter</span>
                                </div>
                            </div>
                            <h3 class="project-card-title">Nursery</h3>
                            <p class="project-card-desc">Interactive, secure portal for educational nursery facilities managing admissions.</p>
                            
                            <div class="project-action-bar">
                                <a href="http://falconcitynursery.ae" target="_blank" rel="noopener" class="project-action-link">
                                    Explore Site <span class="material-symbols-outlined">north_east</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    
                    <article class="project-card" data-category="bt,php">
                        <div class="project-media-box">
                            <a data-fancybox="gallery_4" href="images/img-markets.png" tabindex="-1">
                                <img src="images/img-markets.png" alt="Falconcity Markets Layout Overview" loading="lazy"/>
                                <div class="project-media-overlay"></div>
                                <div class="project-click-indicator">
                                    <span class="material-symbols-outlined">zoom_in</span>
                                </div>
                            </a>
                        </div>
                        <div class="project-card-details">
                            <div class="project-meta-row">
                                <span class="project-card-year">2020</span>
                                <div class="project-tech-badges">
                                    <span class="project-tech-badge">Bootstrap</span>
                                    <span class="project-tech-badge">PHP</span>
                                </div>
                            </div>
                            <h3 class="project-card-title">Falconcity Markets</h3>
                            <p class="project-card-desc">Custom community retail market portal serving directory and promotions data.</p>
                            
                            <div class="project-action-bar">
                                <a href="http://falconcitymarkets.ae/" target="_blank" rel="noopener" class="project-action-link">
                                    Explore Site <span class="material-symbols-outlined">north_east</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    
                    <article class="project-card" data-category="bt,php">
                        <div class="project-media-box">
                            <a data-fancybox="gallery_5" href="images/img-markets-1.png" tabindex="-1">
                                <img src="images/img-markets-1.png" alt="Falconcity Markets Sub-pages Layout Overview" loading="lazy"/>
                                <div class="project-media-overlay"></div>
                                <div class="project-click-indicator">
                                    <span class="material-symbols-outlined">zoom_in</span>
                                </div>
                            </a>
                        </div>
                        <div class="project-card-details">
                            <div class="project-meta-row">
                                <span class="project-card-year">2020</span>
                                <div class="project-tech-badges">
                                    <span class="project-tech-badge">Bootstrap</span>
                                    <span class="project-tech-badge">PHP</span>
                                </div>
                            </div>
                            <h3 class="project-card-title">Falconcity Markets Sub-pages</h3>
                            <p class="project-card-desc">Internal database management and reporting sub-pages for market operations.</p>
                            
                            <div class="project-action-bar">
                                <a href="fcw-market-ug" target="_blank" rel="noopener" class="project-action-link">
                                    Explore Site <span class="material-symbols-outlined">north_east</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    
                    <article class="project-card" data-category="bt">
                        <div class="project-media-box">
                            <a data-fancybox="gallery_6" href="images/img-alco.png" tabindex="-1">
                                <img src="images/img-alco.png" alt="Alco Layout Overview" loading="lazy"/>
                                <div class="project-media-overlay"></div>
                                <div class="project-click-indicator">
                                    <span class="material-symbols-outlined">zoom_in</span>
                                </div>
                            </a>
                        </div>
                        <div class="project-card-details">
                            <div class="project-meta-row">
                                <span class="project-card-year">2020</span>
                                <div class="project-tech-badges">
                                    <span class="project-tech-badge">Bootstrap</span>
                                    <span class="project-tech-badge">HTML/CSS</span>
                                </div>
                            </div>
                            <h3 class="project-card-title">Alco</h3>
                            <p class="project-card-desc">Legacy site migration and conversion optimization for heavy machinery plant rental services.</p>
                            
                            <div class="project-action-bar">
                                <a href="https://web.archive.org/web/20220407220859/http://www.alco-plant-hire.com/index.php" target="_blank" rel="noopener" class="project-action-link">
                                    Explore Site <span class="material-symbols-outlined">north_east</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    
                    <article class="project-card" data-category="bt,wp">
                        <div class="project-media-box">
                            <a data-fancybox="gallery_7" href="images/img-panworld.png" tabindex="-1">
                                <img src="images/img-panworld.png" alt="Panworld Travels Layout Overview" loading="lazy"/>
                                <div class="project-media-overlay"></div>
                                <div class="project-click-indicator">
                                    <span class="material-symbols-outlined">zoom_in</span>
                                </div>
                            </a>
                        </div>
                        <div class="project-card-details">
                            <div class="project-meta-row">
                                <span class="project-card-year">2019</span>
                                <div class="project-tech-badges">
                                    <span class="project-tech-badge">WordPress</span>
                                    <span class="project-tech-badge">Bootstrap</span>
                                </div>
                            </div>
                            <h3 class="project-card-title">Panworld Travels</h3>
                            <p class="project-card-desc">Dynamic corporate travel bookings and custom holiday packages catalog system.</p>
                            
                            <div class="project-action-bar">
                                <a href="http://panworldtravels.com/" target="_blank" rel="noopener" class="project-action-link">
                                    Explore Site <span class="material-symbols-outlined">north_east</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    
                    <article class="project-card" data-category="bt,php">
                        <div class="project-media-box">
                            <a data-fancybox="gallery_8" href="images/img-dirp.png" tabindex="-1">
                                <img src="images/img-dirp.png" alt="DIRP Layout Overview" loading="lazy"/>
                                <div class="project-media-overlay"></div>
                                <div class="project-click-indicator">
                                    <span class="material-symbols-outlined">zoom_in</span>
                                </div>
                            </a>
                        </div>
                        <div class="project-card-details">
                            <div class="project-meta-row">
                                <span class="project-card-year">2019</span>
                                <div class="project-tech-badges">
                                    <span class="project-tech-badge">Bootstrap</span>
                                    <span class="project-tech-badge">PHP</span>
                                </div>
                            </div>
                            <h3 class="project-card-title">DIRP</h3>
                            <p class="project-card-desc">Government compliance and document tracking portal built with clean PHP backend modules.</p>
                            
                            <div class="project-action-bar">
                                <a href="http://dirp.ae/" target="_blank" rel="noopener" class="project-action-link">
                                    Explore Site <span class="material-symbols-outlined">north_east</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    
                    <article class="project-card" data-category="bt,ci">
                        <div class="project-media-box">
                            <a data-fancybox="gallery_9" href="images/img-registration.png" tabindex="-1">
                                <img src="images/img-registration.png" alt="Registration Layout Overview" loading="lazy"/>
                                <div class="project-media-overlay"></div>
                                <div class="project-click-indicator">
                                    <span class="material-symbols-outlined">zoom_in</span>
                                </div>
                            </a>
                        </div>
                        <div class="project-card-details">
                            <div class="project-meta-row">
                                <span class="project-card-year">2019</span>
                                <div class="project-tech-badges">
                                    <span class="project-tech-badge">Bootstrap</span>
                                    <span class="project-tech-badge">CodeIgniter</span>
                                </div>
                            </div>
                            <h3 class="project-card-title">Registration</h3>
                            <p class="project-card-desc">Custom user registration system integrated with a barcode scanning validation utility.</p>
                            
                            <div class="project-action-bar">
                                <span class="project-action-link" style="color:var(--text-muted);cursor:default;">
                                    Enterprise System
                                </span>
                            </div>
                        </div>
                    </article>
                    
                    <article class="project-card" data-category="bt,php">
                        <div class="project-media-box">
                            <a data-fancybox="gallery_10" href="images/img-aandacargo.png" tabindex="-1">
                                <img src="images/img-aandacargo.png" alt="A and A Cargo Layout Overview" loading="lazy"/>
                                <div class="project-media-overlay"></div>
                                <div class="project-click-indicator">
                                    <span class="material-symbols-outlined">zoom_in</span>
                                </div>
                            </a>
                        </div>
                        <div class="project-card-details">
                            <div class="project-meta-row">
                                <span class="project-card-year">2019</span>
                                <div class="project-tech-badges">
                                    <span class="project-tech-badge">Bootstrap</span>
                                    <span class="project-tech-badge">PHP</span>
                                </div>
                            </div>
                            <h3 class="project-card-title">A and A Cargo</h3>
                            <p class="project-card-desc">Logistics operations and quote computation application for international air/sea freight.</p>
                            
                            <div class="project-action-bar">
                                <span class="project-action-link" style="color:var(--text-muted);cursor:default;">
                                    Enterprise System
                                </span>
                            </div>
                        </div>
                    </article>
                    
                    <article class="project-card" data-category="bt,php">
                        <div class="project-media-box">
                            <a data-fancybox="gallery_11" href="images/img-aoams.png" tabindex="-1">
                                <img src="images/img-aoams.png" alt="AOAMS Layout Overview" loading="lazy"/>
                                <div class="project-media-overlay"></div>
                                <div class="project-click-indicator">
                                    <span class="material-symbols-outlined">zoom_in</span>
                                </div>
                            </a>
                        </div>
                        <div class="project-card-details">
                            <div class="project-meta-row">
                                <span class="project-card-year">2018</span>
                                <div class="project-tech-badges">
                                    <span class="project-tech-badge">Bootstrap</span>
                                    <span class="project-tech-badge">PHP</span>
                                </div>
                            </div>
                            <h3 class="project-card-title">AOAMS</h3>
                            <p class="project-card-desc">Owner Association Management Portal displaying compliance docs, notices, and billing.</p>
                            
                            <div class="project-action-bar">
                                <a href="http://almoosa-oam.com/" target="_blank" rel="noopener" class="project-action-link">
                                    Explore Site <span class="material-symbols-outlined">north_east</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    
                    <article class="project-card" data-category="bt,php">
                        <div class="project-media-box">
                            <a data-fancybox="gallery_12" href="images/img-cmc.png" tabindex="-1">
                                <img src="images/img-cmc.png" alt="CMC Layout Overview" loading="lazy"/>
                                <div class="project-media-overlay"></div>
                                <div class="project-click-indicator">
                                    <span class="material-symbols-outlined">zoom_in</span>
                                </div>
                            </a>
                        </div>
                        <div class="project-card-details">
                            <div class="project-meta-row">
                                <span class="project-card-year">2018</span>
                                <div class="project-tech-badges">
                                    <span class="project-tech-badge">Bootstrap</span>
                                    <span class="project-tech-badge">PHP</span>
                                </div>
                            </div>
                            <h3 class="project-card-title">CMC</h3>
                            <p class="project-card-desc">Corporate management portal for facilities, showcasing service offerings and locations.</p>
                            
                            <div class="project-action-bar">
                                <a href="http://cmc-uae.ae" target="_blank" rel="noopener" class="project-action-link">
                                    Explore Site <span class="material-symbols-outlined">north_east</span>
                                </a>
                            </div>
                        </div>
                    </article>

                </div>
            </section>

            <!-- ====== WORKFLOW PROCESS ====== -->
            <section id="process" class="process-section">
                <div class="section-header">
                    <h2 class="section-header-title">My Process</h2>
                </div>
                <div class="process-grid">
                    <div class="process-card">
                        <span class="process-step-num">01</span>
                        <h3 class="process-card-title">Discovery & Audit</h3>
                        <p class="process-card-desc">Analyzing technical performance, auditing search rankings, identifying code bottlenecks, and aligning requirements with business objectives.</p>
                    </div>
                    <div class="process-card">
                        <span class="process-step-num">02</span>
                        <h3 class="process-card-title">Database & Planning</h3>
                        <p class="process-card-desc">Architecting robust schemas, modeling relationships, selecting framework structures, and designing secure application interfaces.</p>
                    </div>
                    <div class="process-card">
                        <span class="process-step-num">03</span>
                        <h3 class="process-card-title">High-Performance Dev</h3>
                        <p class="process-card-desc">Writing clean, testable backend code coupled with responsive interactive frontends structured for high efficiency and scalability.</p>
                    </div>
                    <div class="process-card">
                        <span class="process-step-num">04</span>
                        <h3 class="process-card-title">Speed & SEO Tuning</h3>
                        <p class="process-card-desc">Optimizing Core Web Vitals, implementing schema markups, caching models, and compressing assets to secure high search visibility.</p>
                    </div>
                    <div class="process-card">
                        <span class="process-step-num">05</span>
                        <h3 class="process-card-title">Testing & Deploy</h3>
                        <p class="process-card-desc">Executing end-to-end integration audits, validating security headers, and orchestrating zero-downtime deployment pipelines.</p>
                    </div>
                    <div class="process-card">
                        <span class="process-step-num">06</span>
                        <h3 class="process-card-title">Support & Scale</h3>
                        <p class="process-card-desc">Continuous server resource monitoring, regular vulnerability checks, and iterative feature deployment cycles as requirements grow.</p>
                    </div>
                </div>
            </section>

            <!-- ====== TECHNOLOGIES ====== -->
            <section id="tech" class="tech-section">
                <div class="section-header">
                    <h2 class="section-header-title">Expertise</h2>
                </div>
                <div class="tech-grid">
                    
                    <div class="tech-card">
                        <div class="tech-card-header">
                            <h3 class="tech-card-title">PHP / Laravel</h3>
                            <span class="tech-card-dot"></span>
                        </div>
                        <p class="tech-card-desc">Enterprise web apps, API design, robust backends, and performance tuning.</p>
                    </div>
                    
                    <div class="tech-card">
                        <div class="tech-card-header">
                            <h3 class="tech-card-title">MySQL / PostgreSQL</h3>
                            <span class="tech-card-dot"></span>
                        </div>
                        <p class="tech-card-desc">Relational database architecture, query optimization, indexing, and complex schemas.</p>
                    </div>
                    
                    <div class="tech-card">
                        <div class="tech-card-header">
                            <h3 class="tech-card-title">WordPress / CMS</h3>
                            <span class="tech-card-dot"></span>
                        </div>
                        <p class="tech-card-desc">Custom plugin/theme development, Gutenberg building, headless setups, and multisite.</p>
                    </div>
                    
                    <div class="tech-card">
                        <div class="tech-card-header">
                            <h3 class="tech-card-title">Tailwind CSS</h3>
                            <span class="tech-card-dot"></span>
                        </div>
                        <p class="tech-card-desc">Highly customized utility-first design systems, animations, and fluid layouts.</p>
                    </div>
                    
                    <div class="tech-card">
                        <div class="tech-card-header">
                            <h3 class="tech-card-title">Bootstrap</h3>
                            <span class="tech-card-dot"></span>
                        </div>
                        <p class="tech-card-desc">Rapid responsive development, grid layouts, and legacy codebase migrations.</p>
                    </div>
                    
                    <div class="tech-card">
                        <div class="tech-card-header">
                            <h3 class="tech-card-title">JavaScript / jQuery</h3>
                            <span class="tech-card-dot"></span>
                        </div>
                        <p class="tech-card-desc">Vanilla ES6+ interactivity, async operations, state handling, and custom plugins.</p>
                    </div>
                    
                    <div class="tech-card">
                        <div class="tech-card-header">
                            <h3 class="tech-card-title">Node.js</h3>
                            <span class="tech-card-dot"></span>
                        </div>
                        <p class="tech-card-desc">Backend script automation, tooling configurations, and real-time utilities.</p>
                    </div>
                    
                    <div class="tech-card">
                        <div class="tech-card-header">
                            <h3 class="tech-card-title">Payment Gateways</h3>
                            <span class="tech-card-dot"></span>
                        </div>
                        <p class="tech-card-desc">Amazon Payment Services (APS), Amazon Pay, PayPal, Stripe integrations.</p>
                    </div>
                    
                    <div class="tech-card">
                        <div class="tech-card-header">
                            <h3 class="tech-card-title">HTML5 / CSS3</h3>
                            <span class="tech-card-dot"></span>
                        </div>
                        <p class="tech-card-desc">Semantic layouts, CSS grid/flexbox systems, responsive fluid systems, and transitions.</p>
                    </div>
                    
                    <div class="tech-card">
                        <div class="tech-card-header">
                            <h3 class="tech-card-title">On-Page SEO</h3>
                            <span class="tech-card-dot"></span>
                        </div>
                        <p class="tech-card-desc">Schema markup, semantic hierarchies, meta structures, indexability audits, and keyword strategy.</p>
                    </div>
                    
                    <div class="tech-card">
                        <div class="tech-card-header">
                            <h3 class="tech-card-title">CodeIgniter</h3>
                            <span class="tech-card-dot"></span>
                        </div>
                        <p class="tech-card-desc">Lightweight MVC application architecture, custom tool builds, and API integrations.</p>
                    </div>
                    
                    <div class="tech-card">
                        <div class="tech-card-header">
                            <h3 class="tech-card-title">GitHub / Git</h3>
                            <span class="tech-card-dot"></span>
                        </div>
                        <p class="tech-card-desc">Branching strategies, action workflows, release management, and collaborative code reviews.</p>
                    </div>

                </div>
            </section>

            <!-- ====== EXPERIENCE ====== -->
            <section id="experience">
                <div class="section-header">
                    <h2 class="section-header-title">Experience</h2>
                </div>

                <div class="experience-list">
                    
                    <div class="exp-item">
                        <div class="exp-date">Jan 2024 — Present</div>
                        <div class="exp-line">
                            <div class="exp-dot-indicator"></div>
                        </div>
                        <div class="exp-body">
                            <div class="exp-meta">
                                <h3 class="exp-title">Senior Full Stack Web Developer & SEO Specialist</h3>
                                <h4 class="exp-company">LEOS International Group, Dubai</h4>
                            </div>
                            <ul class="exp-tasks">
                                <li>Optimized and customized a website to win the <b>'Best Developer Website' Award</b> at the <i>Dubai Property Awards 2024–2025</i>.</li>
                                <li>Boosted <b>Google PageSpeed score to 95+</b> through performance optimizations, database tuning, and asset compression.</li>
                                <li>Implemented <b>Amazon Pay and APS payment gateways</b>, enabling seamless and secure real estate reservation transactions.</li>
                                <li>Built <b>SEO-optimized websites</b> (e.g., <i>Central Pacific One, DesignLUD</i>), ranking target terms on Google Page 1.</li>
                                <li>Managed <b>server infrastructure, security, and uptime (99.9%)</b> for all LEOS Developments web assets.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="exp-item">
                        <div class="exp-date">Jan 2018 — Dec 2023</div>
                        <div class="exp-line">
                            <div class="exp-dot-indicator"></div>
                        </div>
                        <div class="exp-body">
                            <div class="exp-meta">
                                <h3 class="exp-title">Full Stack Developer</h3>
                                <h4 class="exp-company">Falconcity of Wonders, Dubai</h4>
                            </div>
                            <ul class="exp-tasks">
                                <li>Developed <b>SEO-optimized corporate websites</b> with on-page best practices to maximize organic reach.</li>
                                <li>Built custom in-house applications using <b>Laravel</b>: HRMS, Document Management, IT Management, DocSign, Tax Allocation, Archive System.</li>
                                <li>Built corporate websites for Almoosa Group using <b>WordPress, Core PHP, and CodeIgniter</b>.</li>
                                <li>Created responsive <b>email newsletters</b>, deployed via SendGrid for high-impact marketing campaigns.</li>
                                <li>Collaborated cross-functionally with marketing, design, and operations teams to execute digital roadmaps.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="exp-item">
                        <div class="exp-date">Feb 2017 — Dec 2017</div>
                        <div class="exp-line">
                            <div class="exp-dot-indicator"></div>
                        </div>
                        <div class="exp-body">
                            <div class="exp-meta">
                                <h3 class="exp-title">Full Stack Developer</h3>
                                <h4 class="exp-company">Menora Software, India</h4>
                            </div>
                            <ul class="exp-tasks">
                                <li>Successfully developed a <b>cloud-based CRM system using Zend Framework</b>, streamlining core business operations.</li>
                                <li>Performed code reviews, debugged complex issues, and optimized legacy code for speed and security.</li>
                                <li>Built <b>responsive websites from Figma/Photoshop mockups</b> ensuring pixel-perfect layout fidelity.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="exp-item">
                        <div class="exp-date">Jan 2015 — Jan 2017</div>
                        <div class="exp-line">
                            <div class="exp-dot-indicator"></div>
                        </div>
                        <div class="exp-body">
                            <div class="exp-meta">
                                <h3 class="exp-title">Full Stack Developer</h3>
                                <h4 class="exp-company">Jwimps Innovations, India</h4>
                            </div>
                            <ul class="exp-tasks">
                                <li>Developed <b>jwimps.com</b> — a complex eBay-style e-commerce platform enabling shops to host and sell products online.</li>
                                <li>Built and launched production sites: WordPress (<b>q8malayali.com</b>), CodeIgniter (<b>tourorganiserindia.in</b>), Magento (<b>citydamsel.com</b>).</li>
                                <li>Specialized in <b>full-cycle website development</b> from database schema design to server deployment.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>

            <!-- ====== CONTACT SECTION ====== -->
            <section id="contact">
                <div class="section-header">
                    <h2 class="section-header-title">Contact</h2>
                </div>
                
                <div class="contact-container">
                    <div class="contact-info-column">
                        <div class="contact-text-block">
                            <span class="eyebrow">Collaborate With Me</span>
                            <h3 class="sidebar-info-header" style="font-size:2rem;margin-bottom:1rem;font-family:'Outfit',sans-serif;font-weight:700;">Let's build something exceptional.</h3>
                            <p>Whether you require a highly secure custom portal build, an extreme Speed/Core Web Vitals optimization audit, or full-site search engine rankings dominance, let's discuss details.</p>
                        </div>
                        
                        <div class="contact-card-list">
                            <div class="contact-card">
                                <div class="contact-card-icon"><i class="fas fa-envelope"></i></div>
                                <div class="contact-card-details">
                                    <label>Email Me</label>
                                    <a href="mailto:euginepj@yahoo.com">euginepj@yahoo.com</a>
                                </div>
                            </div>
                            <div class="contact-card">
                                <div class="contact-card-icon"><i class="fas fa-phone"></i></div>
                                <div class="contact-card-details">
                                    <label>Call Me</label>
                                    <a href="tel:+9710566275294">+971 (0)0566275294</a>
                                </div>
                            </div>
                            <div class="contact-card">
                                <div class="contact-card-icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="contact-card-details">
                                    <label>Location</label>
                                    <span>Dubai, UAE</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <form class="contact-form" action="https://formspree.io/f/b2a75877c449195b" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="formName">Full Name</label>
                                <input type="text" class="form-control" id="formName" name="name" placeholder="John Doe" required/>
                            </div>
                            <div class="form-group">
                                <label for="formEmail">Email Address</label>
                                <input type="email" class="form-control" id="formEmail" name="email" placeholder="john@example.com" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formSubject">Subject</label>
                            <input type="text" class="form-control" id="formSubject" name="subject" placeholder="Project Inquiry" required/>
                        </div>
                        <div class="form-group">
                            <label for="formMsg">Project Description & Requirements</label>
                            <textarea class="form-control" id="formMsg" name="message" placeholder="Provide details on scope, tech stacks, and schedules..." required></textarea>
                        </div>
                        <button type="submit" class="btn-primary" style="justify-content:center;cursor:pointer;">Send Message <span class="material-symbols-outlined">send</span></button>
                    </form>
                </div>
            </section>

        </main>
    </div>

    <!-- ===== FOOTER ===== -->
    <footer class="site-footer">
        <p>© 2026 Eugine Joseph — Crafted with Precision & SEO Optimized.</p>
        <div class="footer-links">
            <a href="mailto:euginepj@yahoo.com">Email</a>
            <a href="https://www.linkedin.com/in/eugine-p-j-67ab6719/" target="_blank" rel="noopener">LinkedIn</a>
            <a href="Full-Stack-Developer-Eugine-Joseph-2025-1.pdf">CV</a>
        </div>
    </footer>

    <!-- ===== SCRIPTS ===== -->
    <script src="node_modules/mdbootstrap/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    
    <!-- GSAP for Smooth Light Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    
    <script>
    // ---- GSAP Scroll Reveal Setup ----
    gsap.registerPlugin(ScrollTrigger);

    // Initial Hero Page Load Animations
    gsap.from("#hero .eyebrow", { opacity: 0, y: 20, duration: 0.8, ease: "power3.out" });
    gsap.from("#hero .hero-title", { opacity: 0, y: 30, duration: 1, delay: 0.2, ease: "power3.out" });
    gsap.from("#hero .hero-lead", { opacity: 0, y: 25, duration: 1, delay: 0.4, ease: "power3.out" });
    gsap.from("#hero .hero-ctas", { opacity: 0, y: 20, duration: 0.8, delay: 0.6, ease: "power3.out" });
    gsap.from("#hero .stat-item", { 
        opacity: 0, 
        y: 20, 
        duration: 0.8, 
        delay: 0.8, 
        stagger: 0.15, 
        ease: "power3.out" 
    });

    // Animate subsequent sections on scroll
    document.querySelectorAll("section:not(#hero)").forEach(function(section) {
        gsap.from(section, {
            scrollTrigger: {
                trigger: section,
                start: "top 88%",
                toggleActions: "play none none none"
            },
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power3.out"
        });
    });

    // ---- Fancybox config ----
    Fancybox.bind('[data-fancybox]', {
        contentClick: "toggleCover",
        Images: { Panzoom: { maxScale: 2 } },
        Thumbs: { type: "classic" },
        Toolbar: { display: { left: [], middle: ["prev", "infobar", "next"], right: ["close"] } },
    });

    // ---- Filter functionality ----
    document.querySelectorAll('.filter-tab').forEach(function(tab) {
        tab.addEventListener('click', function() {
            document.querySelectorAll('.filter-tab').forEach(function(t) { t.classList.remove('active'); });
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
            ScrollTrigger.refresh();
        });
    });

    // ---- Sidebar Toggle Button (Desktop & Mobile) ----
    var toggleBtn = document.getElementById('sidebarToggleBtn');
    var toggleIcon = document.getElementById('sidebarToggleIcon');
    
    if (toggleBtn) {
        toggleBtn.addEventListener('click', function() {
            document.body.classList.toggle('sidebar-collapsed');
            if (document.body.classList.contains('sidebar-collapsed')) {
                toggleIcon.textContent = 'menu';
                toggleBtn.setAttribute('title', 'Show Sidebar');
            } else {
                toggleIcon.textContent = 'menu_open';
                toggleBtn.setAttribute('title', 'Collapse Sidebar');
            }
            // Refresh ScrollTrigger as main-content expands/shrinks
            setTimeout(() => { ScrollTrigger.refresh(); }, 450);
        });
    }

    // ---- Mobile Drawer Toggle ----
    var menuBtn  = document.getElementById('mobileMenuBtn');
    var drawer   = document.getElementById('mobileDrawer');
    var closeBtn = document.getElementById('mobileDrawerClose');
    var backdrop = document.getElementById('mobileDrawerBackdrop');

    if (menuBtn) {
        menuBtn.addEventListener('click', function() { drawer.classList.add('open'); });
        closeBtn.addEventListener('click', function() { drawer.classList.remove('open'); });
        backdrop.addEventListener('click', function() { drawer.classList.remove('open'); });
    }

    // ---- Smooth Scrolling & Drawer Close ----
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

    // ---- Active Links on Scroll ----
    var sections = document.querySelectorAll('section[id]');
    var navLinks = document.querySelectorAll('.sidebar-nav a, .mobile-nav-menu a');
    
    window.addEventListener('scroll', function() {
        var scrollPos = window.scrollY + 180;
        sections.forEach(function(sec) {
            if (sec.offsetTop <= scrollPos && (sec.offsetTop + sec.offsetHeight) > scrollPos) {
                navLinks.forEach(function(a) { a.classList.remove('active'); });
                var activeLinks = document.querySelectorAll('a[href="#' + sec.id + '"]');
                activeLinks.forEach(function(active) { active.classList.add('active'); });
            }
        });
    });
    </script>
</body>
</html>
