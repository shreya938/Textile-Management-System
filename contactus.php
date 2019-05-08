<?php
session_start();
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"Textile");

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $query1= "INSERT INTO `contact_form`(`name`, `email`, `phone`, `description`) VALUES ('$name','$email','$phone','$message')";
    $result=mysqli_query($con,$query1);
  ?>
<script type="text/javascript">alert("Your request is recorded")</script>
  <?php
  }?>
<html>
<head><title>C O N T A C T </title>
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="icon" href="index_images/favi.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src=" http://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
      $(window).on('scroll',function () {
        if($(window).scrollTop())
         {
          $('nav').addClass('black');
        }
        else
        {
          $('nav').removeClass('black');
        }
      })
    </script>
</head>
<body>
    <div class= "wrapper">
        <div class="navbar">
            <nav>
                <div class="logo"><img src="index_images/favi.png" height="25px" width="25px"> VR2D's</div>
                <ul>
                  <li> <a href="index1.php" class="active"><i class="fa fa-fw fa-home"></i>Home</a> </li>
                  <li> <a href="catalog.php">Catalogs</a> </li>
                  <li> <a href="leadership.php">Leadership</a> </li>
                  <?php
                    if(isset($_SESSION["s1"]))
                    { ?>
                        <li> <a href="destroy.php" class="text" id="log">Logout</a></li>
                      <?php }
                      else{?>

                        <li> <a href="login.php"  onclick="javascript:login()" class="text" id="log">Login/SignUp</a></li>
                      <?php }?>

                  <li> <a href="contactus.php"><i class="fa fa-fw fa-envelope"></i>Contact Us</a> </li>
                </ul>
              </nav>
        </div>
        <div class="image">
          <img src="index_images/tm.jpg" height="500px" width="100%">
          <div class="c_1">
          <pre> <h4 style="margin-top:5px;">C O N T A C T   U S</h4></pre>
            <hr>
          </div>
          <div class="second">
            <div class="left">
                <img src="index_images/office.jpg">
                <br><br>
                <b>SURAT HEAD OFFICE</b><br><br>
                 VR2Ds<br>
                 Near Yash Plaza, Varachha Road<br>
                Surat-395006,Gujarat,India<br>
                <br><br>
                T. +91 261 2669884<br>
                T. +91 9428743472 (24 hours)<br>
                E. info@vr2ds.com


             </div>

        </div>
            <div id="one" >
              <br><br><br><br><br><br><br><br>
              <br><br><br><br><br><br><br><br><br>
              <br>
              <br>



              <font size="5"><b>OFFICES</b></font>
            </div>
        <div id="two" >

            <span class="block">
                <b>ELEGANT DESIGNS</b><br>
                Ekta-2,Opp. Regent Arcade,<br>
                Ghod Dod Road,Surat-395007<br>
                Gujarat,India<br>
                <br>
                T. +91 261 2669883<br>
                E. elegantdesigns@gmail.com

               </span>
               <span class="block">
                  <b>ELEGANT DESIGNS</b><br>
                  Ekta-2,Opp. Regent Arcade,<br>
                  Ghod Dod Road,Surat-395007<br>
                  Gujarat,India<br>
                  <br>
                  T. +91 261 2669883<br>
                  E. elegantdesigns@gmail.com

                 </span>
                 <span class="block">
                    <b>ELEGANT DESIGNS</b><br>
                    Ekta-2,Opp. Regent Arcade,<br>
                    Ghod Dod Road,Surat-395007<br>
                    Gujarat,India<br>
                    <br>
                    T. +91 261 2669883<br>
                    E. elegantdesigns@gmail.com

                   </span>
        </div>
        <div class="container">
            <form id="contact" action="" method="post">
              <h3>Quick Contact</h3>
              <h4>Contact us today, and get reply with in 24 hours!</h4>
              <fieldset>
                <input placeholder="Your name" type="text" tabindex="1" name="name">
              </fieldset>
              <fieldset>
                <input placeholder="Your Email Address" type="email" tabindex="2" required name="email">
              </fieldset>
              <fieldset>
                <input placeholder="Your Phone Number" type="tel" tabindex="3" required name="phone">
              </fieldset>
              <fieldset>
                <textarea placeholder="Type your Message Here...." tabindex="5" required name="message"></textarea>
              </fieldset>
              <fieldset>
                <button name="submit" type="submit" id="contact-submit">Submit</button>
              </fieldset>
            </form>
          </div>

          <footer>
            <section class="base">
              <article class="same">
                <h4>INFORMATION</h4>
                <ul>
                  <li><i class="right"></i> <a href="index1.php" class="text">Home</a></li>
                  <li><i class="right"></i> <a href="catalog.php" class="text">Catalogs</a></li>
                  <li><i class="right"></i> <a href="leadership.php" class="text">Leadership</a></li>
                  <li><i class="right"></i> <a href="contactus.php" class="text">Contact Us</a></li>

                </ul>
              </article>
              <article class="same">
                <h4>ADDRESS</h4>
              <p>VR2D's <br>
                Dr, R K Desai Marg, <br>
                Opp. Mission Hospital,<br>
                Athwalines, Athwa,<br>
                Surat, Gujarat 395001 <br>
              </p>
                </article>
                <article class="same">
                  <h4>CONTACT</h4>
                  <p> <i class="fa fa-fw fa-mobile" ></i> +91-9723321000 </p>
                  <p> <i class="fa fa-fw fa-mobile" style="margin-top:5px;"></i> +91-9426131900 </p>
                  <p> <i class="fa fa-fw fa-envelope" style="margin-top:5px;"></i> rijiyadarshil@gmail.com </p>
                  </article>
              </section>
          </footer>
    <script type="text/javascript" src="javascript/index.js"></script>
</body>
</html>
