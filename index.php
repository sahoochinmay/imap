<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Header links -->
  <?php include "./includes/headerlinks.php" ?>
  <title>iMail</title>
</head>

<body>
  <!-- Navigation Section -->
  <?php include "./includes/navbar.php" ?>
  <!---Header Section--->
  <section class="header">
    <div class="headerWrapper">
      <p>iMail is privacy by default</p>
      <h3>Welcome to a better internet where <span>privacy</span> and <span>freedom</span> come first.</h3>
      <img src="assets/images/download.svg" alt="">
    </div>
  </section>
  <!---Details Section-->
  <section class="details">
    <div class="row">
      <div class="leftSec">
        <h3>With iMail, your data belongs to you, not tech companies, governments, or hackers.</h3>
        <p>Our encrypted services help you fight for a better internet that is secure and private by default.</p>
        <a href="about.html" id="secondaryBtn">Know About Us</a>
      </div>
      <div class="rightSec">
        <img src="assets/images/bg2.svg" alt="">
      </div>
    </div>
  </section>
  <!----Domain Section-->
  <section class="domain">
    <div class="row">
      <div class="leftSec">
        <img src="assets/images/domain3.svg" alt="">
      </div>
      <div class="rightSec">
        <p>stay professional with <br> <span>email@imail.com</span> </p>
        <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          Voluptatibus impedit asperiores harum dolorem! Quia voluptatibus
          officia assumenda dolores
          perferendis suscipit enim exercitationem doloribus incidunt odio,
          dolorem commodi ea quasi laudantium?
        </small><br>
        <a href="signup.html">Get Your Mail Now <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
      </div>
    </div>
  </section>
  <!----FAQ Section-->
  <section class="faq">
    <div class="row">
      <div class="leftSec">
        <h2>Find the answers you need</h2>
        <div class="extra">
          <h4>Need more help?</h4>
          <p>Browse tips and step-by-step guides made for both new users and power users.</p>
          <a href="#">Help Center</a>
        </div>
      </div>
      <div class="rightSec">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                How does iMail keep my email communications secure and private?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                <code>.accordion-flush</code> class. This is the first item's accordion body.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Do you use my email for ads?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being
                filled with some actual content.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                How can i keep my emails even more safe and secure?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                happening here in terms of content, but just filling up the space to make it look, at least at first
                glance, a bit more representative of how this would look in a real-world application.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer section -->
  <?php include "./includes/footer.php" ?>
  <!-- JS Links -->
  <?php include "./includes/bottomJsLinks.php" ?>
</body>

</html>