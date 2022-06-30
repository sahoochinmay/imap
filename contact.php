<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Header links -->
  <?php include "./includes/headerlinks.php" ?>
  <title>Support - iMail</title>
</head>

<body>
  <!-- Navigation Section -->
  <?php include "./includes/navbar.php" ?>
  <div class="contactPage">
    <h2>How can we help You ?</h2>
    <div class="rowWrapper">
      <form action="">
        <label for="topic">Topic</label><br>
        <input type="text" name="" id="topic" placeholder="Enter any topic here..." required>
        <label for="email">Email Address</label><br>
        <input type="email" name="" id="email" placeholder="Let us know where we can reach you" required>
        <label for="message">Message</label><br>
        <textarea name="" id="message" cols="30" rows="10" placeholder="Please mention your issue..." required></textarea>
        <button type="submit" id="secondaryBtn">Send Message</button>
      </form>
    </div>
  </div>
  <div class="map">
    <div class="rowWrapper">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14952.168785733476!2d85.87835723955077!3d20.46345999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a190d7a181999fd%3A0xe48e3475c7591d81!2sRavenshaw%20University%2C%20Cuttack!5e0!3m2!1sen!2sin!4v1656180798381!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <!-- Footer section -->
  <?php include "./includes/footer.php" ?>
  <!-- JS Links -->
  <?php include "./includes/bottomJsLinks.php" ?>
</body>

</html>