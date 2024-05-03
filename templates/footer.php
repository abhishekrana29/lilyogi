<footer class="footer py-3 py-md-5">
 <link href="https://calendly.com/assets/external/widget.css" rel="stylesheet">
 <script src="https://calendly.com/assets/external/widget.js" type="text/javascript"></script>
 <div class="container-fluid d-flex justify-content-center">
  <div class="col-12 col-md-11 px-0">
   <div class="row" data-aos="zoom-in">

    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 footer-start__content">
     <div class="main-heading">
      <h2>Get in Touch</h2>
     </div>
     <!-- <div class="py-1 py-xl-4">
      <img src="assets/img/footer-curve-line.svg" class="img-fluid" />
     </div> -->
     <div class="curve-border" data-aos="zoom-in">
     <img src="assets/img/line-curve.svg" class="img-fluid" />
    </div>
     <div>
      <p>lilyogis.sabz@gmail.com</p>
      <p class="pt-lg-2">+91 98198 88881</p>
     </div>
     <div class="footer__social-links pt-3 pt-lg-5">
      <div>
       <a href="https://www.instagram.com/lilyogis_sabz/" target="blank">
        <img src="assets/img/socail-icon.svg" class="img-fluid" />
       </a>
      </div>
      <div>
       <a href="https://www.linkedin.com/company/li-l-yogis/" target="blank">
        <img src="assets/img/linkedin.svg" class="img-fluid" />
       </a>
      </div>
      <div>
       <a href="https://www.youtube.com/channel/UCTFHM_8zoIUZVIvVG4dTdzw" target="blank">
        <img src="assets/img/youtube.svg" class="img-fluid" />
       </a>
      </div>
      <div>
       <a href="https://www.facebook.com/lilyogis.sabz" target="blank">
        <img src="assets/img/facebook.svg" class="img-fluid" />
       </a>
      </div>
     </div>
    </div>
    <div class="col-md-6 footer-middle__content mb-4 mb-lg-0">
     <div>
      <h5 class="footer-sm__heading">Join our Community</h5>
      <div class="bg-form-control my-3 mt-xl-4 mb-xl-5">

       <!-- <form action="https://formsubmit.co/lilyogis.sabz@gmail.com" method="POST">
        <input type="hidden" name="_cc" value="ruchitadeshpande2023@gmail.com,yusufcardoz@gmail.com">
        <input type="hidden" name="_template" value="table">
        <input type="hidden" name="_subject" value="Email Subscribe">

        <input required type="email" class="form-control" placeholder="Your Email Address" name="Email Subscribe"/>
        <div class="form-control__img">
         <input type="image" src="assets/img/rocket.svg" class="img-fluid" />
        </div>
       </form> -->
       <!-- onclick="return demoCustom();" -->

        <input type="email" id="sub_email" class="form-control" placeholder="Your Email Address" name="Email Subscribe"/>
        <div class="form-control__img">
         <input type="image" onclick="submitSubscribe();" src="assets/img/rocket.svg" class="img-fluid" />
        </div>

      </div>
     </div>
     <div>
      <img src="assets/img/footer-logo.svg" class="img-fluid" />
     </div>
    </div>
    <div class="col-lg-3">
     <div>
      <h5 class="footer-sm__heading">Quick Links</h5>
      <ul class="footer-list mt-2 mt-xl-4">
       <li><a href="index.php" >Home</a></li>
       <li><a href="ourprograms.php" >Our Programs</a></li>
       <li><a href="becometeacher.php" >Become a Teacher</a></li>
       <li><a href="aboutus.php" >Our Story</a></li>
       <li><a href="shop.php" >Shop</a></li>
       <li><a href="blogs.php" >Our Blogs</a></li>
       <li><a href="sitemap.php" >Sitemap</a></li>

      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>
</footer>

<script>
 function playPauseAudio() {
  let audio = document.getElementById('sabrina-audio');
  let img_button = document.getElementById('audio-button');
  if (audio.duration > 0 && !audio.paused) {
   audio.pause();
   img_button.src = "assets/img/audio.svg"
  } else {
   audio.play();
   img_button.src = "assets/img/pause.png"
  }
 }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>

<script src="assets/aos/aos.js"></script>
<script src="assets/purecounter/purecounter.js"></script>


<script type="text/javascript" src="js/scripts.js"></script>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<script src="dist/js-snackbar.js?v=1.3"></script>
<!-- <script type="text/javascript" src="js/main.js"></script> -->


<script>

    function submitSubscribe() {

        var email = $("#sub_email").val();
        if(email==null || email=="" || !isEmail(email)){
            toaster("Enter Valid Email", "error");
            return false;
        }

        $.ajax({
            type: "POST",
            url: "sendData.php",
            data: { type: "subscribe", email: email },
            cache: false,
            success: function(data)
            {   
                toaster(data, "success");
                $("#sub_email").val("");
            },
            error:function(msg)
            {
                toaster(msg, "success");
            }

        });
    }

    $("#std_reg_form").submit(function(e) {
        
        e.preventDefault();

        var name = $("#std_name").val();
        var phone = $("#std_phone").val();
        var email = $("#std_email").val();
        var age = $("#std_age").val();
        var city = $("#std_city").val();

        if(email==null || email=="" || !isEmail(email)){
            toaster("Enter Valid Email", "error");
            return false;
        }else if(!validatePhone(phone)){
            toaster("Enter Valid Phone", "error");
            return false;
        }

        $.ajax({
            type: "POST",
            url: "sendData.php",
            data: { type: "std_regsiter", email: email, name: name, phone: phone, age: age, city: city },
            cache: false,
            success: function(data)
            {      
                $('#studentRegisterModal').modal('hide');
                $("#studentRegisterModal").hide();
                toaster(data, "success");
            }
        });

    });


    $("#thr_reg_form").submit(function(e) {
        
        e.preventDefault();

        var name = $("#thr_name").val();
        var phone = $("#thr_phone").val();
        var email = $("#thr_email").val();
        var city = $("#thr_city").val();

        if(email==null || email=="" || !isEmail(email)){
            toaster("Enter Valid Email", "error");
            return false;
        }else if(!validatePhone(phone)){
            toaster("Enter Valid Phone", "error");
            return false;
        }

        $.ajax({
            type: "POST",
            url: "sendData.php",
            data: { type: "thr_register", email: email, name: name, phone: phone, city: city },
            cache: false,
            success: function(data)
            {      
                $('#registerModal').modal('hide');
                $("#registerModal").hide();
                toaster(data, "success");
            }
        });

    });


    function toaster(message, type){
        SnackBar({
            message: message,
            dismissible: true,
            status: type,
            timeout: 3000,
            position: "tc",
            width: "500px"
        });
    }


    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function validatePhone(phone) {
        var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
        if (filter.test(phone)) {
            return true;
        }
        else {
            return false;
        }
    }
</script>

</body>

</html>