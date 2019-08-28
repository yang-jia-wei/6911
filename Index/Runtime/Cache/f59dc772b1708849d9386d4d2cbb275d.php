<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/head.php'?>
    <div class="container main">
<?php require APP_ROOT.'public/top.php';?>
        <div class="path_bg">
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;
            <a href="http://demo.weboss.hk/h105/">Home</a>&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;<a href="http://demo.weboss.hk/h105/news/class/">News</a>&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;Company new&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;How new Google Nexus 10 compares with rivals
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

                <div class="point">
                    <span class="to_prev col-xs-12 col-sm-6 col-md-6">PREVIOUS:No previous</span>
                    <span class="to_next col-xs-12 col-sm-6 col-md-6">NEXT:<a href="http://demo.weboss.hk/h105/news/html/?392.html" title="How new Google Nexus 10 compares with rivals">How new Google Nexus 10 compares with rivals</a></span>
                </div>
            </div>

            <div class="list_related">
                <h2 class="left_h2">Related News</h2>

                <ul class="list_news related_news">

                    <li><a href="http://demo.weboss.hk/h105/news/html/?422.html" title="How new Google Nexus 10 compares with rivals">How new Google Nexus 10 compares with rivals</a><span class="news_time">2010-01-25</span></li>

                    <li><a href="http://demo.weboss.hk/h105/news/html/?421.html" title="How new Google Nexus 10 compares with rivals">How new Google Nexus 10 compares with rivals</a><span class="news_time">2010-01-25</span></li>

                    <li><a href="http://demo.weboss.hk/h105/news/html/?404.html" title="How new Google Nexus 10 compares with rivals">How new Google Nexus 10 compares with rivals</a><span class="news_time">2010-01-25</span></li>

                    <li><a href="http://demo.weboss.hk/h105/news/html/?420.html" title="How new Google Nexus 10 compares with rivals">How new Google Nexus 10 compares with rivals</a><span class="news_time">2010-01-25</span></li>

                    <li><a href="http://demo.weboss.hk/h105/news/html/?418.html" title="How new Google Nexus 10 compares with rivals">How new Google Nexus 10 compares with rivals</a><span class="news_time">2010-01-25</span></li>

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
                <h2 class="left_h2">Contact Us</h2>
                <br>
                <p>
                    Contact: Weboss
                </p>
                <p>
                    Phone: 18926129998
                </p>
                <p>
                    Tel: 020-22043297
                </p>
                <p>
                    Add: Guangdong Province, China TianHe District, GuangZhou Num 899
                </p>
            </div>
        </div>

    </div>
<?php require APP_ROOT.'public/bottom.php'?>
<?php require APP_ROOT.'public/foot.php'?>