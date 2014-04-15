<?php 
global $VAN;
get_header();
?>

<div id="container">

    <!--Page-->
    <section class="page-area" id="woocommerce-page">
      <div class="wrapper">
       <?php // while(have_posts() ) : the_post();?>
       <?php
       //Set Heading text
		  $mainHeading=get_post_meta($post->ID, "page_mainheading_value", true);
		  $subHeading=get_post_meta($post->ID, "page_subHeading_value", true);
		  $hideTitle=get_post_meta($post->ID, "hide_title_value", true);
		  if($mainHeading=='')$mainHeading=get_the_title();
	   ?>
       <?php if($hideTitle!='Yes'):?>
           <hgroup class="title">
              <h1><strong><?php echo $mainHeading;?></strong></h1>
              <?php if($subHeading<>''):?><p><?php echo $subHeading;?></p><?php endif;?>
           </hgroup>
       <?php endif;?>
       <?php //endwhile;?>
       
           <div class="entry">
              <?php woocommerce_content(); ?>
           </div>
       </div>
    </section>
    
    <?php get_template_part('content','contact');?>
</div>
<?php get_footer();?>