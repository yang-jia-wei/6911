<?php require APP_ROOT.'public/head.php'?>
<div class="container main">
    <?php require APP_ROOT.'public/top.php';?>
<div class="path_bg">
    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;
    <a href="http://demo.weboss.hk/h105/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首页</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> &nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp; </font></font><a href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php $classify=M('classify')->where(array('classify_id'=>209))->find();echo $classify['classify_name'];?></font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> &nbsp;
        </font></font></div>

<!-- right -->
<div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
    <div class="list_box">
        <h2 class="left_h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php $classify=M('classify')->where(array('classify_id'=>209))->find();echo $classify['classify_name'];?></font></font></h2>

        <div class="product_list product_list2">
            <?php $perpage=3;$offset=($p-1)*$perpage;
            $goods = M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.goods_id')->order('date desc')->limit($offset,$perpage)->select();                                                    
            $total_num=M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.goods_id')->count();
            foreach($goods as $k=>$v){  ?>
                <div class="col-sm-4 col-md-4 col-mm-6 product_img" style="transition: all 1s ease 0s, opacity 1.5s ease 0s;">
                    <a href="<?php echo content_url($v['type_id'],$v['content_id']);?>"><img src="<?php echo $v['goods_img'];?>" class="img-thumbnail" alt="<?php echo $v['goods_name'];?>"></a>
                    <p class="product_title"><a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" title="<?php echo $v['goods_name'];?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $v['goods_name'];?></font></font></a></p>
                </div>
            <?php }?>
            <?php require APP_ROOT.'public/page.php';?>
        </div>
    </div>
</div>

<!-- left -->
<div class="col-xs-12 col-sm-4 col-md-3">
<!--    <div class="left_nav" id="categories">-->
<!--        <h2 class="left_h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类</font></font></h2>-->
<!---->
<!--        <ul class="left_nav_ul" id="firstpane">-->
<!---->
<!--            <li><a class="biglink" href="http://demo.weboss.hk/h105/product/class/?115.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品Bigclass1 </font></font></a><span class="menu_head"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span>-->
<!--                <ul class="left_snav_ul menu_body">-->
<!---->
<!--                    <li><a href="http://demo.weboss.hk/h105/product/class/?126.html" target="_self">class1</a></li>-->
<!---->
<!--                    <li><a href="http://demo.weboss.hk/h105/product/class/?127.html" target="_self">class2</a></li>-->
<!---->
<!--                    <li><a href="http://demo.weboss.hk/h105/product/class/?128.html" target="_self">class3</a></li>-->
<!---->
<!--                </ul></li>-->
<!---->
<!--            <li><a class="biglink" href="http://demo.weboss.hk/h105/product/class/?74.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品Bigclass2</font></font></a>-->
<!--                <ul class="left_snav_ul menu_body">-->
<!---->
<!--                </ul></li>-->
<!---->
<!--            <li><a class="biglink" href="http://demo.weboss.hk/h105/product/class/?124.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品Bigclass3</font></font></a>-->
<!--                <ul class="left_snav_ul menu_body">-->
<!---->
<!--                </ul></li>-->
<!---->
<!--        </ul>-->
<!---->
<!--    </div>-->
<!--    <form id="searchform" method="get" action="">-->
<!--        <div class="input-group search_group">-->
<!--            <input type="text" name="key" class="form-control input-sm" placeholder="photo search">-->
<!--            <span class="input-group-btn"><span id="submit_search" onclick="searchform.submit();" title="产品搜索" class="glyphicon glyphicon-search btn-lg" aria-hidden="true"></span></span>-->
<!--        </div>-->
<!--    </form>-->
    <div class="left_news">
        <h2 class="left_h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">最新消息</font></font></h2>

        <ul class="left_news">

            <?php $news=M()->table('index_news n,index_relevance r')->where('r.classify_id =210 and r.content_id=n.news_id')->order('date desc')->select();
            foreach($news as $k=>$v){
                ?>
                <li><a href="<?php echo content_url($v['type_id'],$v['news_id']);?>" title="<?php echo $v['news_title'];?>"><?php echo $v['news_title'];?></a><span class="news_time"></span></li>
            <?php }?>

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