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
                    <?php $perpage=12;$offset=($p-1)*$perpage;          
                    $goods = M('goods')->where(array('goods_name'=>array('like','%'.$search.'%')))->limit($offset,$perpage)->select();
                    $total_num=M('goods')->where(array('goods_name'=>array('like','%'.$search.'%')))->count();
                    foreach($goods as $k=>$v){ ?>
                        <div class="col-sm-4 col-md-4 col-mm-6 product_img" style="transition: all 1s ease 0s, opacity 1.5s ease 0s;">
                            <a href="<?php echo content_url($v['type_id'],$v['content_id']);?>"><img src="<?php echo $v['goods_img'];?>" class="img-thumbnail" alt="<?php echo $v['goods_name'];?>"></a>
                            <p class="product_title"><a href="" title="<?php echo $v['goods_name'];?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $v['goods_name'];?></font></font></a></p>
                        </div>
                    <?php }?>
                    <?php require APP_ROOT.'public/page.php';?>
                </div>
            </div>
        </div>

        <!-- left -->
        <div class="col-xs-12 col-sm-4 col-md-3">
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