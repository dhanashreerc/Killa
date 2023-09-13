<?php

    include "logic.php";

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unexplored Forts of Maharashtra</title>
    <link rel="stylesheet" href="../css/viewblog.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <nav class="navbar">
    <div class="content">
      <div class="logo"><a href="../html files/killa.html">Killa</a></div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="../html files/killa.html">Home</a></li>
        <li><a href="#FORTS">Forts</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="as.php">About-Us</a></li>
        <li><a href="loginpage2.php">Account</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>

<?php foreach($query as $q){?>
		<div class="banner2">
		  <div class="about">
			<div class="content">
			<div class="title">
			<br>
			 <?php echo $q['title'];?></h1></div>
			  <p><b>
			<?php echo $q['content'];?>
		  <h2 id="FORTS" class="title">
		  ~ <?php echo $q['user'];?>
		  </h2>
			  </b></p>
			</div>
			</div>
		  </div>


	
	
<?php } ?> 
<!-------- footer -------->

<div class="footer">
    <div class="container1">
    <div class="row">
    <div class="footer-col-1">
    <h3>Having Trouble ?</h3>
    <p><b>Click the About-Us Image for more Info!</b></p>
    <div class="app-logo">
        <a href="#" target="_blank">
            <img src="../images/about-us.png"></a>
    </div>
    </div>
    <div class="footer-col-2">
        <a href="../html files/killa.html"><img src="../images/logo.png"></a>
    <p><b>Our purpose is to share information</b></P>
    </div>
    <div class="footer-col-3">
    <h3>Useful Links</h3>
    <ul>
    <li><a href="https://www.facebook.com/sahyadripratishthaan/" target="_blank"><p><b>Donate</b></p></a></li>
    <li><a href="https://www.treksandtrails.org/blog/category/forts-of-maharashtra/" target="_blank"><p><b>Blog Post</b></p></a></li>
    <li><a href="https://www.maharashtratourism.gov.in/" target="_blank" ><p><b>MTDC</b></p></a></li>
    <li><a href="../html files/as.html" target="_blank"><p><b>Need Help</b></p></a></li>
    </ul>
    </div>
    <div class="footer-col-3">
    <h3>Get More Information</h3>
    <ul>
    <li><a href="https://www.facebook.com/GadKilleSafar" target="_blank"> <p><b>Facebook</b></p> </a> </li>
    <li><a href="" target="_blank"> <p><b> Blogs </b></p> </a> </li>
    <li><a href="https://www.instagram.com/mi_durg_veda/" target="_blank"> <p><b>Instagram</b></p> </a> </li>
    <li><a href="https://www.youtube.com/channel/UC4BFta04-H7yVIa3045chXA" target="_blank"> <p><b> YouTube </b></p> </a> </li>
    </ul>
    </div>
    </div>
    <hr>
    <p class="copyright"><b>Copyright 2020 - Unexplored Forts</b></p>
    </div>
    </div>

  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menu = document.querySelector(".menu-list");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      menu.classList.add("active");
      menuBtn.classList.add("hide");
      cancelBtn.classList.add("show");
      body.classList.add("disabledScroll");
    }
    cancelBtn.onclick = ()=>{
      menu.classList.remove("active");
      menuBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      body.classList.remove("disabledScroll");
    }

    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>

</body>
</html>