<!DOCTYPE HTML>
<html lang="zh-CN">
    <head>
        <?php require("inc/header.php");?>

    </head>

    <body class="blog">

        <!-- Preloader Gif -->
        <div class="doc-loader"></div>

   						        


        <div id="content" class="site-content">

            <div class="content-left">
                <?php require("inc/sidebar.php");?>
            </div>

            <div class="content-right">
                <div class="content-right-holder">
                    <div class="blog-holder">

                        <?php 
                            foreach ($articles as $key => $article_meta) {
                                # code...
                        ?>

                        <article class="blog-item-holder">
                            <!--<div class="featured-image">
                                <img src="<?=_themeUrl()?>images/blog_img_01.jpg" alt="" />
                            </div>-->
                            <div class="item-text">
                                <h2 class="entry-title">
                                    <a href="article/<?=str_replace('.md', '', $key)?>"><?=$article_meta['title']?></a>
                                </h2>
                               on <a href="article/<?=str_replace('.md', '', $key)?>" class="read-more"> <?=$article_meta['date']?></a> | 
                                in <a href="article/<?=str_replace('.md', '', $key)?>" class="read-more"> <?=implode(",",$article_meta['categories'])?></a>
                                <div class="excerpt">
                                    <?=$article_meta['excerpt']?> <a href="article/<?=str_replace('.md', '', $key)?>" class="read-more">Read More</a>
                                </div>
                                
                            </div>
                        </article>

                        <?php
                            }
                        ?>
                    </div>                
                </div>
            </div>
            <div class="clear"></div>            
        </div>


        <?php require("inc/footer.php");?>
        
    </body>
</html>