<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/C-PONS.png">
    <title>C-PONS - Clément PONS Développeur Front-end</title>
    <link rel="stylesheet" href="css-portfolio/c-pons.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
<?php require("header.inc.php");?>
<section id="slider">
<div class="slideshow-container">
  <div class="mySlides fade">
    <img src="img-portfolio/believemy1.png" style="width:50% margin:auto">
  </div>
  <div class="mySlides fade">
    <img src="img-portfolio/believemy2.png" style="width:50% margin:auto">
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
</div>
</section>

<div id="box">
  <div class="left">
  <h2>Développement front-end :</h2><br>
<p>
    - Création de certaines publications instagram<br><br>
    - Intégration HTML-CSS<br><br>
    - Animation sur les pages en JavaScript<br><br>
</p>
  </div>
  <div class="right">
      <h2>Information sur le projet :</h2><br>
      <p>
          <B>- Année :</B> 2020<br>
          <B>- Catégorie :</B> Astuces de développement web<br>
      </p><br><br>
        <p>
          <span>HTML&nbsp;&#160;&#160;</span>
          <span>CSS&nbsp;&#160;&#160;</span>
          <span>JavaScript&nbsp;&#160;&#160;</span>
          <span>jQuery&nbsp;&#160;&#160;</span><br>
          <span>FIGMA&nbsp;&#160;&#160;</span>
      </p>
  </div>
</div>
<a href="https://www.instagram.com/believemyfr/?hl=fr" class="cta">
  <span>Voir l'instagram</span>
  <svg width="13px" height="10px" viewBox="0 0 13 10">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</a>


<?php require("footer.inc.php");?>
<script src="script.js"></script>
<script src="js-portfolio/script-cpons.js"></script>
</body>
</html>
