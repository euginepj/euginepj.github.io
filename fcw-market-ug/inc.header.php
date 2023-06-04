<?php 
$script_name = $_SERVER['SCRIPT_NAME'];
if(strstr($script_name, '/')) { 
   $file_list = explode('/', $script_name); 
} else { 
   $file_list = explode('\\', $script_name); 
}
$file = end($file_list);
?>
<header>
   <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar ">
      <div class="container-fluid">
         <div class="row w-100">
            <div class="col-10 offset-1 d-flex">
               <!-- Navbar brand -->
               <a class="navbar-brand wow fadeInDown" data-wow-delay="0.4s" href="index.php">
                  <img src="img/logo-1.png" class="mx-3" title="" />
               </a>
               <div class="ml-auto my-auto">
                  <!-- Collapse button -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon">
                        <i class="fa fa-2x fa-bars" aria-hidden="true"></i>
                     </span>
                  </button>
                  <!-- Collapsible content -->
                  <div class="collapse navbar-collapse" id="basicExampleNav">
                     <!-- Links -->
                     <ul class="navbar-nav smooth-scroll">
                        <li class="nav-item wow fadeInDown" data-wow-delay="0.6s">
                           <a class="nav-link waves-effect waves-light" href="index.php"><span>Home</span></a>
                        </li>
                        <li class="nav-item wow fadeInDown" data-wow-delay="0.8s" >
                           <a class="nav-link waves-effect waves-light" href="about-us.php"><span>About Us</span></a>
                        </li>
                        <li class="nav-item wow fadeInDown" data-wow-delay="1s" >
                           <a class="nav-link waves-effect waves-light" href="//falconcity.com" 
                              target="_blank"><span>About Falconcity</span></a>
                        </li>
                        <li class="nav-item wow fadeInDown" data-wow-delay="1s" >
                           <a class="nav-link waves-effect waves-light" href="contact.php"><span>Contact Us</span></a>
                        </li>
                     </ul>
                     <?php /* ?>
                     <ul class="navbar-nav smooth-scroll">
                        <li class="nav-item wow fadeInDown" data-wow-delay="0.6s">
                           <a class="nav-link waves-effect waves-light" href="index.php"><span>Home</span></a>
                        </li>
                     </ul>
                     <?php */ ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </nav>
</header>

<?php 
if($file == 'index.php') { 
?>
<section id="banner" class="">
   <article class="w-100 h-100 vh-90">
      <div class="p-0 p-sm-4 py-5 py-sm-5 mt-5 vh-90">
         <div class="jarallax d-flex vh-85" data-jarallax data-speed="0.5">
            <img class="jarallax-img wow fadeIn" data-wow-duration="1.2s" src="img/shutterstock_565633822.jpg" alt="" data-jarallax-position="100% 0%" />
            <div class="container-fluid d-flex align-self-stretch" >
               <div class="row m-1 align-items-center w-100">
                  <div class="col-10 offset-1 d-block white-text">
                     <h1 class="white-text wow fadeInDown" data-wow-delay="0.3s"><span>Falconcity Market</span></h1>
                     <h2 class="white-text wow fadeInDown" data-wow-delay="0.6s">We provide the best for value.</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </article>
</section>
<?php 
} else {
?>
<section id="banner" class="">
   <article class="w-100 ">
      <div class="p-0 p-sm-4 py-5 py-sm-5 mt-5 vh-30">
         <div class="jarallax d-flex vh-45" data-jarallax data-speed="0.5">
            <img class="jarallax-img wow fadeIn" data-wow-duration="1.2s" src="img/shutterstock_565633822.jpg" alt="" data-jarallax-position="100% 0%" />
            <div class="container-fluid d-flex align-self-stretch" >
               <div class="row m-1 align-items-center w-100">
                  <div class="col-10 offset-1 d-block white-text">
                     <h1 class="white-text wow fadeInDown" data-wow-delay="0.3s"><span>Falconcity Market</span></h1>
                     <h2 class="white-text wow fadeInDown" data-wow-delay="0.6s">
                        The best value in the neighborhood.</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </article>
</section>
<?php 
} 
