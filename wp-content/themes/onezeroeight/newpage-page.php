<?php
/**
 * Template Name: newpage-page
 * @package oneoheight
 */

$custom_image 		= get_field('custom_image');
$custom_title 		= get_field('custom_title');
$custom_copy 		= get_field('custom_copy');

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
                <?php if( !empty($custom_image)) : ?>
                     <img src="<?php echo $custom_image['url']; ?>" alt="<?php echo $custom_image['alt']; ?>">
                <?php endif; ?>
                </div>
                
            <div class="post col-sm-8">
                <h3><?php echo $custom_title; ?></h3>
                <p class="post col-sm-8"><?php echo $custom_copy; ?></p>                
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