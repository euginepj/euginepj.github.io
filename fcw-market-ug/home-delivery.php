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
                  <div class="row m-4 my-5">
                     <div class="col-12 col-lg-12">
                        <div class="card border whitebox rounded white">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-12">
                                    <h1 class="h2 wow fadeInLeft underline mb-4">Home 
                                       <span class="font-weight-bold">Delivery</span></h1>
                                 </div>
                                 <div class="col-12">
                                    <p>The delivery undet the 'Home Delivery' is limited within the falconcity compound. </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!---<div class="col-md-5">
                        <div class="view overlay">
                           <img class="img-thumbnail d-none d-lg-block wow fadeInRight" data-wow-delay="0.8s" src="img/shutterstock_613237358.jpg" />
                           <div class="mask flex-center waves-effect waves-light rgba-white-light"></div>
                        </div>
                     </div>-->
                  </div>
                  <div class="row m-4 my-5">
                     <div class="col-12 col-lg-12">
                        <div class="card border whitebox rounded white">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-12">
                                    <h1 class="h2 wow fadeInLeft underline mb-4">Home 
                                       <span class="font-weight-bold">Delivery</span></h1>
                                 </div>
                                 <div class="col-12">
                                    <form>
                                       <div class="row">
                                          <div class="col-12 col-lg-6">
                                             <div class="md-form wow fadeInLeft" data-wow-delay="0.3s">
                                                <label class="black-text" for="text-name">Name</label>
                                                <input type="text" id="text-name" class="form-control name-text">
                                                <div class="error-in-name"></div>
                                             </div>
                                             <div class="md-form wow fadeInLeft" data-wow-delay="0.3s">
                                                <label class="black-phone" for="text-name">Phone</label>
                                                <input type="text" id="text-phone" class="form-control phone-text">
                                                <div class="error-in-phone"></div>
                                             </div>
                                             <div class="md-form wow fadeInLeft" data-wow-delay="0.3s">
                                                <label class="black-text" for="text-email">Email</label>
                                                <input type="email" id="text-email" class="form-control email-text">
                                                <div class="error-in-email"></div>
                                             </div>
                                          </div>
                                          <div class="col-12 col-lg-6">
                                             <div class="md-form wow fadeInLeft" data-wow-delay="1.2s">
                                                <label for="text-address">Address</label>
                                                <textarea type="text" class="md-textarea form-control address-text"
                                                          id="text-address" rows="5"></textarea>
                                                <div class="error-in-address"></div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <hr />
                                             <h2 class="h5 wow fadeInLeft">Product List</h2>
                                             <div class="table-responsive">
                                                <table class="table table-bordered product-table">
                                                   <thead class="grey lighten-5">
                                                      <tr>
                                                         <th class="p-2 font-weight-bold" style="width: 60%">Product Name</th>
                                                         <th class="p-2 font-weight-bold">Quantity</th>
                                                         <th class="p-2" style="width: 130px">
                                                            <span class="btn btn-elegant btn-rounded add-row 
                                                                  p-1 px-3 m-0 text-capitalize">
                                                               <i class="fas fa-plus"></i> Product</span>
                                                         </th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td class="p-2">
                                                            <input type="text" class="form-control prd-text p-1 font-small"
                                                                   placeholder="Enter Product Name" id="text-name" 
                                                                   name="prd[]" >
                                                         </td>
                                                         <td class="p-2">
                                                            <input type="text" class="form-control qty-text p-1 font-small"
                                                                   placeholder="Enter Quantity" id="text-name" name="qty[]">
                                                         </td>
                                                         <td class="p-2">
                                                            <span class="btn btn-danger btn-rounded remove-row 
                                                                  p-1 px-3 m-0 mt-1 text-capitalize">
                                                               <i class="fas fa-minus"></i> Product</span>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             <div class="error-in-form"></div>
                                          </div>
                                       </div>

                                       <div class="form-group row wow fadeInLeft">
                                          <div class="col-sm-12 text-right">
                                             <button type="button" class="btn btn-dark-green btn-send-request px-4 py-2">
                                                <i class="fas fa-paper-plane mr-2"></i> Request <span class="fa-icon"></span></button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!---<div class="col-md-5">
                        <div class="view overlay">
                           <img class="img-thumbnail d-none d-lg-block wow fadeInRight" data-wow-delay="0.8s" src="img/shutterstock_613237358.jpg" />
                           <div class="mask flex-center waves-effect waves-light rgba-white-light"></div>
                        </div>
                     </div>-->
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php
      include './inc.footer.php';
      ?>
      <script type="text/javascript">

         function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
         }

         $(document).ready(function () {

            $('.add-row').on('click', function () {
               $row = '<tr><td class="p-2">' +
                       '<input type="text" class="form-control prd-text p-1 font-small" ' +
                       'id="text-name" name="prd[]" placeholder="Enter Product Name"></td>' +
                       '<td class="p-2"><input type="text" class="form-control qty-text p-1 font-small" ' +
                       'id="text-name" name="qty[]" placeholder="Enter quantity"></td>' +
                       '<td class="p-2"><span class="btn btn-danger btn-rounded remove-row p-1 px-3 m-0 mt-1 ' +
                       'text-capitalize"><i class="fas fa-minus"></i> Product</span></td></tr>';
               $('.product-table tbody').append($row);
            });
            $(document).on('click', '.remove-row', function () {
               if ($('.product-table tbody tr').length > 1) {
                  $(this).parents('tr').remove();
               }
            });

            $(document).on('click', '.btn-send-request', function () {
               var name = $('.name-text').val();
               var phone = $('.phone-text').val();
               var email = $('.email-text').val();
               var address = $('.address-text').val();
               var isProduct = false;
               var products = [];
               
               $('.product-table tbody tr').each(function () {
                  $that = $(this);
                  $prd = $that.find('.prd-text').val();
                  $qty = $that.find('.qty-text').val();
                  $product = {};
                  $product['name'] = $prd;
                  $product['qty'] = $qty;
                  products.push($product);
                  isProduct = true;
               });

               if ((name != "") && (phone != "") && (address != "") && isProduct && (( email=='') ||
                       ((email != "") && isEmail(email))) ) {
                  
                  $('.fa-icon').html('<i class="fas fa-spinner fa-spin"></i>');
                  $('.error-in-form').html('');

                  // Thanks message that will self distruct within 15 seconds. 
                  $('.error-in-form').html('<div class="alert alert-info alert-dismissible" id="message" role="alert">' +
                          '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                          '<span aria-hidden="true">&times;</span></button>' +
                          '<strong>Success!</strong> Thank you for messageing us. We will soon get back to you. </div>');
                  $('.error-in-name').html('');
                  $('.error-in-phone').html('');
                  $('.error-in-email').html('');
                  $('.error-in-address').html('');

                  $.ajax({
                     type: "GET",
                     dataType: "json",
                     url: "send-message.php",
                     data: {name: name, email: email, phone: phone, address: address, products: products},
                     success: function (result) {
                        if (result.status === 'success') {
                           $('.name-box').val('');
                           $('.phone-box').val('');
                           $('.email-box').val('');
                           $('.address-box').val('');
                           $('.prd-text').val('');
                           $('.qty-text').val('');
                           $('html, body').animate({ scrollTop: $("#message").offset().top });
                           $('.btn-send-request').addClasss('btn-sent-request');
                           $('.btn-sent-request').removeClasss('btn-send-request');
                           $('.fa-icon').html('');
                        }
                     }
                  });
               } else {
                  $('.error-in-form').html('<div class="alert alert-danger alert-dismissible" role="alert">' +
                          '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                          '<span aria-hidden="true">&times;</span></button>' +
                          '<strong>Warning!</strong> Please Fill The Details. </div>');
                  if (name == "") { // Error in Name;
                     $('.error-in-name').html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                             '<span aria-hidden="true">&times;</span></button>' +
                             '<strong>Warning!</strong> Please Enter Your Name. </div>');
                  } else { // No Error in Name;
                     $('.error-in-name').html('');
                  }
                  if (phone == "") { // Error in Phone;
                     $('.error-in-phone').html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                             '<span aria-hidden="true">&times;</span></button>' +
                             '<strong>Warning!</strong> Please Enter Your Phone. </div>');
                  } else { // No Error in Phone;
                     $('.error-in-phone').html('');
                  }
                  if (( email=='') || ((email != "") && isEmail(email))) { 
                     // No Error in Email; 
                     $('.error-in-email').html('');
                  } else { 
                     // Error in Email;
                     $('.error-in-email').html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                             '<span aria-hidden="true">&times;</span></button>' +
                             '<strong>Warning!</strong> Please Enter a Valid Email. </div>');
                  }
                  if (address == "") { // Error in Message;
                     $('.error-in-address').html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                             '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                             '<span aria-hidden="true">&times;</span></button>' +
                             '<strong>Warning!</strong> Please Enter Address. </div>');
                  } else { // No Error in Message;
                     $('.error-in-message').html('');
                  }
               }
               return false;
            });
         });
      </script>
   </body>
</html>