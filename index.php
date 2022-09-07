<?php
$person = (object) [
            'name' => 'Eugine Joseph',
            'phone' => '050.585.4645',
            'email' => 'euginepj@yahoo.com',
            'country' => 'India',
            'flag' => 'indian',
            'social' => [
                'fb' => 'https://www.facebook.com/eugine.joseph.5',
                'ln' => 'https://www.linkedin.com/in/eugine-p-j-67ab6719/',
                'tw' => 'https://twitter.com/euginepj',
                'git' => 'https://github.com/euginepj',
                'so' => 'https://stackoverflow.com/users/1587049/eugine-joseph', 
            ]
        ]
?><!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>My Resume</title>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css" /> 
      <link href="https://fonts.googleapis.com/css?family=Lora|Roboto" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
      <!-- Bootstrap core CSS -->
      <link href="node_modules/mdbootstrap/css/bootstrap.min.css" rel="stylesheet" />
      <!-- Material Design Bootstrap -->
      <link href="node_modules/mdbootstrap/css/mdb.min.css" rel="stylesheet" />
      <!-- Your custom styles (optional) -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
      <link href="css/style.css" rel="stylesheet" />
   </head>

   <body class="gray">
      <main class="container-fluid">
         <section class="section my-5">
            <div class="row">
               <div class="col-xl-2 col-lg-4 col-md-4 mb-4">
                  <div class="card">
                     <div class="card-body text-center">
                        <div class="avatar mx-auto">
                           <img src="https://avatars0.githubusercontent.com/u/5563836?s=400&amp;v=4"
                                alt="avatar mx-auto white" class="rounded-circle img-fluid" style="border: 1px solid #aaa">
                        </div>
                        <!--Name-->
                        <h2 class="card-title mt-1 underline">
                           <span class="font-weight-bold">Eugine Joseph</span> 
                           <img src="images/indian_flag.png" /></h2>
                        <!--Quotation-->
                        <p class=" underline"><i class="fa fa-quote-left"></i> A self-motivated Web Developer (PHP) and have strong knowledge in Responsive Web Designing . <i class="fa fa-quote-right"></i></p>
                        <div class="text-center">
                           <ul class="list-inline mb-0">
                              <li class="list-inline-item">
                                 <a target="_blank" href="<?= $person->social['fb'] ?>">
                                    <i class="fab fa-2x fa-facebook"></i>
                                 </a>
                              </li>
                              <li class="list-inline-item">
                                 <a target="_blank" href="<?= $person->social['ln'] ?>">
                                    <i class="fab fa-2x fa-linkedin"></i>
                                 </a>
                              </li>
                              <li class="list-inline-item">
                                 <a target="_blank" href="<?= $person->social['tw'] ?>">
                                    <i class="fab fa-2x fa-twitter-square"></i>
                                 </a>
                              </li>
                              <li class="list-inline-item">
                                 <a target="_blank" href="<?= $person->social['git'] ?>">
                                    <i class="fab fa-2x fa-github-square"></i>
                                 </a>
                              </li>
                              <li class="list-inline-item">
                                 <a target="_blank" href="<?= $person->social['so'] ?>">
                                    <i class="fab fa-2x fa-stack-overflow"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>

                  <div class="card mt-4" id="skills">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-12">
                              <h2 class="h3 wow fadeInLeft underline">
                                 <strong class="font-weight-bold">My Profile</strong>
                                 <i class="far fa-user float-right"></i>
                              </h2>
                           </div>
                           <div class="col-12">
                              <ul class="list-group">
                                 <li class="list-group-item px-0"><b class="col-5">Name</b>
                                    <a class="LI-simple-link" href='https://ae.linkedin.com/in/eugine-p-j-67ab6719?trk=profile-badge'>Eugine Joseph</a></li>
                                 <li class="list-group-item px-0"><b class="col-5">Birthday</b> 23 December 1987</li>
                                 <li class="list-group-item px-0"><b class="col-5">Gender</b> Male</li>
                                 <li class="list-group-item px-0"><b class="col-5">Nationality</b> Indian</li>
                                 <li class="list-group-item px-0"><b class="col-5">Visa Type</b> Work Visa(UAE)</li>
                                 <li class="list-group-item px-0"><b class="col-5">Driving License</b> Yes. (Manual)</li>
                                 <li class="list-group-item px-0"><b class="col-5">Languages </b> 
                                    English, Malayalam, Tamil(Speak)</li>
                                 <li class="list-group-item px-0"><b class="col-5">Hobbies </b> 
                                    Photography, Sudoku, Chess, Reading and Browsing</li>
                              </ul>
                           </div>
                        </div>
                        <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="vertical" data-theme="light" data-vanity="eugine-p-j-67ab6719"></div>
                     </div>
                  </div>

                  <div class="card mt-4" id="skills">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-12">
                              <h2 class="h3 wow fadeInLeft underline">
                                 <strong class="font-weight-bold">Technical Skills</strong>
                                 <i class="fas fa-laptop float-right"></i>
                              </h2>
                           </div>
                           <div class="col-12">
                              <ul class="list-group mt-2">
                                 <li class="list-group-item">
                                    <i class="devicon devicon-laravel-plain colored"></i>
                                    <span>Laravel</span>
                                 </li>
                                 <li class="list-group-item">
                                    <i class="devicon devicon-codeigniter-plain colored"></i>
                                    <span>CodeIgniter</span>
                                 </li>
                                 <li class="list-group-item">
                                    <i class="devicon devicon-zend-plain colored"></i>
                                    <span>Zend</span>
                                 </li>
                                 <li class="list-group-item">
                                    <i class="devicon devicon-yii-plain colored"></i>
                                    <span>Yii</span>
                                 </li>
                                 <li class="list-group-item">
                                    <i class="devicon devicon-wordpress-plain colored"></i>
                                    <span>WordPress</span>
                                 </li>
                                 <li class="list-group-item">
                                    <i class="devicon devicon-drupal-plain colored"></i>
                                    <span>Drupal</span>
                                 </li>
                                 <li class="list-group-item">
                                    <i class="devicon devicon-bootstrap-plain colored"></i>
                                    <span>Bootstrap</span>
                                 </li>
                                 <li class="list-group-item">
                                    <i class="devicon devicon-html5-plain colored"></i>
                                    <span>HTML5</span>
                                 </li>
                                 <li class="list-group-item">
                                    <i class="devicon devicon-css3-plain colored"></i>
                                    <span>CSS3</span>
                                 </li>
                                 <li class="list-group-item">
                                    <i class="devicon devicon-jquery-plain colored"></i>
                                    <span>jQuery</span>
                                 </li>
                                 <li class="list-group-item">
                                    <i class="devicon devicon-mysql-plain colored"></i>
                                    <span>MySql</span>
                                 </li>
                                 <li class="list-group-item">
                                    <i class="devicon devicon-nodejs-plain colored"></i>
                                    <span>NodeJs</span>
                                 </li>
                                 <li class="list-group-item">
                                    <i class="devicon devicon-github-plain colored"></i>
                                    <span>Github</span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="card mt-4" id="skills">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-12">
                              <h2 class="h3 wow fadeInLeft underline">
                                 <strong class="font-weight-bold">My Education</strong>
                              </h2>
                           </div>
                           <div class="col-12">
                              <ul class="list-group mt-2">
                                 <li class="list-group-item">
                                    <span>BCA</span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-10 col-lg-8 col-md-8 mb-8">
                  <div class="card mb-4">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-12">
                              <h2 class="h3 wow fadeInLeft underline">
                                 <strong class="font-weight-bold">My Works</strong>
                                 <i class="far fa-images float-right"></i>
                              </h2>
                           </div>
                           <div class="col-12">
                              <ul class="list-inline simplefilter"><li class="list-inline-item" style="cursor: default">Skills: </li><li class="list-inline-item fltr-controls active" data-filter="all">All</li><li class="list-inline-item fltr-controls" data-filter="bt">Bootstrap</li><li class="list-inline-item fltr-controls" data-filter="php">PHP/MySql</li><li class="list-inline-item fltr-controls" data-filter="wp">Wordpress</li><li class="list-inline-item fltr-controls" data-filter="ci">Codeigniter</li></ul>
                           </div>
                           <div class="col-12">
                              <div class="row filtr-container">
                                 <?php
                                 $works = [
                                     [
                                         'name' => 'Alco',
                                         'img' => 'img-alco.png',
                                         'cat' => 'bt',
                                         'href' => 'http://alco-plant-hire.com/'
                                     ], [
                                         'name' => 'Panworld',
                                         'img' => 'img-panworld.png',
                                         'cat' => 'bt, wp',
                                         'href' => 'http://panworldtravels.com/'
                                     ], [
                                         'name' => 'DIRP',
                                         'img' => 'img-dirp.png',
                                         'cat' => 'bt, php',
                                         'href' => 'http://dirp.ae/'
                                     ], [
                                         'name' => 'Registration',
                                         'img' => 'img-registration.png',
                                         'cat' => 'bt, ci',
                                         'href' => 'http://registration.falconcity.com'
                                     ], [
                                         'name' => 'Nursery',
                                         'img' => 'img-nursery.png',
                                         'cat' => 'bt, php',
                                         'href' => 'http://falconcitynursery.ae/sample/'
                                     ], [
                                         'name' => 'Falconcity Markets',
                                         'img' => 'img-markets.png',
                                         'cat' => 'bt, php',
                                         'href' => 'http://falconcitymarkets.ae/'
                                     ], [
                                         'name' => 'Falconcity Markets',
                                         'img' => 'img-markets-1.png',
                                         'cat' => 'bt, php',
                                         'href' => 'http://falconcitymarkets.ae/'
                                     ], [
                                         'name' => 'A and A Cargo',
                                         'img' => 'img-aandacargo.png',
                                         'cat' => 'bt, php',
                                         'href' => 'http://aandacargo.com'
                                     ], [
                                         'name' => 'AOAMS',
                                         'img' => 'img-aoams.png',
                                         'cat' => 'bt, php',
                                         'href' => 'http://almoosa-oam.com/'
                                     ], [
                                         'name' => 'CMC',
                                         'img' => 'img-cmc.png',
                                         'cat' => 'bt, php',
                                         'href' => 'http://cmc-uae.ae'
                                     ],
                                 ];
                                 foreach ($works as $work) {
                                    ?> 
                                    <div class="col-6 col-lg-4 filtr-item pr-0 pb-3" data-category="<?= $work['cat'] ?>"
                                         data-sort="value"><div class="card my-3">
                                          <div class="card-body">
                                             <h3 class="h4 wow fadeInLeft underline underline-slim">
                                                <?= $work['name'] ?>
                                                <a class="btn-link black-text btn-sm float-right" href="<?= $work['href'] ?>" target="_blank" >[visit site]</a>
                                                
                                             </h3>
                                             <a data-fancybox="gallery" href="images/<?= $work['img'] ?>" target="_blank">
                                                <img src="images/sm-<?= $work['img'] ?>" class="img-fluid" 
                                                     alt="<?= $work['name'] ?>"></a>
                                          </div>
                                       </div>
                                    </div>
                                    <?php /* ?> 
                                    <div class="col-4 filtr-item pr-0 pb-3" data-category="<?= $work['cat'] ?>"
                                         data-sort="value"><div class="card">
                                          <a data-fancybox="gallery" href="images/<?= $work['img'] ?>" target="_blank">
                                             <img src="images/<?= $work['img'] ?>" class="img-fluid" 
                                                  alt="<?= $work['name'] ?>"></a>
                                       </div>
                                    </div>
                                    <?php
                                    */
                                 }
                                 ?>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card mb-4">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-12">
                              <h2 class="h3 wow fadeInLeft underline">
                                 <strong class="font-weight-bold">My Experience</strong>
                                 <i class="far fa-building float-right"></i>
                              </h2>
                           </div>
                           <div class="col-12">
                              <?php
                              $companies = [
                                  [
                                      'name' => 'Falconcity of Wonders, Dubai',
                                      'title' => 'Software Developer',
                                      'time' => 'November 2016 - Now',
                                      'tasks' => [
                                          'Develop Web Application as per the company\'s requirement [CodeIgniter].',
                                          'Design and develop and maintain websites of the sister companies.',
                                          'Develop email newsletters as per the design received from marketing team.',
                                          'Make the email campaigns.'
                                      ]
                                  ], [
                                      'name' => 'Menora Software, Koratty Infopark',
                                      'title' => 'Software Engineer',
                                      'time' => 'December 2015 - October 2016',
                                      'tasks' => [
                                          'Zend powered CRM for UK based company.',
                                          'Projects working from HTML/PSD conversion to the finished project.'
                                      ]
                                  ], [
                                      'name' => 'Fog Generation, Kadavanthra',
                                      'title' => 'Software Engineer',
                                      'time' => 'April 2015 - December 2015',
                                      'tasks' => [
                                          'Wordpress/Bootstrap projects in this company.',
                                          'Projects working from HTML/PSD conversion to the finished project.'
                                      ]
                                  ], [
                                      'name' => 'Jwimps Innovations, Aluva',
                                      'title' => 'Software Engineer',
                                      'time' => 'December 2012 - January 2015',
                                      'tasks' => [
                                          'Codeigniter projects in the company.',
                                          'Have done 1 Wordpress project, 1 Magento cart and 1 YII project.'
                                      ]
                                  ], [
                                      'name' => 'Shrishti Informatics and Brounsho Solutions',
                                      'title' => 'Web Developer',
                                      'time' => 'December 2011 - June 2012',
                                      'tasks' => [
                                          'At Shrishti, I have done project in Codeigniter and Bootstrap. ',
                                          'Done HTML site in Brounsho Solutions.'
                                      ]
                                  ], [
                                      'name' => 'Cast Solutions',
                                      'title' => 'Web Developer',
                                      'time' => 'June 2010 - December 2011',
                                      'tasks' => [
                                          'HTML and core PHP projects.',
                                          'Got and give guidance in PHP and HTML site.'
                                      ]
                                  ]
                              ];
                              ?>
                              <div class="row">
                                 <?php foreach ($companies as $company): ?>
                                    <div class="col-lg-6 ">
                                       <?php if (isset($company) and isset($company['name'])) { ?>
                                          <div class="card my-3">
                                             <div class="card-body">
                                                <h3 class="h4 wow fadeInLeft underline underline-slim">
                                                   <?php
                                                   echo '<strong>' . $company['name']
                                                   . '</strong> <br />';

                                                   $title = [];
                                                   if (isset($company['title'])) {
                                                      $title[] = $company['title'];
                                                   }
                                                   if (isset($company['time'])) {
                                                      $title[] = '<small>' . $company['time'] . '</small>';
                                                   }
                                                   if (isset($company['title']) || isset($company['time'])) {
                                                      echo implode(' | ', $title);
                                                   }
                                                   ?>
                                                   <i class="far fa-building float-right"></i>
                                                </h3>
                                                <?php
                                                if (isset($company['tasks']) and ( $company['tasks'] != '')) {
                                                   echo '<ul>';
                                                   foreach ($company['tasks'] as $task) {
                                                      echo '<li>' . $task . '</li>';
                                                   }
                                                   echo '</ul>';
                                                }
                                             }
                                             ?>
                                          </div>
                                       </div>
                                    </div>
                                 <?php endforeach; ?>
                              </div>
                              <div class="row">
                                 <div class="col-12">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <footer>
      </footer>

      <!-- SCRIPTS -->
      <!-- JQuery -->
      <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="node_modules/filterizr/dist/jquery.filterizr.min.js"></script>

      <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

      <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
      <script type="text/javascript">
         $(window).on('load', function () {
            // Default options
            var options = {
               animationDuration: 0.5, // in seconds
               filter: 'all', // Initial filter
               callbacks: {
                  onFilteringStart: function () { },
                  onFilteringEnd: function () { },
                  onShufflingStart: function () { },
                  onShufflingEnd: function () { },
                  onSortingStart: function () { },
                  onSortingEnd: function () { }
               },
               controlsSelector: '', // Selector for custom controls
               delay: 0, // Transition delay in ms
               delayMode: 'progressive', // 'progressive' or 'alternate'
               easing: 'ease-out',
               filterOutCss: {// Filtering out animation
                  opacity: 0,
                  transform: 'scale(0.5)'
               },
               filterInCss: {// Filtering in animation
                  opacity: 0,
                  transform: 'scale(1)'
               },
               layout: 'sameWidth', // See layouts
               multifilterLogicalOperator: 'or',
               selector: '.filtr-container',
               setupControls: true // Should be false if controlsSelector is set 
            }
            var filterizd = $('.filtr-container').filterizr(options);
         });
      </script>
   </body>
</html>
