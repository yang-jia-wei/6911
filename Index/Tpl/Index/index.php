<?php require APP_ROOT.'public/head.php'?>
<div class="container main">
    <?php require APP_ROOT.'public/top.php';?>

<script>
var PDV_PAGEID='1'; 
var PDV_RP=''; 
var PDV_COLTYPE='index'; 
var PDV_PAGENAME='index'; 
</script>
<!-- bxslider -->

<!-- bxslider -->
<!--    轮播图-->
  <div class="flash">
   <div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 432px;"><ul class="bxslider" style="width: 415%; position: relative; transition-duration: 0s; transform: translate3d(-1180px, 0px, 0px);">

               <?php $banner=M()->table('index_banner n,index_relevance r')->where('r.classify_id =204 and r.content_id=n.banner_id')->order('date desc')->select();foreach($banner as $k=>$v){?>
    <li style="float: left; list-style: none; position: relative; width: 1140px;"><a href="http:">
            <img src="<?php echo $v['banner_img'];?>
" alt="广告标题">
        </a></li>
               <?php }?>

   </ul>
       </div>
<!--       <div class="bx-controls bx-has-pager bx-has-controls-direction"><div class="bx-pager bx-default-pager"><div class="bx-pager-item"><a href="http://demo.weboss.hk/h105/index.php" data-slide-index="0" class="bx-pager-link">1</a></div><div class="bx-pager-item"><a href="http://demo.weboss.hk/h105/index.php" data-slide-index="1" class="bx-pager-link active">2</a></div></div><div class="bx-controls-direction"><a class="bx-prev" href="http://demo.weboss.hk/h105/index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">上一个</font></font></a><a class="bx-next disabled" href="http://demo.weboss.hk/h105/index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">下一个</font></font></a></div>-->
<!--       </div>-->
   </div>
  </div>
  <script type="text/javascript">
        $('.bxslider').bxSlider({
          adaptiveHeight: true,
          infiniteLoop: false,
          hideControlOnEnd: true,
          auto:true
        });
    </script>

<div class="row imgGroup">
<?php $photo_album=M()->table('index_photo_album n,index_relevance r')->where('r.classify_id =213 and r.content_id=n.photo_album_id')->order('date desc')->select();foreach($photo_album as $k=>$v){?>
    <div class="imgGroup-1" data-move-y="170px">
            <div><a href="http://demo.weboss.hk/h105/photo/html/?58.html"><img src="<?php echo $v['photo_img'];?>" alt="<?php echo $v['name'];?>"></a></div>
    </div>
<?php }?>
<!-- <div class="imgGroup-3" data-move-y="170px">-->
<!--                <div><a href="http://demo.weboss.hk/h105/photo/html/?58.html"><img src="images/1534946585.jpg" alt="广告标题"></a></div>-->
<!--            </div>-->

</div>
<!-- main -->
<!--    首页特色产品-->
<div class="product_box">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="index_product">
                <h2 class="title_h2" data-move-y="-100px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php $classify=M('classify')->where(array('classify_id'=>212))->find();echo $classify['classify_name'];?></font></font></h2>
                <div class="product_list" style="perspective: 1000px;">
                    <?php $goods=M()->table('index_goods n,index_relevance r')->where('r.classify_id =212 and r.content_id=n.goods_id')->order('date desc')->select();
                    foreach($goods as $k=>$v){?>
                    <div class="col-sm-4 col-md-3 col-mm-6 product_img" data-move-y="190px" style="transition: all 1s ease 0s, opacity 1.5s ease 0s; opacity: 0; transform: translateY(190px);">
                    <a href=""><img src="<?php echo $v['goods_img'];?>" class="img-thumbnail" alt=""></a>
                    <p class="product_title">
                        <a href="" title="<?php echo $v['goods_name'];?>">
                            <font style="vertical-align:inherit;">
                                <font style="vertical-align: inherit;"><?php echo $v['goods_name'];?></font>
                            </font>
                        </a>
                    </p>
                    </div>
                    <?php }?>
               </div>

            </div>
        </div>
    </div>
</div>
<!--    首页新闻中心-->
<div class="news_box" style="transition: all 1s ease 0s, opacity 1.5s ease 0s; opacity: 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h2 class="title_h2" data-move-y="-100px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php $classify=M('classify')->where(array('classify_id'=>211))->find();echo $classify['classify_name'];?></font></font></h2>
            <ul class="news_index" data-move-y="160px">
                <?php $news=M()->table('index_news n,index_relevance r')->where('r.classify_id =211 and r.content_id=n.news_id')->order('date desc')->select();foreach($news as $k=>$v){?>
                    <li>
                        <span>
                        <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo cover_time($v['neew_date'],'d');?> </font></font></strong>
                        <i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo cover_time($v['neew_date'],'Y-m');?></font></font></i>
                        </span>
                        <a href="http://demo.weboss.hk/h105/news/html/?422.html" title="<?php echo $v['news_title'];?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $v['news_title'];?></font></font></a><br>
                        <em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $v['news_title'];?></font></font></em>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
</div>

<?php require APP_ROOT.'public/bottom.php'?>
<?php require APP_ROOT.'public/foot.php'?>

