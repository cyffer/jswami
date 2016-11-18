<?php
/**
 * Template Name: Homepage
 * @package oneoheight
 */

get_header(); ?>

	<header class="entry-header">
		<h2 class="tag-line"><?php bloginfo('description') ?></h2>
	</header><!-- .entry-header -->
 
<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'onezeroeight' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'onezeroeight' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

<!-- Page Content -->
<div id="radhagovinda">    
       <div id="page-content-wrapper">
            <div class="container-fluid">           
                <div class="row">
                <div class="col-sm-12">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/skyblue_rg.jpg" alt="Govinda Bhagavan"> 
                </div>
                
            <div class="post col-sm-8">
                <h3>The Temple Today</h3>
                <p>
                Our mission is to save Sri Sri Radha Govinda from being moved, and Their temple from being sold. Srila Prabhupada was firmly against both selling temples and moving Deities, as you can see on the page "Srila Prabhupada Said." 
		</p>
		<p>
Also the area where the temple stands today has transformed into a hub of schools, cultural centers, smart businesses, and upscale apartments. Downtown Brooklyn is booming, in a prime location for aiding Srila Prabhupada's mission to spread Krishna Consciousness across the globe. New York is his flagship location and finally Brooklyn is developing so that our temple will be in the heart of a thriving city.
		</p>
		<p>
The temple is on the edge of the downtown Brooklyn “cultural district.” We’re a 3-minute walk from the Brooklyn Academy of Music, one of New York’s premier site for music, theater, and cultural performances. 
		</p>
		<p>
We’re a 5-minute walk from the Barclay Center, a venue that holds over 18,000 seats, costing 1.03 billion dollars and taking 9 years to build, with events being held every few days. We have held kirtans in front of the Arena, and could develop a regular sankirtan party to chant and sell books, as guests come in. 
		</p>
		<p>
The temple is a short walk from 11 subway lines. More and more NYC companies are moving their offices to Brooklyn. Influential and acclaimed actors, writers, journalists, CEO's, politicians and artists are buying property in the area. There are skyscrapers being built on every corner. 
		</p>
		<p>
Why not stay in this thriving area, avoiding offenses to the Deities, and work to build our Lordships something special right where They stand?
            </p>
            </div>
            <aside class="col-xs-4">
                <div class="widget">
                    <ul>       
                        <li><a href="">Donate</a></li>    
                    </ul>
                </div>
                <div class="widget">
                    <form role="form" class="signup">
                     <p><b>Stay Informed</b><br/>
                        <small>sign-up for email updates</small></p>
                        <label for="email-form" class="sr-only">Name</label>
                        <input type="text" placeholder="Your Name " id="email-form">
                        <label for="email-form" class="sr-only">Email</label>
                        <input type="text" placeholder="Your Email " id="email-form">
                    </form>
                </div>
                </p>
            </aside> 
            </div>
        </div>
        <br/>

    </div> <!-- /#page-content-wrapper -->
     <div class="col-sm-8">
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
    </div>
        <br/>
        <br/>
    </div><!-- /#wrapper -->
</div> 

<?php
// get_sidebar();
// get_footer();