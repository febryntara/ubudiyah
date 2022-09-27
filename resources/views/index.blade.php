
@include('include/header')

  <!-- Banner Start here -->
  <section class="banner banner-three">
    <div class="banner-slider swiper-container">
      <div class="swiper-wrapper">
        <div class="banner-item slide-one swiper-slide">
          <div class="banner-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="text-center">
                <div class="banner-content">
                  <h3>Assalamu'alaikum Wr. Wb.</h3>
                  <h3>Welcome to MDA Ubudiyah</h3>
                  <p><b>Belajar, Bermain, dan Beribadah.</b></p>
                   
                </div><!-- banner-content -->
              </div>
            </div>
          </div><!-- container -->
        </div><!-- slide item -->
          <div class="banner-item slide-two swiper-slide">
          <div class="banner-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="text-center">
                <div class="banner-content">
                  <h3>Assalamu'alaikum Wr. Wb.</h3>
                  <h3>Welcome to MDA Ubudiyah</h3>
                  <p><b>Belajar, Bermain, dan Beribadah.</b></p>
                   
                </div><!-- banner-content -->
              </div>
            </div>
          </div><!-- container -->
        </div><!-- slide item -->
          <div class="banner-item slide-three swiper-slide">
          <div class="banner-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="text-center">
                <div class="banner-content">
                  <h3>Assalamu'alaikum Wr. Wb.</h3>
                  <h3>Welcome to MDA Ubudiyah</h3>
                  <p><b>Belajar, Bermain, dan Beribadah.</b></p>
                 
                </div><!-- banner-content -->
              </div>
            </div>
          </div><!-- container -->
        </div><!-- slide item -->

      </div><!-- swiper-wrapper -->
      <div class="swiper-pagination"></div>
    </div><!-- swiper-container -->
  </section><!-- banner -->
  <!-- Banner End here -->


  <!-- About Start here -->
  <section class="about about-two padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="about-image">
            <img src="images/kartun anak muslim.png" width="20" alt="about image" class="img-responsive">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <h3>About MDA Ubidyah</h3>
            <p>Madrasah Diniyah Awaliyah Ubudiyah atau yang biasa dikenal MDA Ubudiyah
              merupakan tempat belajar ilmu agama islam setara dengan SD atau sekolah dasar yang berlokasi 
            di Jalan Raya Mas, Peliatan, Ubud. Selain menjadi tempat belajar mengajar, MDA Ubudiyah juga
            bisa menjadi tempat ibadah dan berbagai kegiatan yang berhubungan dengan hari raya umat muslim.</p>
            <ul>
            <!--  <li><a href="#" class="button-default">Read More</a></li> -->
            
            </ul>
          </div><!-- about content -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- about -->
  <!-- About End here -->

  <!-- facility Start here -->
  <section class="facility facility-three padding-120">
    <div class="container">
      <div class="section-header">
        <h3>Leader Profile</h3>
       
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="facility-item">
            <div class="thumbnail">
						  <img src="images/teachers/IMG-20220323-WA0006.jpg" width="200" height="150">
                <h4>Hendra Prawoto</h4>
                <p>Ketua Umum MDA Ubudiyah</p>
            </div>
          </div><!-- facility item -->
        </div>
        <div class="col-md-4">
        <div class="facility-item">
            <div class="thumbnail">
						  <img src="images/teachers/IMG-20220323-WA0006.jpg" width="200" height="150">
                <h4>Rumidi</h4>
                <p>Kepala Pendidikan MDA Ubudiyah</p>
            </div>
          </div><!-- facility item -->
        </div>
        <div class="col-md-4">
        <div class="facility-item">
            <div class="thumbnail">
						  <img src="images/teachers/IMG-20220323-WA0006.jpg" width="200" height="150">
                <h4>Ustad Abdul Karim</h4>
                <p>Kepala Sekolah MDA Ubudiyah</p>
            </div>
          </div><!-- facility item -->
        </div>
        
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- facility -->
  <!-- facility End here -->
  

  <section class="contact contact-page">
    <div class="contact-details padding-120">
      <div class="container">
      <div class="section-header">
        <h3>Criticism and Suggestions</h3><br><br>
       
      </div>
        <div class="row">
          
          <div class="col-lg-12 col-md-6 col-xs-12">
            <form class="contact-form">
              
              <textarea rows="5" class="contact-input">Kritik</textarea>
              <textarea rows="5" class="contact-input">Saran</textarea>
              <input type="submit" name="submit" value="Send Message" class="contact-button">
            </form>
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- contact-details -->
  </section>
 

  @include('include/footer')
