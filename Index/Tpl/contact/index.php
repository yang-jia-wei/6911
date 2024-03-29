<?php require APP_ROOT.'public/head.php'?>
    <div class="container main">
<?php require APP_ROOT.'public/top.php';?>
        <div class="path_bg">
            <a href="http://demo.weboss.hk/h105/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;&nbsp;主页</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> &nbsp;&nbsp;&nbsp;&gt;联系我们</font></font></div>
        <!-- right -->
        <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
            <div class="list_box">
                <h2 class="left_h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">联系我们</font></font></h2>
                <div class="index_contact">
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


        <!-- left -->
        <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="left_nav" id="categories">
                <h2 class="left_h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类</font></font></h2>

                <ul class="left_nav_ul" id="firstpane">
                    <li>
                        <a class="biglink" href="<?php $classify=M('classify')->where(array('classify_id'=>218))->find(); echo $classify['classify_url'];?>">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php $classify=M('classify')->where(array('classify_id'=>218))->find();echo $classify['classify_name'];?></font></font>
                        </a>
                        <ul class="left_snav_ul menu_body"><?php $classify=M('classify')->where(array('classify_id'=>218))->find();echo $classify['classify_name'];?></ul>
                    </li>

                    <li>
                        <a class="biglink" href="<?php $classify=M('classify')->where(array('classify_id'=>219))->find();echo $classify['classify_url'];?>">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php $classify=M('classify')->where(array('classify_id'=>219))->find();echo $classify['classify_name'];?></font></font
                            ></a>
                        <ul class="left_snav_ul menu_body"><?php $classify=M('classify')->where(array('classify_id'=>219))->find();echo $classify['classify_name'];?></ul>
                    </li>

                    <li>
                        <a class="biglink" href="<?php $classify=M('classify')->where(array('classify_id'=>220))->find();echo $classify['classify_url'];?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php $classify=M('classify')->where(array('classify_id'=>220))->find();echo $classify['classify_name'];?></font></font>
                        </a>
                        <ul class="left_snav_ul menu_body"><?php $classify=M('classify')->where(array('classify_id'=>220))->find();echo $classify['classify_name'];?></ul>
                    </li>

                </ul>

            </div>

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