<!-- Latest compiled and minified CSS -->

<style media="screen">
<?php $bimg = get_template_directory_uri() . '/img/top_banner.png'; ?>

#one_container {
  background-image: url("<?php echo get_template_directory_uri().'/img/top.png' ?>") !important;
}

#five_container > div > div:nth-child(3) > ul > li::before {
  content: url("<?php echo get_template_directory_uri().'/img/doc_ico.png' ?>");


}
#five_container > div > div:nth-child(2) > h2::after {
  content:url("<?php echo get_template_directory_uri().'/img/Twitter-Bird-32.png' ?>");


}

#five_container > div > div:nth-child(3)  > h2::after  {
  content: url("<?php echo get_template_directory_uri().'/img/star.png' ?>");

}

#five_container > div > div:nth-child(4) > h2::after {
  content: url("<?php echo get_template_directory_uri().'/img/star.png' ?>");
}

#five_container > div > div:nth-child(3) > ul > li {
  border-bottom: dashed 1px grey;
}

#quote::before {
  content: url("<?php echo get_template_directory_uri().'/img/quote.png' ?>");
  width: 10px;
  height: 10px;
}

#five_container > div > div:nth-child(2) > ul > li {
  margin-bottom: 20px;
}

#one_container > center:nth-child(1) > h1 {
  font-family: 'Trebuchet MS'  !important;
  font-weight: 600!important;
}

#one_container > center:nth-child(2) > h2 {
  font-family: 'Arial'!important;
  font-weight: 600!important;
  color: #5a5959;
}
.catch {
  font-family: 'arial';
  font-weight: 600!important;
  color: #545252;
  font-size: 1.5em;
}

</style>




<div class="container-fluid">
  <div id="one_container" class="row">
    <center><h1 >Lorest Nesto Magnus Opus Quisit</h1></center>
    <center><h2>Magnat Lorem Excitir Nescit Alcit Forenct Ester At Carta Forencit Latus</h2></center>

    <!-- Flickity HTML init -->
    <div class="container ">
      <div class="row">
<center>
        <div  class="col-md-12  carousel " data-flickity>
          <center><img   src=<?php echo get_template_directory_uri().'/img/ban.png' ?> alt=""></center>
          <center><img   src=<?php echo get_template_directory_uri().'/img/ban.png' ?> alt=""></center>
          <center><img   src=<?php echo get_template_directory_uri().'/img/ban.png' ?> alt=""></center>
          <center><img    src=<?php echo get_template_directory_uri().'/img/ban.png' ?> alt=""></center>

        </div>
</center>
        <img class="col-md-5 pull-right largeshow" width="100" src="<?php echo get_template_directory_uri().'/img/board.png' ?>" alt="">
      </div>
    </div>

  </div>

</div>



<div class="container-fluid">
  <div id="tow_container" class="row">
    <div class="container">
      <div class="row">

      <div class="col-md-3 bigbtn largeshow">
        <button type="button" class="btn btn-default ">Get A Quote</button>
        <div class="clear70"></div>
      </div>

      <div class="col-md-9">
        <p class="largeshow catch">Donec vitae eleifend sapien. Pellentesque lobortis sem nec leo vulputate ac condimentum quam scelerisque. Nullam sit amet erat sed massa pellentesque lobortis vel in dui.</p>
      </div>
    </div>

    </div>
  </div>
</div>

<div class="container-fluid col-md-12 smallshow">
  <div class="row">
    <div class="col-md-3 bigbtn">
      <div class="clear100"></div>
      <div class="clear100"></div>
      <center><button type="button" class="btn btn-default">Get A Quote</button></center>
      <div class="clear50"></div>

              <p class="smallshow catch">Donec vitae eleifend sapien. Pellentesque lobortis sem nec leo vulputate ac condimentum quam scelerisque. Nullam sit amet erat sed massa pellentesque lobortis vel in dui.</p>
      <div class="clear50"></div>
    </div>
    <center><img class="img-fluid" alt="Responsive image" src="<?php echo get_template_directory_uri().'/img/board.png' ?>" alt=""></center>
  </div>
</div>

<div class="container-fluid">
  <div id="three_container" class="row">
    <div class="clear50"> </div>

    <!-- inner -->
    <div class="container">
      <div class="row">
        <div class="container col-md-4" >
          <center><img class="img-fluid" alt="Responsive image"
          src=<?php echo get_template_directory_uri().'/img/img1.png' ?> alt="image"></center>
          <h1 class="title-content" style="display:block; border-bottom:dashed 10px grey">Forcept Aliquam</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <button style="margin-bottom:30px" type="button" class="btn btn-default pull-right">Default</button>
          <div class="clear10"></div>

        </div>
        <div class="container col-md-4" >
          <center><img class="img-fluid" alt="Responsive image"
          src=<?php echo get_template_directory_uri().'/img/img2.png' ?> alt="image"></center>
          <h1 class="title-content" style="display:block; border-bottom:dashed 10px grey">Sed Nullam Amet Lobortis At</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <button style="margin-bottom:30px" type="button" class="btn btn-default pull-right">Default</button>
        </div>
        <div class="container col-md-4" >
          <center><img class="img-fluid" alt="Responsive image"
          src=<?php echo get_template_directory_uri().'/img/img3.png' ?> alt="image"></center>
          <h1 class="title-content" style="display:block; border-bottom:dashed 10px grey">Donec Viate Dui Massa</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <button style="margin-bottom:30px" type="button" class="btn btn-default pull-right" >Default</button>
          <div class="clear20"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- inner -->
<div class="container-fluid">
  <div id="four_container" class="row">

  </div>
</div>

<div class="container-fluid">
  <div id="five_container" class="row">
    <div class="container">
      <div class="clear5"></div>
      <div class="container col-md-4">
        <h2>Latest Tweets&nbsp;&nbsp;</h2>
        <ul>
          <div class="clear10"> </div>
          <li>Suspendisse porttitor tincidunt porta. Vestibulum eros nibh, egestas eu aliquam id, <br>feugiat eu nibh. <span class="italic">2-days ago</span></li>
          <li>Vestibulum eros nibh, egestas eu aliquam id, <br> feugiat eu nibh. <span class="italic">7-days ago</span></li>
          <li>Suspendisse porttitor tincidunt porta. Vestibulum eros nibh, egestas eu aliquam id,<br> feugiat eu nibh. <span class="italic">3-days ago</span></li>
        </ul>
      </div>
      <div class="container col-md-4">
        <h2>Latest News&nbsp;&nbsp;</h2>
        <ul>
          <div class="clear10"> </div>
          <li>  Suspendisse porttitor tincidunt porta</li>
          <li>  Aliquam congue venenatis mattis</li>
          <li>  Pellentesque volutpat vulputate vehicula</li>
          <li>  Suspendisse porttitor tincidunt porta</li>
          <li>  Magnus nibh egestas</li>
          <li>  Fusce pulvinar laoreet lacinia</li>
        </ul>
      </div>

      <div class="container col-md-4">
        <h2>Testimonials&nbsp;&nbsp;</h2>
        <div class="clear10"> </div>
        <div id="quote" class="col-md-2"></div>
        <div class="col-md-8 pull-left">Thank you for all the many and varied
          improvements to my website, I am very pleased with it. Thank you again. Lorest quisit alucit. Nefst excitir at alt.<br>
          <div class="clear10"></div>
          <ul>
            <li>&mdash;Raymond Higgs </li>
            <li>&mdash;www.raymondhiggs.co.uk</li>
            <li>&mdash;<a href="#">More Testimonials</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
