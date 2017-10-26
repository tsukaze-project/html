<!DOCTYPE html>
<html>
<head>  
<meta charset="UTF-8">
<title>WordPress | Template</title>
<link rel="shortcut icon" href="<?php get_site_url(); ?>/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="<?php get_site_url(); ?>/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="apple-touch-icon-precomposed" href="<?php get_site_url(); ?>/apple-touch-icon.png">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
<basefont face="ＭＳ Ｐゴシック", Osaka, "ヒラギノ角ゴ Pro W3">
</head>
    
    
    
<body>



<?php get_header();?>

<div id="wrap">

  <dl>
	

&nbsp;&nbsp;

<?php
if(have_posts()): while(have_posts()): the_post();?>

   <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

&nbsp;&nbsp;



<?php endwhile; endif; ?>
</dl> 

 </div>   
    
    
<?php get_footer();?>

</body>
</html>
