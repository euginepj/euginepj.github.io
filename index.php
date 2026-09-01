<?php
// ---- DATA ----
$person = (object) [
    'name' => 'Eugine Joseph',
    'phone' => '0566275294',
    'email' => 'euginepj@yahoo.com',
    'title' => 'Senior Full Stack Web Developer & SEO Specialist',
    'country' => 'Dubai, UAE',
    'bio' => 'Architecting high-performance web solutions with over a decade of expertise across PHP, Laravel, WordPress, and SEO. Delivering pixel-perfect user experiences and secure, scalable backends for enterprise clients.',
    'social' => [
        'linkedin-in' => 'https://www.linkedin.com/in/eugine-joseph-67ab6719/?skipRedirect=true',
        'github' => 'https://github.com/euginepj',
        'twitter' => 'https://twitter.com/euginepj',
        'stack-overflow' => 'https://stackoverflow.com/users/1587049/eugine-joseph',
    ]
];

$skills = [
    'PHP / Laravel' => [
        'desc' => 'Enterprise web apps, API design, robust backends, and performance tuning.',
        'icon' => 'devicon-laravel-plain colored'
    ],
    'MySQL / PostgreSQL' => [
        'desc' => 'Relational database architecture, query optimization, indexing, and complex schemas.',
        'icon' => 'devicon-mysql-plain colored'
    ],
    'WordPress / CMS' => [
        'desc' => 'Custom plugin/theme development, Gutenberg building, headless setups, and multisite.',
        'icon' => 'devicon-wordpress-plain colored'
    ],
    'Tailwind CSS' => [
        'desc' => 'Highly customized utility-first design systems, animations, and fluid layouts.',
        'icon' => 'devicon-tailwindcss-original-wordmark colored'
    ],
    'Bootstrap' => [
        'desc' => 'Rapid responsive development, grid layouts, and legacy codebase migrations.',
        'icon' => 'devicon-bootstrap-plain colored'
    ],
    'JavaScript / jQuery' => [
        'desc' => 'Vanilla ES6+ interactivity, async operations, state handling, and custom plugins.',
        'icon' => 'devicon-javascript-plain colored'
    ],
    'Node.js' => [
        'desc' => 'Backend script automation, tooling configurations, and real-time utilities.',
        'icon' => 'devicon-nodejs-plain colored'
    ],
    'Payment Gateways' => [
        'desc' => 'Amazon Payment Services (APS), Amazon Pay, PayPal, Stripe integrations.',
        'icon' => 'fas fa-credit-card'
    ],
    'HTML5 / CSS3' => [
        'desc' => 'Semantic layouts, CSS grid/flexbox systems, responsive fluid systems, and transitions.',
        'icon' => 'devicon-html5-plain colored'
    ],
    'On-Page SEO' => [
        'desc' => 'Schema markup, semantic hierarchies, meta structures, indexability audits, and keyword strategy.',
        'icon' => 'fas fa-search-dollar'
    ],
    'CodeIgniter' => [
        'desc' => 'Lightweight MVC application architecture, custom tool builds, and API integrations.',
        'icon' => 'devicon-codeigniter-plain colored'
    ],
    'GitHub / Git' => [
        'desc' => 'Branching strategies, action workflows, release management, and collaborative code reviews.',
        'icon' => 'devicon-git-plain colored'
    ],
];

