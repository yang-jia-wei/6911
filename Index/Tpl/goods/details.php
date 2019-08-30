<?php require APP_ROOT.'public/head.php'?>
    <div class="container main">
        <?php require APP_ROOT.'public/top.php';?>
        <div class="path_bg">
            <!--            接值（$good_id）-->
            <?php $goods=M('goods')->where(array('goods_id'=>$content_id))->find();?>
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;
            <a href="http://demo.weboss.hk/h105/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首页</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> &nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp; </font></font><a href="http://demo.weboss.hk/h105/product/class/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> &nbsp;&nbsp;&nbsp;&gt;<?php echo $goods['goods_name']?>
                </font></font></div>
        <!-- right -->

        <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
            <div class="list_box">
                <h2 class="left_h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $goods['goods_name']?></font></font></h2>
                <!-- showpic -->

                <div class="col-sm-12 col-md-6 showpic_box">
                    <div class="bx-wrapper" style="max-width: 100%;">
                        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 359px;"><ul class="showpic_flash" style="width: 315%; position: relative; transition-duration: 0s; transform: translate3d(-423px, 0px, 0px);"><li style="float: left; list-style: none; position: relative; width: 383px;" class="bx-clone"><a class="example-image-link" href="" data-lightbox="example-set" target="_blank"><img class="example-image" src="" alt="这是测试产品名称"></a></li>
                                <li style="float: left; list-style: none; position: relative; width: 383px;"><a class="example-image-link" href="" data-lightbox="example-set" target="_blank">
<!--                                        大图-->
                                        <img class="example-image" src="<?php echo $goods['goods_img']?>" alt="这是测试产品名称"></a></li>

                                <li style="float: left; list-style: none; position: relative; width: 383px;" class="bx-clone"><a class="example-image-link" href="" data-lightbox="example-set" target="_blank">
                                        <img class="example-image" src="" alt="<?php echo $goods['name']?>"></a></li>
                            </ul>
                        </div>
                        <div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev disabled" href=" "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">上一页</font></font></a><a class="bx-next disabled" href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">下一个</font></font></a></div></div></div>
                    <div id="pic-page">
<!--                        小图-->
                        <a data-slide-index="0" class="active"><img src="<?php echo $goods['goods_img']?>" alt="名称"></a>

                    </div>
                </div>
                <!-- product_info -->
                <div class="col-sm-12 col-md-6 proinfo_box">
                    <h1 class="product_h1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> <?php echo $goods['goods_name'];?></font></font></h1>
                    <ul class="product_info">
                        <?php echo $goods['goods_intro'];?>
                        <li>
                            <form id="orderform" method="get" action="">
                                <input type="hidden" name="key" value="As I swim N568 vehicle traveling data recorder">
                                <a href="" class="btn btn-info page-btn"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 查询</font></font></a>
                            </form></li>
                    </ul>
                </div>
                <div class="product_con">
                    <?php echo $goods['goods_content'];?>
                </div>
<!--                <div class="point">-->
<!--                    <span class="to_prev col-xs-12 col-sm-6 col-md-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">上一篇</font></font></span>-->
<!--                    <font style="vertical-align: inherit;"><span class="to_next col-xs-12 col-sm-6 col-md-6"><font style="vertical-align: inherit;"></font></span><span class="to_prev col-xs-12 col-sm-6 col-md-6"><font style="vertical-align: inherit;">：没有上一篇</font></span></font><span class="to_next col-xs-12 col-sm-6 col-md-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">下一篇：</font></font><a href="http://demo.weboss.hk/h105/product/html/?128.html" title="这是测试产品名称"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">这是一个测试产品名称</font></font></a></span>-->
<!--                </div>-->
                <?php  $goods_gt = M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date > '.$goods['date'].' and r.content_id=n.goods_id')->order('date asc')->find();  if(!empty($goods_gt)){?>
                    <div class="f14464847355"><a class="f14464847356" href="<?php echo content_url($goods_gt['type_id'],$goods_gt['goods_id']) ?>">上一篇：<?php echo $goods_gt['goods_name'];?></a></div>
                <?php }?>
                <?php  $goods_lt = M()->table('index_goods n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date < '.$goods['date'].' and r.content_id=n.goods_id')->order('date desc')->find();  if(!empty($goods_lt)){?>
                    <div class="f14464847355"><a class="f14464847356" href="<?php echo content_url($goods_lt['type_id'],$goods_lt['goods_id']) ?>">下一篇：<?php echo $goods_lt['goods_name'];?></a></div>
                <?php }?>


            </div>
            <div class="list_related">
                <h2 class="left_h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">相关产品</font></font></h2>
                <div class="product_list related_list">
                    <?php $goods2=M()->table('index_goods n,index_relevance r')->where('r.classify_id =209 and r.content_id=n.goods_id')->order('date desc')->select();foreach($goods2 as $k2=>$v2){?>
                    <div class="col-sm-4 col-md-3 col-mm-6 product_img">
                        <a href=""><img src="<?php echo $v2['goods_img']?>" class="img-thumbnail" alt=""></a>
                        <p class="product_title"><a href="http://demo.weboss.hk/h105/product/html/?136.html" title=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $v2['goods_name']?></font></font></a></p>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>

        <!-- left -->
        <div class="col-xs-12 col-sm-4 col-md-3">
<!--            <div class="left_nav" id="categories">-->
<!--                <h2 class="left_h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类</font></font></h2>-->
<!---->
<!--                <ul class="left_nav_ul" id="firstpane">-->
<!---->
<!--                    <li><a class="biglink" href="http://demo.weboss.hk/h105/product/class/?115.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品Bigclass1 </font></font></a><span class="menu_head"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></span>-->
<!--                        <ul class="left_snav_ul menu_body">-->
<!---->
<!--                            <li><a href="http://demo.weboss.hk/h105/product/class/?126.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">class1的</font></font></a></li>-->
<!---->
<!--                            <li><a href="http://demo.weboss.hk/h105/product/class/?127.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等级2</font></font></a></li>-->
<!---->
<!--                            <li><a href="http://demo.weboss.hk/h105/product/class/?128.html" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CLASS3</font></font></a></li>-->
<!---->
<!--                        </ul></li>-->
<!---->
<!--                    <li><a class="biglink" href="http://demo.weboss.hk/h105/product/class/?74.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品Bigclass2</font></font></a>-->
<!--                        <ul class="left_snav_ul menu_body">-->
<!---->
<!--                        </ul></li>-->
<!---->
<!--                    <li><a class="biglink" href="http://demo.weboss.hk/h105/product/class/?124.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品Bigclass3</font></font></a>-->
<!--                        <ul class="left_snav_ul menu_body">-->
<!---->
<!--                        </ul></li>-->
<!---->
<!--                </ul>-->
<!---->
<!--            </div>-->

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

    </div>
<?php require APP_ROOT.'public/bottom.php'?>
<?php require APP_ROOT.'public/foot.php'?>