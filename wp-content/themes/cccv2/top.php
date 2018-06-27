<style media="screen">
#masthead > div,.btn-success,#menu-scroll,.logo-site img  {
  background-color: #4CAF50 !important;

}


/*# portable*/
@media only screen and (max-width: 768px) {

  #main {
  	min-height: 800px;
  }
  #menu1 {
    display: none;
  }
  .logo-site {
    display: none;
  }

  .logos-partenaires
  {
    display: block;
    position: absolute;
    right: 10px;
    top: 150px;
    /*margin-left: 50px;*/
  }
}

  /*#masthead {
    height: 200px;
  }*/
}

/*# tablette*/
@media only screen and (min-width: 768px) and (max-width: 992px) {
  #main {
    min-height: 1000px;
  }
  .logos-partenaires
	{
		display: block;
		position: absolute;
		right: 10px;
		top: 250px
		/*margin-left: 50px;*/
	}

  /*#masthead {
  	height: 300px;
  }*/

}

/*# screen*/
@media only screen and (min-width: 992px) and (max-width: 1200px) {
  #main {
    min-height: 1000px;
  }

  .logos-partenaires
	{
		display: block;
		position: absolute;
		right: 10px;
		top: 216px
		/*margin-left: 50px;*/
	}
  /*#masthead {
  	height: 300px;
  }*/
}
/*# larg*/
@media only screen and (min-width: 1200px) {
  #main {
    min-height: 1200px;
  }
  .logos-partenaires
  {
    display: block;
    position: absolute;
    right: 10px;
    top: 254px;
  }
  #masthead {
  	height: 50px;
  }
}
</style>

<header id="masthead" class=" site-header" role="banner">
  <hgroup>
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
  </hgroup>
</header><!-- #masthead -->
