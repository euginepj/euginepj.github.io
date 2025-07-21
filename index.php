<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Web Developer - Eugine Joseph</title>

    <link rel="stylesheet" href="css/output.css?q=<?= time() ?>" />
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora|Roboto" />
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet" />

    <?php
    $person = (object) [
        'name' => 'Eugine Joseph',
        'phone' => '0505854645',
        'email' => 'euginepj@yahoo.com',
        'country' => 'India',
        'flag' => 'indian',
        'social' => [
            'facebook-f' => 'https://www.facebook.com/eugine.joseph.5',
            'linkedin-in' => 'https://www.linkedin.com/in/eugine-p-j-67ab6719/',
            'twitter' => 'https://twitter.com/euginepj',
            'github' => 'https://github.com/euginepj',
            'stack-overflow' => 'https://stackoverflow.com/users/1587049/eugine-joseph',
        ]
    ];
    ?>
</head>

<body class="">
    <button type="button" class="switch-theme ">
        <div class="theme-sun"><i class="fa-solid fa-sun"></i></div>
        <div class="theme-moon"><i class="fa-solid fa-moon"></i></div>
    </button>
    <main class="container-fluid ">
        <aside>
            <div class="profile box-border shadow-lg">
                <img src="https://avatars0.githubusercontent.com/u/5563836?s=400&v=4" alt="avatar" class="avatar ">
                <div class="profile-box">
                    <h2 class="">Eugine Joseph</h2>
                    <div class="details-div rounded-b-xl pt-0 ">
                        <p class="text-lg mb-3">A self-motivated Web Developer (PHP) with strong knowledge in Responsive Web Designing.</p>
                        <div class="flex flex-row lg:flex-col 2xl:flex-row my-2 gap-x-3 gap-y-2">
                            <a href="tel:+971<?= $person->phone ?? '' ?>" class="phone-btn font-semibold dark:hover:bg-white dark:hover:text-cyan-900">
                                <i class="fas fa-phone"></i> <?= $person->phone ?? '' ?>
                            </a>
                            <a href="mailto:<?= $person->email ?? '' ?>" class="email-btn font-semibold dark:hover:bg-white dark:hover:text-cyan-900">
                                <i class="fas fa-envelope"></i> <?= $person->email ?? '' ?>
                            </a>
                        </div>
                        <div class="social-icons">
                            <?php foreach ($person->social as $key => $url): ?>
                                <a href="<?= $url ?>" target="_blank" class="hover:text-gray-150 dark:hover:text-gray-950">
                                    <span class="fa-stack fa-lg hover:bg-gray-800 hover:text-white dark:hover:bg-white dark:hover:text-cyan-900">
                                        <i class="fab fa-<?= $key ?> fa-stack-1x"></i>
                                    </span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-border profile-details-panel shadow-lg">
                <h2 class="">
                    My Profile
                    <button type="button" class="btn-toggle ">
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                </h2>
                <ul class="profile-details-box">
                    <li><b>Name:</b>
                        <span>Eugine Joseph</span>
                    </li>
                    <li><b>Birthday:</b>
                        <span>23 December 1987</span>
                    </li>
                    <li><b>Gender:</b>
                        <span>Male</span>
                    </li>
                    <li><b>Nationality:</b>
                        <span>Indian</span>
                    </li>
                    <li><b>Visa Type:</b>
                        <span>Work Visa(UAE)</span>
                    </li>
                    <li><b>Driving License:</b>
                        <span>Yes. (Manual)</span>
                    </li>
                    <li><b>Languages:</b>
                        <span>English, Malayalam, Tamil(Speak)</span>
                    </li>
                    <li><b>Hobbies:</b>
                        <span>Photography, Sudoku, Chess, Reading and Browsing</span>
                    </li>
                </ul>
            </div>

            <div class="box-border technical-details-panel shadow-lg">
                <h2 class="">
                    Technical Skills
                    <button type="button" class="btn-toggle ">
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                </h2>
                <ul class="technical-details-box space-y-2">
                    <?php
                    $skills = [
                        'Laravel',
                        'CodeIgniter',
                        'WordPress/CMS',
                        'PHP/MySql',
                        'Tailwind',
                        'Bootstrap',
                        'Payment Gateway(APS)',
                        'Zend/Yii',
                        'HTML5',
                        'CSS3',
                        'jQuery',
                        'NodeJs',
                        'Github'
                    ];
                    foreach ($skills as $skill): ?>
                        <li><?= $skill ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </aside>

        <section class="">
            <div class="hidden lg:block py-5">
            </div>
            <div class="works-div">
                <h2 class="main-heading">My Works</h2>
                <ul class="list-inline simplefilter">
                    <li class="list-inline-item label" style="cursor: default">Skills: </li>
                    <li class="list-inline-item fltr-controls active" data-filter="all">All</li>
                    <li class="list-inline-item fltr-controls" data-filter="bt">Bootstrap</li>
                    <li class="list-inline-item fltr-controls" data-filter="tw">Tailwindcss</li>
                    <li class="list-inline-item fltr-controls" data-filter="php">PHP/MySql</li>
                    <li class="list-inline-item fltr-controls" data-filter="la">Laravel</li>
                    <li class="list-inline-item fltr-controls" data-filter="wp">Wordpress</li>
                    <li class="list-inline-item fltr-controls" data-filter="ci">Codeigniter</li>
                </ul>
                <div class="works-panel">
                    <?php
                    $works = [
                        [
                            "name" => "Promotion Pages",
                            "img" => "promotions-img-1.webp",
                            "cat" => "tw, la",
                            "href" => "https://centralpacificone.com/", 
                            "other_imgs" => [
                                'promotions-img-1.webp'
                            ]
                        ],
                        [
                            "name" => "Central Pacific One",
                            "img" => "img-cpo-1.png",
                            "cat" => "tw, la",
                            "href" => "https://centralpacificone.com/", 
                            "other_imgs" => [
                                'img-cpo-2.png', 
                                'img-cpo-3.png',
                                'img-cpo-4.png',
                                'img-cpo-5.png'
                            ]
                        ],
                        [
                            "name" => "Design LUD",
                            "img" => "img-lud-01.png",
                            "cat" => "wp",
                            "href" => "https://designlud.com/", 
                            "other_imgs" => [
                                'img-lud-02.png',
                                'img-lud-03.png'
                            ]
                        ],
                        
                        
                        [
                            "name" => "Nursery",
                            "img" => "img-nursery.png",
                            "cat" => "bt, ci",
                            "href" => "http://falconcitynursery.ae"
                        ],
                        [
                            "name" => "Falconcity Markets",
                            "img" => "img-markets.png",
                            "cat" => "bt, php",
                            "href" => "http://falconcitymarkets.ae/",
                        ],
                        [
                            "name" => "Falconcity Markets",
                            "img" => "img-markets-1.png",
                            "cat" => "bt, php",
                            "href" => "fcw-market-ug",
                        ],
                        [
                            "name" => "Alco",
                            "img" => "img-alco.png",
                            "cat" => "bt",
                            "href" =>
                                "https://web.archive.org/web/20220407220859/http://www.alco-plant-hire.com/index.php",
                        ],
                        [
                            "name" => "Panworld",
                            "img" => "img-panworld.png",
                            "cat" => "bt, wp",
                            "href" => "http://panworldtravels.com/",
                        ],
                        [
                            "name" => "DIRP",
                            "img" => "img-dirp.png",
                            "cat" => "bt, php",
                            "href" => "http://dirp.ae/",
                        ],
                        [
                            "name" => "Registration",
                            "img" => "img-registration.png",
                            "cat" => "bt, ci",
                            "href" => "#",
                        ],
                        [
                            "name" => "A and A Cargo",
                            "img" => "img-aandacargo.png",
                            "cat" => "bt, php",
                            "href" => "#",
                        ],
                        [
                            "name" => "AOAMS",
                            "img" => "img-aoams.png",
                            "cat" => "bt, php",
                            "href" => "http://almoosa-oam.com/",
                        ],
                        [
                            "name" => "CMC",
                            "img" => "img-cmc.png",
                            "cat" => "bt, php",
                            "href" => "http://cmc-uae.ae",
                        ],
                    ]; 
                    foreach ($works as $i => $work): ?>
                        <article class="filtr-item card box-border group hover:opacity-100 hover:scale-100 hover:shadow-xl hover:shadow-stone-800/20 
                        dark:hover:shadow-sky-500/20" data-category="<?= $work['cat'] ?>" data-sort="value">
                            <a class="block" data-fancybox="gallery_<?= $i ?>" href="images/<?= $work['img'] ?>" >
                                <img class="img-fluid" src="images/sm-<?= $work['img'] ?>" alt="<?= $work['name'] ?>">
                            </a>
                            <div style="display:none">
                                <?php if(isset($work['other_imgs']) and ($work['other_imgs'] != [])):
                                    foreach($work['other_imgs'] as $img): ?>
                                    <a data-fancybox="gallery_<?= $i ?>" href="images/<?= $img ?>"></a>
                                    <?php 
                                    endforeach; 
                                endif; 
                                ?>
                            </div>
                            <div class="card-body">
                                <h3 class="">
                                    <span class=""><?= $work['name'] ?></span>
                                    <a class="hover:bg-gray-800 hover:text-white dark:hover:bg-gray-200 dark:hover:text-gray-950" href="<?= $work['href'] ?>" target="_blank">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>&nbsp;</a>
                                </h3>
                                <div class="clearfix"></div>
                            </div>
                        </article>

                    <?php endforeach; ?>
                </div>
            </div>

            <div class="experience-panel">
                <h2 class="main-heading">My Experience</h2>
                <?php
                $companies = [
                    [
                        'title' => 'Full Stack Web Developer <br />& On-Page SEO Specialist',
                        'name' => 'LEOS International Group, Dubai',
                        'time' => 'Jan 2024 - Now',
                        'tasks' => [
                            "Optimized and customized a website to win the <b>'Best Developer Website' Award</b> at the 
                            <i>Dubai Property Awards 2024-2025</i>. ",
                            "Boosted <b>Google PageSpeed score to 95+</b> through performance optimizations, enhancing load times and UX. ",
                            "Implemented <b>Amazon Pay ('Pay Now') and APS payment gateways</b>, enabling seamless and secure transactions. ",
                            "Built <b>SEO-optimized websites</b> (e.g., <i>Central Pacific One, DesignLUD</i>), improving organic traffic and visibility. ",
                            "Developed <b>high-converting landing pages</b> for LEOS and CPO projects, increasing lead generation. ",
                            "Managed <b>Server infrastructure, security, and uptime (99.9%)</b> for all LEOS Developments websites. "
                        ]
                    ],
                    [
                        'title' => 'Full Stack Developer',
                        'name' => 'Falconcity of Wonders, Dubai',
                        'time' => '6 Years',
                        'tasks' => [
                            "Develop <b>SEO-optimized websites</b> with on-page SEO best practices to enhance visibility and organic traffic. ",
                            "Built Custom In-House Applications <ul>
                                        <li><b>Laravel:</b> HRMS, Document Management System, IT Management Software, 
                                            DocSign, Tax Department Cost Allocation System, Archive System.</li>
                                        <li><b>CodeIgniter:</b> Barcode Reader for Events.</li>
                                    </ul>",
                            "<b>Built Corporate Websites</b> for Almoosa Group companies, including: 
                                    <ul>
                                        <li><b>WordPress:</b> falconcity.com, panworldtravels.com </li>
                                        <li><b>Core PHP:</b> emiratestexcote.com, dirp.ae, acex.ae, alco-plant-hire.com</li>
                                        <li><b>CodeIgniter:</b> continentalmanagement.ae</li>
                                    </ul>",
                            "Maintaining Websites like almoosa.ae (<b>WordPress</b>), Procurement System (<b>Laravel</b>) and Web based Applications for companies under Almoosa Group (SAAE). ",
                            "Create responsive email newsletters from marketing designs: <b>Convert designs to HTML</b>, <b>Deploy via SendGrid for marketing campaigns</b>. ",
                            "Collaborate cross-functionally with <b>Marketing, Procurement, and Accounts teams</b> to deliver web solutions that meet business needs. "
                        ]
                    ],
                    [
                        'title' => 'Full Stack Developer',
                        'name' => 'Menora Software <i>(Kerala, India)</i>',
                        'time' => '10 Months',
                        'tasks' => [
                            "Successfully developed a <b>cloud-based CRM system using Zend Framework</b>, streamlining business operations. ",
                            "Performed <b>code reviews</b>, <b>debugged complex issues</b>, and optimized existing code for better performance. ",
                            "Built <b>responsive websites from mockups</b> while ensuring pixel-perfect implementation. "
                        ]
                    ],
                    [
                        'title' => 'Full Stack Developer',
                        'name' => 'Jwimps Innovations <i>(Kerala, India)</i>',
                        'time' => '2 Years',
                        'tasks' => [
                            "Developed <b>jwimps.com</b> - an eBay-style e-commerce platform enabling shops to sell products online. ",
                            "Built and launched websites including: <ul>
                                        <li>WordPress: <b>q8malayali.com</b></li>
                                        <li>CodeIgniter: <b>tourorganiserindia.in, FYI Classifieds</b></li>
                                        <li>Magento: <b>citydamsel.com</b></li>
                                    </ul>",
                            "Specialize in <b>full-cycle website development</b> - from initial concept to complete WordPress/Magento deployment. ",
                            "Expertise in building <b>custom e-commerce solutions</b> and classified platforms. "
                        ]
                    ]
                ];
                ?>
                <ol class="list-experiences">
                    <?php
                    foreach ($companies as $company):
                    ?>
                        <li class="group hover:border-l-2">
                            <span class="group-hover:shadow-2xl">
                                <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </span>
                            <div class="card box-border group-hover:opacity-100 group-hover:scale-100 hover:shadow-xl group-hover:shadow-stone-800/20 dark:group-hover:shadow-cyan-400/20 group-hover:shadow-xl ">
                                <?php
                                // dark:group-hover:shadow-sky-500/20 
                                if (isset($company['title']) and ($company['title'] != '')): ?>
                                    <h3 class=""><?= $company['title'] ?></h3>
                                <?php
                                endif;
                                if (isset($company['name']) and ($company['name'] != '')): ?>
                                    <h4 class="">
                                        <b><?= $company['name'] ?></b>
                                        <?php
                                        if (isset($company['time']) and ($company['time'] != '')):
                                        ?>
                                            <time class="">[<?= $company['time'] ?>]</time>
                                        <?php
                                        endif;
                                        ?>
                                    </h4>
                                <?php
                                endif;
                                if (isset($company['tasks']) and ($company['tasks'] != '')):
                                ?>
                                    <div class="">
                                        <ul class="tasks">
                                            <?php foreach ($company['tasks'] as $task): ?>
                                                <li><?= $task ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php
                                endif;
                                ?>
                            </div>
                        </li>
                    <?php
                    endforeach;
                    ?>
                </ol>
            </div>

            <div class="none lg:block py-5">
            </div>

        </section>
    </main>
    <footer class="">

    </footer>

    <!-- SCRIPTS -->
    <script src="node_modules/mdbootstrap/js/jquery.min.js"></script>
    <script src="node_modules/mdbootstrap/js/popper.min.js"></script>
    <script src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script src="node_modules/filterizr/dist/jquery.filterizr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/panzoom/panzoom.umd.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/panzoom/panzoom.css"