$works = [
    ["name" => "Watchpoint 24", "img" => "img-watchpoint24.png", "cat" => "tw,la", "href" => "https://watchpoint24.ae", "year" => "2025", "stack" => ["Laravel", "Tailwind", "SEO"], "desc" => "Security monitoring and operational surveillance management service platform."],
    ["name" => "Cinema Al Zahra", "img" => "img-cinema-alzahra.png", "cat" => "bt,php", "href" => "http://cinema-alzahra.com", "year" => "2025", "stack" => ["Bootstrap", "PHP", "SEO"], "desc" => "Official web portal and screening showcase for Cinema Al Zahra."],
    ["name" => "CloudTech Nexus", "img" => "img-cloudtechnexus.png", "cat" => "tw,la", "href" => "https://cloudtechnexus.ae/", "year" => "2026", "stack" => ["Laravel", "Tailwind", "SEO"], "desc" => "Official corporate web application for CloudTech Nexus showcasing IT infrastructure and digital solutions."],
    ["name" => "Promotion Pages", "img" => "promotions-img-1.webp", "cat" => "tw,la", "href" => "https://promotions.leosdevelopments.com/knightsbridge-brown/", "year" => "2024", "stack" => ["Laravel", "Tailwind", "SEO"], "desc" => "Custom high-performance marketing landing pages engineered for high lead-conversion ratios."],
    ["name" => "Central Pacific One", "img" => "img-cpo-1.png", "cat" => "tw,la", "href" => "https://centralpacificone.com/", "year" => "2024", "stack" => ["Laravel", "Tailwind", "SEO"], "desc" => "A robust real estate investment framework built on Laravel with an integrated CMS engine.", "other_imgs" => ["img-cpo-2.png", "img-cpo-3.png", "img-cpo-4.png", "img-cpo-5.png"]],
    ["name" => "Design LUD", "img" => "img-lud-01.png", "cat" => "wp", "href" => "https://designlud.com/", "year" => "2024", "stack" => ["WordPress", "SEO"], "desc" => "High-end architecture & interior design portfolio site featuring interactive galleries.", "other_imgs" => ["img-lud-02.png", "img-lud-03.png"]],
    ["name" => "Nursery", "img" => "img-nursery.png", "cat" => "bt,ci", "href" => "http://falconcitynursery.ae", "year" => "2021", "stack" => ["Bootstrap", "CodeIgniter"], "desc" => "Interactive, secure portal for educational nursery facilities managing admissions."],
    ["name" => "Falconcity Markets", "img" => "img-markets.png", "cat" => "bt,php", "href" => "http://falconcitymarkets.ae/", "year" => "2020", "stack" => ["Bootstrap", "PHP"], "desc" => "Custom community retail market portal serving directory and promotions data."],
    ["name" => "Falconcity Markets Sub-pages", "img" => "img-markets-1.png", "cat" => "bt,php", "href" => "fcw-market-ug", "year" => "2020", "stack" => ["Bootstrap", "PHP"], "desc" => "Internal database management and reporting sub-pages for market operations."],
    ["name" => "Alco", "img" => "img-alco.png", "cat" => "bt", "href" => "https://web.archive.org/web/20220407220859/http://www.alco-plant-hire.com/index.php", "year" => "2020", "stack" => ["Bootstrap", "HTML/CSS"], "desc" => "Legacy site migration and conversion optimization for heavy machinery plant rental services."],
    ["name" => "Panworld Travels", "img" => "img-panworld.png", "cat" => "bt,wp", "href" => "http://panworldtravels.com/", "year" => "2019", "stack" => ["WordPress", "Bootstrap"], "desc" => "Dynamic corporate travel bookings and custom holiday packages catalog system."],
    ["name" => "DIRP", "img" => "img-dirp.png", "cat" => "bt,php", "href" => "http://dirp.ae/", "year" => "2019", "stack" => ["Bootstrap", "PHP"], "desc" => "Government compliance and document tracking portal built with clean PHP backend modules."],
    ["name" => "Registration", "img" => "img-registration.png", "cat" => "bt,ci", "href" => "#", "year" => "2019", "stack" => ["Bootstrap", "CodeIgniter"], "desc" => "Custom user registration system integrated with a barcode scanning validation utility."],
    ["name" => "A and A Cargo", "img" => "img-aandacargo.png", "cat" => "bt,php", "href" => "#", "year" => "2019", "stack" => ["Bootstrap", "PHP"], "desc" => "Logistics operations and quote computation application for international air/sea freight."],
    ["name" => "AOAMS", "img" => "img-aoams.png", "cat" => "bt,php", "href" => "http://almoosa-oam.com/", "year" => "2018", "stack" => ["Bootstrap", "PHP"], "desc" => "Owner Association Management Portal displaying compliance docs, notices, and billing."],
    ["name" => "CMC", "img" => "img-cmc.png", "cat" => "bt,php", "href" => "http://cmc-uae.ae", "year" => "2018", "stack" => ["Bootstrap", "PHP"], "desc" => "Corporate management portal for facilities, showcasing service offerings and locations."]
];

