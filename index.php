<!-- CONTACT form source code
Copyright (c) 2024 by Leon Heess (https://codepen.io/MiXT4PE/pen/ERJVBX)
Fork of an original work Contact Form Template (https://codepen.io/see8ch/pen/AqwqrZ

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->

<!DOCTYPE html>
<html>

<head>
  <title>Shin Kawarada</title>
  <meta charset="UTF-8">
  <meta name="description" content="Shin Kawaradaのポートフォリオサイト">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- reset.css modern-css-reset -->
  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css">

  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">


  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/inview.js"></script>
</head>

<body>
  <header>
    <a href="index.html" class="logo montaga">SHIN KAWARADA</a>
  </header>

  <main>
    <article id="about" class="js-fadeup">
      <h1 class="montaga">ABOUT</h1>
      <div class="about-container">
        <img class="my-img" src="<?php echo get_template_directory_uri(); ?>/img/me.jpg" alt="me">
        <hr width="12%">
        <p>高いITスキルを活かし、<br>高品質なサイトをご提供いたします。<br>また、お客様それぞれのニーズに合った<br>デザインをご提供いたします。</p>
      </div>
    </article>
    <article class="js-fadeup">
      <h1 class="montaga">WORKS</h1>
      <div class="works-container">
        <div class="works-item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/work-socialtech.png" alt="work-socialtech">
          </a>
          <p>SocialTech(プログラミングスクール課題)</p>
          <p>HTML/SCSS</p>
        </div>
        <div class="works-item">
          <a href="https://university.shin-kawarada.com/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/work-samurai-university.png" alt="work-samurai-university">
          </a>
          <p>SAMURAI University(プログラミングスクール課題)</p>
          <p>WordPress/HTML/CSS/PHP</p>
        </div>
        <div class="works-item">
          <a href="https://hair-tech.shin-kawarada.com/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/work-hair-tech.png" alt="work-hair-tech">
          </a>
          <p>Hair Tech(プログラミングスクール課題)</p>
          <p>WordPress</p>
        </div>
        <div class="works-item">
          <a href="#">
            <img src="https://placehold.jp/500x340.png" alt="work">
          </a>
          <p>作品4</p>
        </div>
      </div>
    </article>
    <article id="contact" class="js-fadeup">
      <h1 class="montaga">CONTACT</h1>
      <div class="contact-form">
        <?php echo do_shortcode( '[contact-form-7 id="ac3473a" title="コンタクトフォーム 1"]' ); ?>
      </div>
    </article>
  </main>
</body>

</html>