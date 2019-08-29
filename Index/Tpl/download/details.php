<?php require APP_ROOT.'public/head.php'?>
<div class="container main">
    <?php require APP_ROOT.'public/top.php';?>
    <?php $download = M('download')->where(array('download_id'=>$content_id))->find();?>


<div class="path_bg">
    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;
    <a href="http://demo.weboss.hk/h105/">Home</a>&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;<a href="">Down</a>&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;Help document&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;The site using the tutorial
</div>

<!-- right -->
<div class="col-xs-12 col-sm-8 col-md-9" style="float:right">

    <div class="list_box">
        <h2 class="left_h2">Help document</h2>

        <div class="contents">
            <h1> <?php echo $download['download_name'];?></h1>
            <p class="download_btn"><a href="<?php echo '?m=download&a=downdetails&content_id='.$content_id;?>" class="btn btn-info page-btn" role="button" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> &nbsp;DOWNLOAD </a></p>
            <?php echo $download['download_content'];?>
        </div>

        <div class="point">
            <?php  $download_gt = M()->table('index_download n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date > '.$download['date'].' and r.content_id=n.download_id')->order('date asc')->find();  if(!empty($download_gt)){?>
                <div class="f14464847355"><a class="f14464847356" href="<?php echo content_url($download_gt['type_id'],$download_gt['download_id']) ?>">上一篇：<?php echo $download_gt['download_name'];?></a></div>
            <?php }?>
            <?php  $download_lt = M()->table('index_download n,index_relevance r')->where('r.classify_id ='.$classify_id.' and n.date < '.$download['date'].' and r.content_id=n.download_id')->order('date desc')->find();  if(!empty($download_lt)){?>
                <div class="f14464847355"><a class="f14464847356" href="<?php echo content_url($download_lt['type_id'],$download_lt['download_id']) ?>">下一篇：<?php echo $download_lt['download_name'];?></a></div>
            <?php }?>
        </div>
    </div>

    <div class="list_related">
        <h2 class="left_h2"><?php $classify=M('classify')->where(array('classify_id'=>224))->find();echo $classify['classify_name'];?></h2>

        <ul class="list_news related_news">
            <?php $download=M()->table('index_download n,index_relevance r')->where('r.classify_id =224 and r.content_id=n.download_id')->order('date desc')->select();foreach($download as $k=>$v){
                ?>
            <li><a href="<?php echo $v['download_name'];?>" title="T<?php echo $v['download_name'];?>">T<?php echo $v['download_name'];?></a><span class="news_time"><?php echo cover_time($v['download_date'],'Y-m-d');?></span></li>

            <?php }?>

        </ul>

    </div>

</div>

<!-- left -->
<div class="col-xs-12 col-sm-4 col-md-3">
    <div class="left_nav" id="categories">
        <h2 class="left_h2">Categories</h2>

        <ul class="left_nav_ul" id="firstpane">

            <li><a class="biglink" href="http://demo.weboss.hk/h105/down/class/?1.html">Help document</a>
                <ul class="left_snav_ul menu_body">
                </ul></li>

            <li><a class="biglink" href="http://demo.weboss.hk/h105/down/class/?2.html">file download</a>
                <ul class="left_snav_ul menu_body">
                </ul></li>

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

