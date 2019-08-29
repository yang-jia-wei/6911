<?php require APP_ROOT.'public/head.php'?>
<div class="container main">
    <?php require APP_ROOT.'public/top.php';?>
<div class="path_bg">
    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;
    <a href="http://demo.weboss.hk/h105/"><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_name'];?></a>&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;<a href="http://demo.weboss.hk/h105/news/class/"><?php $classify=M('classify')->where(array('classify_id'=>210))->find();echo $classify['classify_name'];?></a>
</div>
<!-- right -->

<!-- right -->
<div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
    <div class="list_box">
        <h2 class="left_h2"><?php $classify=M('classify')->where(array('classify_id'=>210))->find();echo $classify['classify_name'];?></h2>
        <ul class="list_news">
        <?php $perpage=2;$offset=($p-1)*$perpage;
        $news = M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.news_id')->order('date desc')->limit($offset,$perpage)->select();
        $total_num=M()->table('index_news n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.news_id')->count();
        foreach($news as $k=>$v){  ?>
            <li><a href="<?php echo content_url($v['type_id'],$v['news_id']);?>" title="<?php echo $v['news_title'];?>"><?php echo $v['news_title'];?></a><span class="news_time"></span></li>
            <?php }?>
        </ul>
            <?php require APP_ROOT.'public/page.php';?>
<!--        </div>-->
    </div>
</div>

<!-- left -->
<div class="col-xs-12 col-sm-4 col-md-3">
<!--    <div class="left_nav" id="categories">-->
<!--        <h2 class="left_h2">Categories</h2>-->
<!---->
<!--        <ul class="left_nav_ul" id="firstpane">-->
<!---->
<!--            <li><a class="biglink" href="http://demo.weboss.hk/h105/news/class/?86.html">Company new</a><span class="menu_head">+</span>-->
<!--                <ul class="left_snav_ul menu_body">-->
<!---->
<!--                    <li><a href="http://demo.weboss.hk/h105/news/class/?102.html" target="_self">Department of news</a></li>-->
<!---->
<!--                </ul></li>-->
<!---->
<!--            <li><a class="biglink" href="http://demo.weboss.hk/h105/news/class/?99.html">Industry news</a>-->
<!--                <ul class="left_snav_ul menu_body">-->
<!---->
<!--                </ul></li>-->
<!---->
<!--            <li><a class="biglink" href="http://demo.weboss.hk/h105/news/class/?106.html">technological innovation</a>-->
<!--                <ul class="left_snav_ul menu_body">-->
<!---->
<!--                </ul></li>-->
<!---->
<!--        </ul>-->
<!---->
<!--    </div>-->
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