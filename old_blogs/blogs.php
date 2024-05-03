<?php include('templates/header.php'); ?>
<section class="masthead section-main-blog  mx-xl-3">
 <div class="container-fluid">
  <div class="row">
   <div class="col-lg-6">
    <!-- <p class="primary-color" data-aos="zoom-in">JALAGATA</p> -->
    <h1 class="main-heading primary-color" data-aos="zoom-in">Blogs</h1>
    <div class="curve-border" data-aos="zoom-in">
     <img src="assets/img/line-curve.svg" class="img-fluid" />
    </div>
    <p class="main-content light-color" data-aos="zoom-in">
     Stories, deep dives, activites, parenting, tips and tricks.
    </p>
   </div>
   <div class="col-lg-6">

   </div>
  </div>
  <?php
  // $total_pages = 10;
  $no_of_pagination = 3;
  if (isset($_GET['pageno'])) {
   $pageno = $_GET['pageno'];
  } else {
   $pageno = 1;
  }

  ?>
  <!-- <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if ($pageno <= 1) {
                    echo 'disabled';
                   } ?>">
            <a href="<?php if ($pageno <= 1) {
                      echo '#';
                     } else {
                      echo "?pageno=" . ($pageno - 1);
                     } ?>">Prev</a>
        </li>
        <li class="<?php if ($pageno >= $no_of_pagination) {
                    echo 'disabled';
                   } ?>">
            <a href="<?php if ($pageno >= $no_of_pagination) {
                      echo '#';
                     } else {
                      echo "?pageno=" . ($pageno + 1);
                     } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $no_of_pagination; ?>">Last</a></li>
    </ul> -->

  <div class="row py-4 py-lg-5 blog-row-gap">
   <?php if ($pageno == 1) { ?>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_1.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         How to get fit with your family?
        </h4>
        <div>
         <a href="blog-2.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_2.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         How Yoga helps kids in social distancing during a pandemic
        </h4>
        <div>
         <a href="blog-3.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_12.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Marina animal yoga poses
        </h4>
        <div>
         <a href="blog-1.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_4.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         5 Fun Yoga Breaths to Practise with Children.
        </h4>
        <div>
         <a href="blog-4.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_5.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         5 simple yoga poses you can do with kids
        </h4>
        <div>
         <a href="blog-5.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_6.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Top 5 Yoga Poses for Kids
        </h4>
        <div>
         <a href="blog-6.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_7.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Allow kids to Discover Yoga and Reduce Screen Time
        </h4>
        <div>
         <a href="blog-7.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_8.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Benefits of Yoga for kids
        </h4>
        <div>
         <a href="blog-8.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_9.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Seated Side Bends/ Parvatasana
        </h4>
        <div>
         <a href="blog-9.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
   <?php } ?>
   <?php if ($pageno == 2) { ?>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_10.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Mats: Where A Yogi Does Sadhana
        </h4>
        <div>
         <a href="blog-10.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_11.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Is your Yoga PVC mat doing you more harm than good??
        </h4>
        <div>
         <a href="blog-11.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_012.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Another Me: Sabrina, The Storyteller
        </h4>
        <div>
         <a href="blog-12.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_13.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Faith!
        </h4>
        <div>
         <a href="blog-13.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_14.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Thank you Secret Santa!!!
        </h4>
        <div>
         <a href="blog-14.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_15.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Yoga Outdoor!
        </h4>
        <div>
         <a href="blog-15.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_16.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         The Hanging Namaste Pose!
        </h4>
        <div>
         <a href="blog-16.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_17.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Being in the moment!!
        </h4>
        <div>
         <a href="blog-17.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_18.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         A way of life
        </h4>
        <div>
         <a href="blog-18.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <?php } ?>
   <?php if ($pageno == 3) { ?>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_19.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Dharma (Duty)
        </h4>
        <div>
         <a href="blog-19.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
   </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_20.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Balanced state of mind
        </h4>
        <div>
         <a href="blog-20.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_21.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         The art of appreciation
        </h4>
        <div>
         <a href="blog-21.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_22.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Staying calm
        </h4>
        <div>
         <a href="blog-22.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-12 col-lg-4 ">
     <div>
      <div class="blog-card" data-aos="zoom-in">
       <div class="blog-img">
        <img src="assets/img/blog_23.jpg" class="img-fluid" />
       </div>
       <div class="blog-content pt-2 pt-xl-3">
        <p class="blog-tag light-color">Label | February 25, 2020</p>
        <h4 class="main-heading primary-color pt-xl-2 pb-xl-3 pb-3">
         Gratitude
        </h4>
        <div>
         <a href="blog-23.php">
          <button class="btn btn-transparent btn-outline-primary" data-aos="zoom-in">Read more</button>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>

   <?php } ?>
  </div>
  <div>

   <nav aria-label="...">
    <ul class="pagination custom-pagination justify-content-end">
     <li class="page-item">
      <a class="page-link" tabindex="-1" aria-disabled="true" href="?pageno=1">First</a>
     </li>
     <?php for ($i = 1; $i <= $no_of_pagination; $i++) { ?>
      <li class="page-item <?php if ($i == $pageno) echo 'active' ?>"><a class="page-link" href="?pageno=<?php echo $i; ?>"><?php echo $i; ?></a></li>
     <?php } ?>
     <li class="page-item">
      <a class="page-link" href="?pageno=<?php echo $no_of_pagination; ?>">Last</a>
     </li>
    </ul>
   </nav>
  </div>
 </div>
</section>
<section class="section-newsletter mx-xl-3 mb-xl-5 mt-xl-4 my-3">
 <div class="container-fluid">
  <div class="row justify-content-center align-items-center bg-success py-3 py-xl-0 pb-xl-0 pt-xl-5">
   <div class="col-lg-3 text-center d-none d-lg-block" data-aos="zoom-in">
    <img src="assets/img/blog-car-1.svg" class="img-fluid" />
   </div>
   <div class="col-lg-6">
    <div>
     <h2 class="main-heading text-center" data-aos="zoom-in">Newsletter</h2>
    </div>
    <div class="py-xl-3">
     <p class="main-block text-center" data-aos="zoom-in">
      Don’t be left behind...
     </p>
    </div>
    <div class="newsletter__grid mt-2 mt-lg-0">
     <form action="https://formsubmit.co/lilyogis.sabz@gmail.com" method="POST">
      <input type="hidden" name="_cc" value="ruchitadeshpande2023@gmail.com,yusufcardoz@gmail.com">
        <input type="hidden" name="_template" value="table">
        <input type="hidden" name="_subject" value=" Email Subscribe">

      <div data-aos="zoom-in">
       <input required type="text" class="form-control" name="Email Subscribe" placeholder="Enter your email" />
      </div>
      <div class="my-3 my-lg-5" data-aos="zoom-in">
       <button class="btn btn-secondary" type="submit">Subscribe</button>
      </div>
     </form>
    </div>
   </div>
   <div class="col-lg-3 text-center d-none d-lg-block" data-aos="zoom-in">
    <img src="assets/img/blog-car-2.svg" class="img-fluid" />
   </div>
  </div>
 </div>
</section>

<?php include('templates/footer.php'); ?>