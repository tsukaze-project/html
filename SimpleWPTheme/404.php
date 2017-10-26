<!DOCTYPE html>
<html>
<head>  
<meta charset="UTF-8">
<title>WordPress | お探しのページは見つかりませんでした。</title>
<link rel="shortcut icon" href="<?php get_site_url(); ?>/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="<?php get_site_url(); ?>/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="apple-touch-icon-precomposed" href="<?php get_site_url(); ?>/apple-touch-icon.png">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
<basefont face="ＭＳ Ｐゴシック", Osaka, "ヒラギノ角ゴ Pro W3">
</head>
    
    
<body>



<?php get_header();?>



<div id="wrap">
   <?php if (have_posts()) :
while (have_posts()) : the_post();
// この部分で記事を表示する処理をします。
endwhile; // 繰り返し処理終了
else : ?>


<p>お探しの記事は見つかりませんでした。</p>

<?php endif; ?>

</div>
    
    
    
<?php get_footer();?>

</body>
</html>
