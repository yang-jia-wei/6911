<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/head.php'?>
    <div class="container main">
<?php require APP_ROOT.'public/top.php';?>
        <!--            接值（$news_id）-->
        <?php $news=M('news')->where(array('news_id'=>$content_id))->find(); ?>
        <div class="path_bg">
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;
            <a href="http://demo.weboss.hk/h105/">Home</a>&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;<a href="http://demo.weboss.hk/h105/news/class/">News</a>&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;Company new&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;<?php echo $news['title']?>>
        </div>

        <!-- right -->
        <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
            <div class="list_box">
                <h2 class="left_h2"><?php $classify=M('classify')->where(array('classify_id'=>211))->find();echo $classify['classify_name'];?></h2>
                
                <?php $page = substr($_SERVER['REQUEST_URI'],strripos($_SERVER['REQUEST_URI'],"content_id")+11);?>
                <div class="contents">
                        <h1><?php $news=M('news')->where(array('news_id'=>$page))->find();echo $news['news_title'];?></h1>
                    <?php $news=M('news')->where(array('news_id'=>$page))->find();echo $news['news_content'];?>
                    </div>

<!--                <div class="point">-->
<!--                    <span class="to_prev col-xs-12 col-sm-6 col-md-6">PREVIOUS:No previous</span>-->
<!--                    <span class="to_next col-xs-12 col-sm-6 col-md-6">NEXT:<a href="" title="">How new Google Nexus 10 compares with rivals</a></span>-->
<!--                </div>-->
                <?php  $news_gt = M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date > '.$news['date'].' and r.content_id=n.news_id')->order('date asc')->find(); if(!empty($news_gt)){?>
                    <div class="f14464847355"><a class="f14464847356" href="<?php echo content_url($news_gt['type_id'],$news_gt['news_id']) ?>">上一篇：<?php echo $news_gt['news_title'];?></a></div>
                <?php }?>
                <?php  $news_lt = M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date < '.$news['date'].' and r.content_id=n.news_id')->order('date desc')->find(); if(!empty($news_lt)){?>
                    <div class="f14464847355"><a class="f14464847356" href="<?php echo content_url($news_lt['type_id'],$news_lt['news_id']) ?>">下一篇：<?php echo $news_lt['news_title'];?></a></div>
                <?php }?>

            </div>

            <div class="list_related">
                <h2 class="left_h2">相关新闻</h2>

                <ul class="list_news related_news">
                    <?php $news2=M()->table('index_news n,index_relevance r')->where('r.classify_id =210 and r.content_id=n.news_id')->order('date desc')->select(); foreach($news2 as $k2=>$v2){?>
                    <li><a href="<?php echo content_url($v2['type_id'],$v2['news_id']) ?>" title="<?php echo $v2['news_title'];?>"><?php echo $v2['news_title'];?></a><span class="news_time"><?php echo cover_time($v2['news_date'],'Y-m-d');?></span></li>
                    <?php }?>
                    

                </ul>

            </div>
        </div>

        <!-- left -->
        <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="left_nav" id="categories">
                <h2 class="left_h2">Categories</h2>

                <ul class="left_nav_ul" id="firstpane">

                    <li><a class="biglink" href="http://demo.weboss.hk/h105/news/class/?86.html">Company new</a><span class="menu_head">+</span>
                        <ul class="left_snav_ul menu_body">

                            <li><a href="http://demo.weboss.hk/h105/news/class/?102.html" target="_self">Department of news</a></li>

                        </ul></li>

                    <li><a class="biglink" href="http://demo.weboss.hk/h105/news/class/?99.html">Industry news</a>
                        <ul class="left_snav_ul menu_body">

                        </ul></li>

                    <li><a class="biglink" href="http://demo.weboss.hk/h105/news/class/?106.html">technological innovation</a>
                        <ul class="left_snav_ul menu_body">

                        </ul></li>

                </ul>

            </div>

            <div class="left_news">
                <h2 class="left_h2">Latest News</h2>

                <ul class="left_news">

                    <li><a href="http://demo.weboss.hk/h105/news/html/?422.html" title="How new Google Nexus 10 compares with rivals">How new Google Nexus 10 compares with rivals</a></li>

                    <li><a href="http://demo.weboss.hk/h105/news/html/?421.html" title="How new Google Nexus 10 compares with rivals">How new Google Nexus 10 compares with rivals</a></li>

                    <li><a href="http://demo.weboss.hk/h105/news/html/?420.html" title="How new Google Nexus 10 compares with rivals">How new Google Nexus 10 compares with rivals</a></li>

                    <li><a href="http://demo.weboss.hk/h105/news/html/?419.html" title="How new Google Nexus 10 compares with rivals">How new Google Nexus 10 compares with rivals</a></li>

                    <li><a href="http://demo.weboss.hk/h105/news/html/?418.html" title="How new Google Nexus 10 compares with rivals">How new Google Nexus 10 compares with rivals</a></li>

                </ul>

            </div>
            <div class="index_contact">
                <h2 class="left_h2"><?php $classify=M('classify')->where(array('classify_id'=>219))->find();echo $classify['classify_name'];?></h2>
                <br>
                <p>
                    Contact:<?php $contact=M('contact')->where(array('type_id'=>62))->find(); echo $contact['contact'] ?>
                </p>
                <p>
                    Tel: <?php $contact=M('contact')->where(array('type_id'=>62))->find(); echo $contact['tel'] ?>
                </p>
                <p>
                    Add: <?php $contact=M('contact')->where(array('type_id'=>62))->find(); echo $contact['addr'] ?>
                </p>
            </div>
        </div>

    </div>
<?php require APP_ROOT.'public/bottom.php'?>
<?php require APP_ROOT.'public/foot.php'?>