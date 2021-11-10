<?php get_header(); ?>


<div id="container">
	
	<div id="header_logo">
  	<img src="<?php bloginfo('template_url'); ?>/imgs/logo.png" id="logo" />
	</div>
  
  <div id="header_image">
  	<img src="<?php bloginfo('template_url'); ?>/imgs/header_img.jpg" />
	</div>
  
  <div id="menu">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

  	<!-- <ul>
    	<li id="menu_1"><a href="index.html">Welkom</a></li>
      <li id="menu_2"><a href="landgoed.html">Landgoed & Omgeving</a></li>
      <li id="menu_3"><a href="faciliteiten.html">Faciliteiten</a></li>
      <li id="menu_4"><a href="reserveren.html">Reserveringen & Tarieven</a></li>
      <li id="menu_5"><a href="contact.html">Contact</a></li>
    </ul> -->
	</div>
  
  <div id="content_wrapper">
    
    <div id="content">
      <div class="area">
      <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
            <header><h1><?php the_title(); ?></h1></header>
            <p><?php the_content(); ?></p>
      <?php endwhile;
              else:
                echo"<p>Geen data Gevonden</p>";
              endif;

                
      ?>
        
      </div>
    </div>
      <?php get_sidebar(); ?>
    
    
    <div class="break"></div>
    
  </div>
  
  
</div>

<div id="footer">
	Alle rechten voorbehouden.
  Tarieven kunnen gewijzigd zijn.
  Landerijen Wildvecht is een onderdeel van de Hollandse Groenlanden groep. 
</div>

</body>
</html>