/>
    <script>
        const options = {
            /*
            Images: {
                initialSize: "cover",
            },
            */
            contentClick: "toggleCover",
            Images: {
                Panzoom: {
      maxScale: 2,
                },
            },
            Thumbs: {
                type: "classic",
            },
            Toolbar: {
                display: {
                    left: [],
                    middle: ["prev", "infobar", "next"],
                    right: ["close"],
                },
            },
        }; 
        Fancybox.bind('[data-fancybox]', options);

        $('.simplefilter .fltr-controls').on('click', function() {
            var $that = $(this);
            var $filter = $that.data('filter');
            $('.fltr-controls.active').removeClass('active');
            $that.addClass('active');

            if ($filter === 'all') {
                $('.filtr-item').show();
            } else {
                $(".filtr-item").each(function(i) {
                    var categories = $(this).data('category').split(',').map(function(item) {
                        return item.trim();
                    });

                    if (categories.includes($filter)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });

        $('.switch-theme').on('click', function() {
            if ($('html').hasClass('dark')) {
                $('html').removeClass('dark');
            } else {
                $('html').addClass('dark');
            }
        });

        $('.profile-details-panel .btn-toggle').on('click', function() {
            if ($('.profile-details-box').hasClass('show')) {
                $('.profile-details-box').removeClass('show');
            } else {
                $('.profile-details-box').addClass('show');
            }
        });
        $('.technical-details-panel .btn-toggle').on('click', function() {
            if ($('.technical-details-box').hasClass('show')) {
                $('.technical-details-box').removeClass('show');
            } else {
                $('.technical-details-box').addClass('show');
            }
        });
    </script>
</body>
</html>
