<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Falconcity Markets</title>

      <?php
      include './inc.header-files.php';
      ?>
   </head>
   <body>
      <?php
      include './inc.header.php';
      ?>

      <section id="contact" class="pb-5">
         <div class="container-fluid">
            <div class="row">
               <div class="col-10 offset-1 d-block">
                  <div class="row m-4 mb-0 my-0">
                     <div class="col-12">
                        <h1 class="wow fadeInLeft text-center underline font-weight-bold">Sitemap</h1>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-10 offset-1 d-block">
                  <div class="row m-4 mb-0 my-0" style="margin-bottom: 0 !important">
                     <div class="col-8 offset-2">
                        <div class="d-block justify-content-center ">
                           <div class="list-group">
                              <?php
                              $links = [
                                  ['link' => 'index.php', 'title' => 'Home Page'],
                                  ['link' => 'about-us.php', 'title' => 'About Falconcity Market'],
                                  ['link' => '//falconcity.com', 'title' => 'Falconcity Site'],
                                  ['link' => 'privacy-policy.php', 'title' => 'Privacy Policy'],
                                  ['link' => 'terms-conditions.php', 'title' => 'Terms & Conditions'],
                                  ['link' => 'sitemap.php', 'title' => 'Sitemap'],
                                  ['link' => 'contact.php', 'title' => 'Contact Us']
                              ];
                              $i = '0';
                              foreach ($links as $link) {
                                 ?>
                                 <a class="list-group-item list-group-item-action 
                                    flex-column align-items-start wow fadeInLeft"
                                    data-wow-delay="<?= ($i += 0.2) ?>s" 
                                    href="<?= $link['link'] ?>" ><div class="w-100 justify-content-between">
                                       <h2 class="h6 m-0"><?= $link['title'] ?></h2>
                                    </div>
                                 </a>
                                 <?php
                              }
                              ?>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </section>
      <?php
      include './inc.footer.php';
      ?>
   </body>
</html>