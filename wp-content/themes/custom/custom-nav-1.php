<?php
$defaults = array(
	'theme_location'  => '',
	'menu'            => '',//(int|string|WP_Term) Desired menu.
	'container'       => 'ul',//Whether to wrap the ul, and what to wrap it with. Default 'div'.
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'nav navbar-nav',//CSS class to use for the ul
	'menu_id'         => '',//id class to use for the ul
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'depth'           => 0,
);
wp_nav_menu( $defaults );
?>

<style media="screen">
#nav1 {
  font-family: 'Bell MT';

background: rgba(76,76,76,1);
background: -moz-linear-gradient(top, rgba(76,76,76,1) 0%, rgba(89,89,89,1) 12%, rgba(102,102,102,1) 25%, rgba(71,71,71,1) 39%, rgba(44,44,44,1) 50%, rgba(0,0,0,1) 51%, rgba(17,17,17,1) 60%, rgba(43,43,43,1) 76%, rgba(28,28,28,1) 91%, rgba(19,19,19,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(76,76,76,1)), color-stop(12%, rgba(89,89,89,1)), color-stop(25%, rgba(102,102,102,1)), color-stop(39%, rgba(71,71,71,1)), color-stop(50%, rgba(44,44,44,1)), color-stop(51%, rgba(0,0,0,1)), color-stop(60%, rgba(17,17,17,1)), color-stop(76%, rgba(43,43,43,1)), color-stop(91%, rgba(28,28,28,1)), color-stop(100%, rgba(19,19,19,1)));
background: -webkit-linear-gradient(top, rgba(76,76,76,1) 0%, rgba(89,89,89,1) 12%, rgba(102,102,102,1) 25%, rgba(71,71,71,1) 39%, rgba(44,44,44,1) 50%, rgba(0,0,0,1) 51%, rgba(17,17,17,1) 60%, rgba(43,43,43,1) 76%, rgba(28,28,28,1) 91%, rgba(19,19,19,1) 100%);
background: -o-linear-gradient(top, rgba(76,76,76,1) 0%, rgba(89,89,89,1) 12%, rgba(102,102,102,1) 25%, rgba(71,71,71,1) 39%, rgba(44,44,44,1) 50%, rgba(0,0,0,1) 51%, rgba(17,17,17,1) 60%, rgba(43,43,43,1) 76%, rgba(28,28,28,1) 91%, rgba(19,19,19,1) 100%);
background: -ms-linear-gradient(top, rgba(76,76,76,1) 0%, rgba(89,89,89,1) 12%, rgba(102,102,102,1) 25%, rgba(71,71,71,1) 39%, rgba(44,44,44,1) 50%, rgba(0,0,0,1) 51%, rgba(17,17,17,1) 60%, rgba(43,43,43,1) 76%, rgba(28,28,28,1) 91%, rgba(19,19,19,1) 100%);
background: linear-gradient(to bottom, rgba(76,76,76,1) 0%, rgba(89,89,89,1) 12%, rgba(102,102,102,1) 25%, rgba(71,71,71,1) 39%, rgba(44,44,44,1) 50%, rgba(0,0,0,1) 51%, rgba(17,17,17,1) 60%, rgba(43,43,43,1) 76%, rgba(28,28,28,1) 91%, rgba(19,19,19,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0 );

}
#nav1 a {
  color: #fff;

}
#nav1 a[class^=navbar-brand]   {
  font-size:2em;
  font-weight:300
}



#nav1 .navbar-brand{
  background: url('<?php echo get_template_directory_uri().'/img/logo.png' ?>') center / contain no-repeat;
  width: 150px;
}
</style>

<nav id="nav1" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>

    </button>
    <a class="navbar-brand " href="#"></a>
  </div>

<div class="container">
  <div  class="row">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><div class="btn-box">Home</div></a></li>
          <li><a href="#"><div class"btn-box">Portfolio</div></a></li>
          <li><a href="#"><div class"btn-box">Our Services</div></a></li>
          <li><a href="#"><div class"btn-box">About</div></a></li>
          <li><a href="#"><div class"btn-box">Blog</div></a></li>
          <li><a href="#"><div class"btn-box">Login</div></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</div>
</nav>
