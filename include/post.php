    <?php 
		$newsQuery = $mysql->query('SELECT * FROM cms_news ORDER BY id DESC LIMIT 2');
		while($news = $newsQuery->fetch_object()) {
            echo '<article class="post medium"><div class="medium-image" style="width: auto;"><figure class="post-img picture"><a href="blog-post.html"><img src="'.$news->avatar.'" style="height: 130px;" alt=""></a></figure></div><div class="medium-content" style="margin-left: 0;"><header class="meta"><h2><a href="blog-post.html">'.$news->title.'</a></h2><span><i class="halflings user"></i>By <a href="#">'.$news->author.'</a></span><span>Date <a href="#">'.$news->date.'</a></span></header><p>'.utf8_encode($news->text).'</p></div></article><div class="line"></div>'; 
		}
        ?>