$companies = [
    [
        'title' => 'Senior Full Stack Developer',
        'name' => 'CloudTech Nexus, Dubai',
        'time' => 'Mar 2026 — Present',
        'logo_url' => 'https://cloudtechnexus.ae/storage/CloudTech_Logo.png',
        'tasks' => [
            "Architecting and optimizing enterprise cloud application portals using Laravel and high-performance relational databases.",
            "Structuring secure API endpoints, integrating third-party operational frameworks, and optimizing runtime execution latencies.",
            "Coordinating speed performance optimizations, enhancing Core Web Vitals to deliver premium SEO outcomes."
        ]
    ],
    [
        'title' => 'Senior Full Stack Web Developer & SEO Specialist',
        'name' => 'LEOS International Group, Dubai',
        'time' => 'Jul 2024 — Feb 2026',
        'logo_url' => 'https://dubai-immo.com/wp-content/uploads/2023/04/leos-dubai-logo.jpeg',
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
        'name' => 'Falconcity of Wonders, Dubai',
        'time' => 'Jan 2018 — Dec 2023',
        'logo_url' => 'https://falconcity.com/wp-content/uploads/2020/01/falcon-logo-web-retina.png',
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
        'name' => 'Menora Software, India',
        'time' => 'Feb 2017 — Dec 2017',
        'logo_url' => 'https://www.menora.co.uk/wp-content/themes/menora/assets/images/menora-logo.png',
        'tasks' => [
            "Successfully developed a <b>cloud-based CRM system using Zend Framework</b>, streamlining core business operations.",
            "Performed code reviews, debugged complex issues, and optimized legacy code for speed and security.",
            "Built <b>responsive websites from Figma/Photoshop mockups</b> ensuring pixel-perfect layout fidelity.",
        ]
    ],
    [
        'title' => 'Full Stack Developer',
        'name' => 'Jwimps Innovations, India',
        'time' => 'Jan 2015 — Jan 2017',
        'logo_url' => 'https://cdn.svgporn.com/logos/magento.svg',
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $person->name ?> — <?= $person->title ?></title>
    <meta name="description"
        content="<?= $person->title ?> in Dubai. Specialize in PHP, Laravel, WordPress, custom database architectures, and extreme speed optimization." />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,600&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />

    <!-- External Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css" />

    <style>
        /* ===== COLOR SYSTEM & TOKENS ===== */
        :root {
            --bg-base: #0A0A0A;
            --bg-surface: #121212;
            --bg-surface-elevated: #1A1A1A;

            --border-muted: #1a1a1a;
            --border-active: #2a2a2a;

            --text-primary: #f5f5f5;
            --text-secondary: #a3a3a3;
            --text-muted: #626262;

            --accent: #F97316;
            /* Premium Agency Orange */
            --accent-hover: #ea580c;
            --accent-glow: rgba(249, 115, 22, 0.15);

            --sidebar-width: 340px;
            --transition-smooth: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* ===== RESET & ROOT STYLES ===== */
        *,
        *::before,
        *::after {
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
        h1,
        h2,
        h3,
        h4,
        h5 {
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

        /* ===== RIGHT SIDEBAR (DRAWER COLLAPSED BY DEFAULT) ===== */
        .sidebar {
            position: fixed;
            top: 0;
            right: 0;
            left: auto;
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--bg-surface);
            border-left: 1px solid var(--border-muted);
            border-right: none;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            padding: 3rem 2.25rem;
            gap: 2.5rem;
            z-index: 300;
            transform: translateX(100%);
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* Open State for Right Sidebar */
        body.sidebar-open .sidebar {
            transform: translateX(0);
        }

        /* Sidebar Backdrop Overlay */
        .sidebar-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(4px);
            z-index: 200;
            opacity: 0;
            pointer-events: none;
            transition: var(--transition-smooth);
        }

        body.sidebar-open .sidebar-backdrop {
            opacity: 1;
            pointer-events: auto;
        }

        /* ===== MAIN CONTAINER (FULL WIDTH BY DEFAULT) ===== */
        .main-content {
            margin-left: 0;
            flex: 1;
            padding: 5rem 6.5rem;
            display: flex;
            flex-direction: column;
            gap: 7.5rem;
            min-height: 100vh;
            max-width: 1400px;
            margin-right: auto;
            margin-left: auto;
            transition: var(--transition-smooth);
        }

        /* ===== SIDEBAR TOGGLE BUTTON (FIXED TOP-RIGHT) ===== */
        .sidebar-toggle-btn {
            position: fixed;
            top: 2rem;
            right: 2rem;
            width: 54px;
            height: 54px;
            background: var(--bg-surface-elevated);
            border: 1px solid var(--border-active);
            color: var(--text-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 250;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
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
            border-radius: 0px;
            /* Square profile image */
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
            justify-content: center;
            min-height: 95vh;
            padding: 0;
        }

        .hero-text-block {
            max-width: 850px;
        }

        .hero-name {
            font-size: 40px;
            font-weight: bold;
            letter-spacing: 0.05em;
            color: var(--accent);
            margin-bottom: 24px;
            font-family: 'Playfair Display', serif;
        }

        .hero-title {
            font-size: 62px;
            font-weight: 800;
            letter-spacing: -0.03em;
            line-height: 1.1;
            color: #a2a2a2;
            margin-bottom: 24px;
        }

        .hero-title span {
            color: var(--accent);
            font-family: inherit;
        }

        .hero-supporting {
            font-size: 26px;
            font-weight: 450;
            line-height: 1.4;
            color: #D4D4D4;
            max-width: 750px;
            margin-bottom: 32px;
            font-family: 'Playfair Display', serif;
        }

        .hero-desc {
            font-size: 19px;
            font-weight: 400;
            line-height: 1.8;
            color: #A3A3A3;
            max-width: 700px;
            margin-bottom: 48px;
        }

        .hero-ctas {
            display: flex;
            align-items: center;
            gap: 18px;
            flex-wrap: wrap;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            background: var(--accent);
            border: 1px solid var(--accent);
            color: #fff;
            height: 54px;
            padding: 16px 32px;
            font-size: 16px;
            font-weight: 600;
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
            height: 54px;
            padding: 16px 32px;
            font-size: 16px;
            font-weight: 600;
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

        /* ===== AUTOMATIC LOGO MARQUEE SLIDER ===== */
        .logo-cloud-section {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            overflow: hidden;
            position: relative;
            padding: 1.5rem 0;
        }

        .logo-cloud-title {
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--text-muted);
        }

        .marquee-container {
            display: flex;
            width: 100%;
            overflow: hidden;
            position: relative;
            mask-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgb(0, 0, 0) 15%, rgb(0, 0, 0) 85%, rgba(0, 0, 0, 0) 100%);
        }

        .marquee-track {
            display: flex;
            gap: 3rem;
            width: max-content;
            animation: marquee 33s linear infinite;
        }

        .marquee-container:hover .marquee-track {
            animation-play-state: paused;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .marquee-logo-card {
            background: var(--bg-surface);
            border: 1px solid var(--border-muted);
            padding: 1.5rem 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            font-family: 'Outfit', sans-serif;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: var(--text-secondary);
            transition: var(--transition-smooth);
            user-select: none;
            min-width: 200px;
            text-align: center;
        }

        .marquee-logo-card:hover {
            border-color: var(--border-active);
            color: var(--accent);
            box-shadow: inset 0 0 15px rgba(249, 115, 22, 0.03);
        }

        .marquee-logo-card img {
            height: 32px;
            max-width: 150px;
            width: auto;
            object-fit: contain;
            filter: grayscale(1) brightness(0.85);
            transition: var(--transition-smooth);
        }

        .marquee-logo-card:hover img {
            filter: grayscale(0) brightness(1);
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
            grid-template-columns: repeat(3, 1fr);
            /* 3 column layout */
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
            object-position: top;
            /* Show top part of image */
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
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0) 100%);
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
            background: rgba(0, 0, 0, 0.6);
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
            gap: 1rem;
        }

        .tech-icon-box {
            font-size: 1.5rem;
            color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition-smooth);
        }

        .tech-card:hover .tech-icon-box {
            transform: scale(1.1) rotate(5deg);
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
            margin-left: auto;
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

        .exp-item:first-child {
            padding-top: 0;
        }

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

        .contact-card-details a,
        .contact-card-details span {
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
            margin-left: 0;
            padding: 2.5rem 6.5rem;
            border-top: 1px solid var(--border-muted);
            background: var(--bg-surface);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1.5rem;
            transition: var(--transition-smooth);
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
            box-shadow: 10px 0 30px rgba(0, 0, 0, 0.5);
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
        @media (max-width: 1400px) {
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

        /* ===== RESPONSIVE TYPOGRAPHY ===== */
        @media (max-width: 1024px) {
            .hero-title {
                font-size: 52px;
            }

            .hero-supporting {
                font-size: 22px;
            }

            .hero-desc {
                font-size: 18px;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 38px;
            }

            .hero-supporting {
                font-size: 19px;
                margin-bottom: 24px;
            }

            .hero-desc {
                font-size: 16px;
                margin-bottom: 36px;
            }

            .hero-name {
                font-size: 20px;
                margin-bottom: 16px;
            }

            .hero-section {
                padding: 5rem 0;
            }
        }
    </style>
</head>

<body>

    <!-- ===== MOBILE HEADER ===== -->
    <header class="mobile-header">
        <div class="mobile-header-logo"><?= $person->name ?></div>
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
        <span class="material-symbols-outlined" id="sidebarToggleIcon">menu</span>
    </button>

    <!-- ===== SITE WRAPPER ===== -->
    <div class="site-container">

        <!-- ===== SIDEBAR BACKDROP ===== -->
        <div class="sidebar-backdrop" id="sidebarBackdrop"></div>

        <!-- ===== STICKY SIDEBAR (RIGHT SIDE) ===== -->
        <aside class="sidebar">
            <div class="sidebar-profile">
                <div class="sidebar-avatar-wrapper">
                    <img src="https://avatars0.githubusercontent.com/u/5563836?s=400&v=4"
                        alt="<?= $person->name ?> - Senior Full Stack Developer" />
                </div>

                <div class="sidebar-info-header">
                    <h1><?= str_replace(' ', '<br/>', strtoupper($person->name)) ?></h1>
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
                <a href="mailto:<?= $person->email ?>" class="sidebar-contact-link">
                    <i class="fas fa-envelope"></i> <?= $person->email ?>
                </a>
                <a href="tel:+971<?= $person->phone ?>" class="sidebar-contact-link">
                    <i class="fas fa-phone"></i> <?= $person->phone ?>
                </a>
                <div class="sidebar-contact-link">
                    <i class="fas fa-map-marker-alt"></i> <?= $person->country ?>
                </div>
                <div class="sidebar-social-row">
                    <a href="<?= $person->social['linkedin-in'] ?>" target="_blank" rel="noopener" title="Linkedin-in">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="<?= $person->social['github'] ?>" target="_blank" rel="noopener" title="Github">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="<?= $person->social['twitter'] ?>" target="_blank" rel="noopener" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="<?= $person->social['stack-overflow'] ?>" target="_blank" rel="noopener"
                        title="Stack-overflow">
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
                    <div class="hero-name"><?= $person->name ?></div>
                    <h1 class="hero-title">Senior Full Stack Developer & <span>SEO Specialist</span></h1>
                    <h2 class="hero-supporting">Architecting high-performance web solutions for businesses across Dubai
                        and beyond.</h2>
                    <p class="hero-desc"><?= $person->bio ?></p>
                    <div class="hero-ctas">
                        <a href="#projects" class="btn-primary">View My Work <span
                                class="material-symbols-outlined">arrow_downward</span></a>
                        <a href="Full-Stack-Developer-Eugine-Joseph-2025-1.pdf" class="btn-secondary">Download CV <span
                                class="material-symbols-outlined">download</span></a>
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

            <!-- ====== CREDIBILITY LOGO CLOUD MARQUEE ====== -->
            <section class="logo-cloud-section">
                <h3 class="logo-cloud-title">Selected Companies & Clients I've Engineered For</h3>

                <div class="marquee-container">
                    <div class="marquee-track">
                        <?php foreach (array_merge($companies, $companies) as $company): ?>
                            <?php if (stripos($company['name'], 'jwimps') !== false) continue; ?>
                            <div class="marquee-logo-card">
                                <img src="<?= $company['logo_url'] ?>"
                                    alt="<?= htmlspecialchars($company['name']) ?> Logo" />
                                <span><?= htmlspecialchars(explode(',', $company['name'])[0]) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
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
                    <?php foreach ($works as $index => $work): ?>
                        <article class="project-card" data-category="<?= htmlspecialchars($work['cat']) ?>">
                            <div class="project-media-box">
                                <a data-fancybox="gallery_<?= $index ?>" href="images/<?= htmlspecialchars($work['img']) ?>"
                                    tabindex="-1">
                                    <img src="images/<?= htmlspecialchars($work['img']) ?>"
                                        alt="<?= htmlspecialchars($work['name']) ?> Layout Overview" loading="lazy" />
                                    <div class="project-media-overlay"></div>
                                    <div class="project-click-indicator">
                                        <span class="material-symbols-outlined">zoom_in</span>
                                    </div>
                                </a>
                                <?php if (!empty($work['other_imgs'])): ?>
                                    <?php foreach ($work['other_imgs'] as $o_img): ?>
                                        <a data-fancybox="gallery_<?= $index ?>" href="images/<?= htmlspecialchars($o_img) ?>"
                                            style="display:none;"></a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="project-card-details">
                                <div class="project-meta-row">
                                    <span class="project-card-year"><?= htmlspecialchars($work['year']) ?></span>
                                    <div class="project-tech-badges">
                                        <?php foreach ($work['stack'] as $tech): ?>
                                            <span class="project-tech-badge"><?= htmlspecialchars($tech) ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <h3 class="project-card-title"><?= htmlspecialchars($work['name']) ?></h3>
                                <p class="project-card-desc"><?= htmlspecialchars($work['desc']) ?></p>

                                <div class="project-action-bar">
                                    <?php if ($work['href'] !== '#'): ?>
                                        <a href="<?= htmlspecialchars($work['href']) ?>" target="_blank" rel="noopener"
                                            class="project-action-link">
                                            Explore Site <span class="material-symbols-outlined">north_east</span>
                                        </a>
                                    <?php else: ?>
                                        <span class="project-action-link" style="color:var(--text-muted);cursor:default;">
                                            Enterprise System
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
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
                        <p class="process-card-desc">Analyzing technical performance, auditing search rankings,
                            identifying code bottlenecks, and aligning requirements with business objectives.</p>
                    </div>
                    <div class="process-card">
                        <span class="process-step-num">02</span>
                        <h3 class="process-card-title">Database & Planning</h3>
                        <p class="process-card-desc">Architecting robust schemas, modeling relationships, selecting
                            framework structures, and designing secure application interfaces.</p>
                    </div>
                    <div class="process-card">
                        <span class="process-step-num">03</span>
                        <h3 class="process-card-title">High-Performance Dev</h3>
                        <p class="process-card-desc">Writing clean, testable backend code coupled with responsive
                            interactive frontends structured for high efficiency and scalability.</p>
                    </div>
                    <div class="process-card">
                        <span class="process-step-num">04</span>
                        <h3 class="process-card-title">Speed & SEO Tuning</h3>
                        <p class="process-card-desc">Optimizing Core Web Vitals, implementing schema markups, caching
                            models, and compressing assets to secure high search visibility.</p>
                    </div>
                    <div class="process-card">
                        <span class="process-step-num">05</span>
                        <h3 class="process-card-title">Testing & Deploy</h3>
                        <p class="process-card-desc">Executing end-to-end integration audits, validating security
                            headers, and orchestrating zero-downtime deployment pipelines.</p>
                    </div>
                    <div class="process-card">
                        <span class="process-step-num">06</span>
                        <h3 class="process-card-title">Support & Scale</h3>
                        <p class="process-card-desc">Continuous server resource monitoring, regular vulnerability
                            checks, and iterative feature deployment cycles as requirements grow.</p>
                    </div>
                </div>
            </section>

            <!-- ====== TECHNOLOGIES ====== -->
            <section id="tech" class="tech-section">
                <div class="section-header">
                    <h2 class="section-header-title">Expertise</h2>
                </div>
                <div class="tech-grid">
                    <?php foreach ($skills as $name => $skill): ?>
                        <div class="tech-card">
                            <div class="tech-card-header">
                                <div class="tech-icon-box"><i class="<?= htmlspecialchars($skill['icon']) ?>"></i></div>
                                <h3 class="tech-card-title"><?= htmlspecialchars($name) ?></h3>
                                <span class="tech-card-dot"></span>
                            </div>
                            <p class="tech-card-desc"><?= htmlspecialchars($skill['desc']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- ====== EXPERIENCE ====== -->
            <section id="experience">
                <div class="section-header">
                    <h2 class="section-header-title">Experience</h2>
                </div>

                <div class="experience-list">
                    <?php foreach ($companies as $company): ?>
                        <div class="exp-item">
                            <div class="exp-date"><?= htmlspecialchars($company['time']) ?></div>
                            <div class="exp-line">
                                <div class="exp-dot-indicator"></div>
                            </div>
                            <div class="exp-body">
                                <div class="exp-meta">
                                    <h3 class="exp-title"><?= htmlspecialchars($company['title']) ?></h3>
                                    <h4 class="exp-company"><?= htmlspecialchars($company['name']) ?></h4>
                                </div>
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

            <!-- ====== CONTACT SECTION ====== -->
            <section id="contact">
                <div class="section-header">
                    <h2 class="section-header-title">Contact</h2>
                </div>

                <div class="contact-container">
                    <div class="contact-info-column">
                        <div class="contact-text-block">
                            <span class="eyebrow">Collaborate With Me</span>
                            <h3 class="sidebar-info-header"
                                style="font-size:2rem;margin-bottom:1rem;font-family:'Outfit',sans-serif;font-weight:700;">
                                Let's build something exceptional.</h3>
                            <p>Whether you require a highly secure custom portal build, an extreme Speed/Core Web Vitals
                                optimization audit, or full-site search engine rankings dominance, let's discuss
                                details.</p>
                        </div>

                        <div class="contact-card-list">
                            <div class="contact-card">
                                <div class="contact-card-icon"><i class="fas fa-envelope"></i></div>
                                <div class="contact-card-details">
                                    <label>Email Me</label>
                                    <a href="mailto:<?= $person->email ?>"><?= $person->email ?></a>
                                </div>
                            </div>
                            <div class="contact-card">
                                <div class="contact-card-icon"><i class="fas fa-phone"></i></div>
                                <div class="contact-card-details">
                                    <label>Call Me</label>
                                    <a href="tel:+971<?= $person->phone ?>">+971 (0)<?= $person->phone ?></a>
                                </div>
                            </div>
                            <div class="contact-card">
                                <div class="contact-card-icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="contact-card-details">
                                    <label>Location</label>
                                    <span><?= $person->country ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form class="contact-form" action="https://formspree.io/f/b2a75877c449195b" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="formName">Full Name</label>
                                <input type="text" class="form-control" id="formName" name="name" placeholder="John Doe"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="formEmail">Email Address</label>
                                <input type="email" class="form-control" id="formEmail" name="email"
                                    placeholder="john@example.com" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formSubject">Subject</label>
                            <input type="text" class="form-control" id="formSubject" name="subject"
                                placeholder="Project Inquiry" required />
                        </div>
                        <div class="form-group">
                            <label for="formMsg">Project Description & Requirements</label>
                            <textarea class="form-control" id="formMsg" name="message"
                                placeholder="Provide details on scope, tech stacks, and schedules..."
                                required></textarea>
                        </div>
                        <button type="submit" class="btn-primary" style="justify-content:center;cursor:pointer;">Send
                            Message <span class="material-symbols-outlined">send</span></button>
                    </form>
                </div>
            </section>

        </main>
    </div>

    <!-- ===== FOOTER ===== -->
    <footer class="site-footer">
        <p>© 2026 <?= htmlspecialchars($person->name) ?> — Crafted with Precision & SEO Optimized.</p>
        <div class="footer-links">
            <a href="mailto:<?= $person->email ?>">Email</a>
            <a href="<?= $person->social['linkedin-in'] ?>" target="_blank" rel="noopener">LinkedIn</a>
            <a href="Full-Stack-Developer-Eugine-Joseph-2025-1.pdf">CV</a>
        </div>
    </footer>

    <!-- ===== SCRIPTS ===== -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

    <!-- GSAP for Smooth Light Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <script>
        // ---- GSAP Scroll Reveal Setup ----
        gsap.registerPlugin(ScrollTrigger);

        // Initial Hero Page Load Animations
        gsap.from("#hero .hero-name", { opacity: 0, y: 20, duration: 0.8, ease: "power3.out" });
        gsap.from("#hero .hero-title", { opacity: 0, y: 30, duration: 1, delay: 0.2, ease: "power3.out" });
        gsap.from("#hero .hero-supporting", { opacity: 0, y: 20, duration: 0.8, delay: 0.4, ease: "power3.out" });
        gsap.from("#hero .hero-desc", { opacity: 0, y: 25, duration: 1, delay: 0.6, ease: "power3.out" });
        gsap.from("#hero .hero-ctas", { opacity: 0, y: 20, duration: 0.8, delay: 0.8, ease: "power3.out" });
        gsap.from("#hero .stat-item", {
            opacity: 0,
            y: 20,
            duration: 0.8,
            delay: 0.9,
            stagger: 0.15,
            ease: "power3.out"
        });

        // Animate subsequent sections on scroll
        document.querySelectorAll("section:not(#hero)").forEach(function (section) {
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
        document.querySelectorAll('.filter-tab').forEach(function (tab) {
            tab.addEventListener('click', function () {
                document.querySelectorAll('.filter-tab').forEach(function (t) { t.classList.remove('active'); });
                this.classList.add('active');

                var filter = this.dataset.filter;
                document.querySelectorAll('#projectsGrid .project-card').forEach(function (card) {
                    if (filter === 'all') {
                        card.classList.remove('hidden');
                    } else {
                        var cats = card.dataset.category.split(',').map(function (c) { return c.trim(); });
                        card.classList.toggle('hidden', !cats.includes(filter));
                    }
                });
                ScrollTrigger.refresh();
            });
        });

        // ---- Sidebar Toggle Button (Right Sidebar Collapse/Expand) ----
        var toggleBtn = document.getElementById('sidebarToggleBtn');
        var toggleIcon = document.getElementById('sidebarToggleIcon');
        var backdrop = document.getElementById('sidebarBackdrop');

        if (toggleBtn) {
            toggleBtn.addEventListener('click', function () {
                document.body.classList.toggle('sidebar-open');
                if (document.body.classList.contains('sidebar-open')) {
                    toggleIcon.textContent = 'close';
                    toggleBtn.setAttribute('title', 'Close Sidebar');
                } else {
                    toggleIcon.textContent = 'menu';
                    toggleBtn.setAttribute('title', 'Show Sidebar');
                }
            });
        }

        if (backdrop) {
            backdrop.addEventListener('click', function () {
                document.body.classList.remove('sidebar-open');
                toggleIcon.textContent = 'menu';
                toggleBtn.setAttribute('title', 'Show Sidebar');
            });
        }

        // ---- Mobile Drawer Toggle ----
        var menuBtn = document.getElementById('mobileMenuBtn');
        var drawer = document.getElementById('mobileDrawer');
        var closeBtn = document.getElementById('mobileDrawerClose');
        var mobileBackdrop = document.getElementById('mobileDrawerBackdrop');

        if (menuBtn) {
            menuBtn.addEventListener('click', function () { drawer.classList.add('open'); });
            closeBtn.addEventListener('click', function () { drawer.classList.remove('open'); });
            mobileBackdrop.addEventListener('click', function () { drawer.classList.remove('open'); });
        }

        // ---- Smooth Scrolling & Drawer Close ----
        document.querySelectorAll('a[href^="#"]').forEach(function (link) {
            link.addEventListener('click', function (e) {
                var target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    drawer.classList.remove('open');
                    document.body.classList.remove('sidebar-open');
                    if (toggleIcon) toggleIcon.textContent = 'menu';
                }
            });
        });

        // ---- Active Links on Scroll ----
        var sections = document.querySelectorAll('section[id]');
        var navLinks = document.querySelectorAll('.sidebar-nav a, .mobile-nav-menu a');

        window.addEventListener('scroll', function () {
            var scrollPos = window.scrollY + 180;
            sections.forEach(function (sec) {
                if (sec.offsetTop <= scrollPos && (sec.offsetTop + sec.offsetHeight) > scrollPos) {
                    navLinks.forEach(function (a) { a.classList.remove('active'); });
                    var activeLinks = document.querySelectorAll('a[href="#' + sec.id + '"]');
                    activeLinks.forEach(function (active) { active.classList.add('active'); });
                }
            });
        });
    </script>
</body>

</html>