<?php
session_start();
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"Textile");
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Textile Management System</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="icon" href="index_images/favi.png">
  <!--Form icons on navigation bar-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src=" http://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript">
    $(window).on('scroll',function () {
      if ($(window).scrollTop()) {
        $('nav').addClass('black');
      }
      else {
        $('nav').removeClass('black');
      }
    })
  </script>
</head>
<body>
  <div style="height:80px;"></div>
  <div class="wrapper">
<div class="navbar">
  <nav>
    <div class="logo"><img src="index_images/favi.png" height="25px" width="25px">
<?php
  if(isset($_SESSION["s1"]))
  { ?>

     <a href="profile.php" id="pro" style="text-decoration:none;text-transform:uppercase;color:black;"><?php echo ($_SESSION["s1"]); ?></a>
   <?php
 }
  else{ ?>
    VR2D'S
  <?php }?>
</div>
    <ul>
      <li> <a href="index1.php" class="active"><i class="fa fa-fw fa-home"></i>Home</a> </li>
      <li> <a href="catalog.php">Catalogs</a> </li>
      <li> <a href="leadership.php">Leadership</a> </li>
<?php
  if(isset($_SESSION["s1"]))
  { ?>
      <li> <a href="destroy.php" class="text" >Logout</a></li>
    <?php }
    else{?>

      <li> <a href="login.php" class="text">Login/SignUp</a></li>
    <?php }?>
      <li> <a href="contactus.php"><i class="fa fa-fw fa-envelope"></i>Contact Us</a> </li>
    </ul>
  </nav>
</div>
    <section class="sec1"></section>
    <section class="content">
      <p id="date">  <font size="2px" color="grey">EST.1998</font> </p>
      <h2>About US</h2>
      <p> <img src="index_images/infra.jpg" >
        VR2D’S International - a premium global organisation is a prosperous wing and commercial business
journey of CO Group which was established in the year 1998. In the year 2008, the group introduced
its own brand VR2D’S. VR2D’S is active in the business of Import - Export of textile clothes. The
group also ventures into weaving, knitting, dyeing, digital printing. Today, with the combination of
innovation and excellence, VR2D’S Group remains as the most prosperous name for its clientele and
has earned the tag of being Socially Responsible by remaining active in communal welfare activities.
Each of VR2D’S entities are operated independently under the guidance and supervision of its
promoters, and with their vast experience and entrepreneurial spirit, VR2D’S has spawned into
several industries of National Importance and has moved from National to an International brand.
<h3>Dying</h3>
<p> <img src="index_images/dyeing.jpg" id="dyeing">
  Dyeing is the application of dyes or pigments on textile materials such as fibers, yarns, and fabrics
  with the objective of achieving color with desired fastness.
  Dyeing is normally done in a special solution containing dyes and particular chemical material.
  Dye molecules are fixed to the fibre by absorption, diffusion, or bonding with temperature and time being
   key controlling factors. The bond between dye molecule and fibre may be strong or weak, depending on the dye used.
   Dyeing and printing are different applications;
   in printing color is applied to a localized area with desired patterns and in dyeing it is applied to the entire textile.
The primary source of dye, historically, has been nature, with the dyes being extracted from animals or plants.
Since the mid-19th century, however, humans have produced artificial dyes to achieve a broader range of colors and to render the dyes more stable to washing and general use.
Different classes of dyes are used for different types of fiber and at different stages of the textile production process,
from loose fibers through yarn and cloth to complete garments.
Acrylic fibers are dyed with basic dyes, while nylon and protein fibers such as wool and silk are dyed with acid dyes, and polyester yarn is dyed with disperse dyes.
Cotton is dyed with a range of dye types, including vat dyes, and modern synthetic reactive and direct dyes.

</p>
<h3>Weaving</h3>
<p> <img src="index_images/weaving.jpg" id="weav">
  Weaving is a method of textile production in which two distinct sets of yarns or threads are interlaced at right angles to form a fabric or cloth. Other methods are knitting, crocheting, felting, and braiding or plaiting. The longitudinal threads are called the warp and the lateral threads are the weft or filling. The method in which these threads are inter-woven affects the characteristics of the cloth. Cloth is usually woven on a loom, a device that holds the warp threads in place while filling threads are woven through them. A fabric band which meets this definition of cloth (warp threads with a weft thread winding between) can also be made using other methods, including tablet weaving, back strap loom, or other techniques without looms.

The way the warp and filling threads interlace with each other is called the weave. The majority of woven products are created with one of three basic weaves: plain weave, satin weave, or twill. Woven cloth can be plain (in one colour or a simple pattern), or can be woven in decorative or artistic design.
</p>
<h3> Digital Printing</h3>
<p> <img src="index_images/digitalprinting.jpg" id="digital">Digital printing refers to methods of printing from a digital-based image directly to a variety of media. It usually refers to professional printing where small-run jobs from desktop publishing and other digital sources are printed using large-format and/or high-volume laser or inkjet printers. Digital printing has a higher cost per page than more traditional offset printing methods, but this price is usually offset by avoiding the cost of all the technical steps required to make printing plates. It also allows for on-demand printing, short turnaround time, and even a modification of the image (variable data) used for each impression. The savings in labor and the ever-increasing capability of digital presses means that digital printing is reaching the point where it can match or supersede offset printing technology's ability to produce larger print runs of several thousand sheets at a low price.

</p>
</section>
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

<!-- </script> -->
  </body>
  </html>
