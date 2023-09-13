<?php

    include "logic.php";
	

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unexplored Forts of Maharashtra</title>
    <link rel="stylesheet" href="../css/blog.css">
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
        <li><a href="../html files/killa.html#FORTS">Forts</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="as.php">About-Us</a></li>
        <li><a href="loginpage2.php">Account</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>

<div class="banner1">
  <div class="about">
    <div class="content">
    <div class="title"><br>Explore the UNexplored</div>
      <p><b>Welcome to The Unexplored Forts of Maharashtra. A blog where we are going to give you a Detailed Information about the Forts which are being explored less but are important to know. Providing rich history and it's Cultures, you will get a complete information of the forts which are standing still showing it's glory.
      </b></p>
      <div class="btn">
        <a href="loginpage1.php">Post your own Blog !! &#8594;</a>
    </div>
    </div>
    </div>
  </div>


<div class="container mt-5">

        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php }?>
        <?php } ?> 

        <!-- Create a new Post button -->
       <h2 id="FORTS" class="title">Latest Blogs...</h2>

        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                            <a href="viewblog.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
	<br><br>
    </div>

  <!-------- featured forts 
<div class="categories">
    <div class="small-container">
    <h2 id="FORTS" class="title">Featured Forts</h2>
    <div class="row">
    <div class="col-3">
    <a href="vishalgad.html" target="_blank">  
    <img style="border:6px outset #a1a19f;" src="Vishalgad\v1.png">
    <center><h4>Vishalgad</h4></center></a>  
    </div>
    <div class="col-3">
    <a href="" target="_blank"> 
    <img style="border:6px outset  #a1a19f;" src="Salher\S1.png">
    <center><h4>Salher</h4></center></a>
    </div>
    <div class="col-3">
        <a href="" target="_blank">    
    <img style="border:6px outset #a1a19f;" src="Korigad\k1.png">
    <center><h4>Korigad</h4></center></a>
    </div>
    <div class="col-3">
        <a href="" target="_blank"> 
    <img style="border:6px outset  #a1a19f;" src="Raigad\r1.png">
    <center><h4>Raigad</h4></center></a>
    </div>
    <div class="col-3">
        <a href="" target="_blank"> 
    <img style="border:6px outset  #a1a19f;" src="Pratapgad\p1.png">
    <center><h4>Pratapgad</h4></center></a>
    </div>
    <div class="col-3">
        <a href="" target="_blank"> 
    <img style="border:6px outset  #a1a19f;" src="Rajgad\ra1.png">
    <center><h4>Rajgad</h4></center></a>
    </div>
    </div>
    </div>
    </div>-------->

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
    <li><a href="as.html" target="_blank"><p><b>Need Help</b></p></a></li>
    </ul>
    </div>
    <div class="footer-col-3">
    <h3>Get More Information</h3>
    <ul>
    <li><a href="https://www.facebook.com/GadKilleSafar" target="_blank"> <p><b>Facebook</b></p> </a> </li>
    <li><a href="blog.php" target="_blank"> <p><b> Blogs </b></p> </a> </li>
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