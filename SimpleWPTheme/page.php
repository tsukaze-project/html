<!DOCTYPE html>
<head>  
<meta charset="UTF-8">
<title>WordPress | 固定ページ</title>
<link rel="shortcut icon" href="<?php get_site_url(); ?>/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="<?php get_site_url(); ?>/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="apple-touch-icon-precomposed" href="<?php get_site_url(); ?>/apple-touch-icon.png">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
<basefont face="ＭＳ Ｐゴシック", Osaka, "ヒラギノ角ゴ Pro W3">
</head>
    
    
<body>



<?php get_header();?>



<div id="wrap">
<?php
if(have_posts()): while(have_posts()): the_post();?>
<h2><?php the_title(); ?></h2>
<div class="line">
</div><!--line-->
&nbsp;&nbsp;


<?php the_content(); ?>

<?php endwhile; endif; ?>
</div>
    
    
    
<?php get_footer();?>

</body>
</html>
