<?php require APP_ROOT.'public/head.php'?>
<div class="container main">
    <?php require APP_ROOT.'public/top.php';?>
<div class="path_bg">
    <a href="http://demo.weboss.hk/h105/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;&nbsp;主页</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> &nbsp;&nbsp;&nbsp;&gt;反馈</font></font></div>

<!-- right -->
<div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
    <div class="list_box">
        <h2 class="left_h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">反馈</font></font></h2>

        <div class="feedback">

            <form id="feedbackform" name="myform" class="form-horizontal" method="post" action="http://demo.weboss.hk/h105/feedback/post.php" onsubmit="return CheckJob()">

                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题： </font></font></label>
                    <div class="col-sm-6">
                        <input type="text" name="title" value="" class="form-control" id="title" placeholder="Required"><font style="color:red"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></font>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">你的名字： </font></font></label>
                    <div class="col-sm-6">
                        <input type="text" name="content" value="" class="form-control" id="title" placeholder="Required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电话： </font></font></label>
                    <div class="col-sm-6">
                        <input type="text" name="company" value="" class="form-control" id="title" placeholder="Required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电子邮件： </font></font></label>
                    <div class="col-sm-6">
                        <input type="text" name="name" value="" class="form-control" id="title" placeholder="Required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">加： </font></font></label>
                    <div class="col-sm-6">
                        <input type="text" name="tel" value="" class="form-control" id="title" placeholder="Required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="contents" class="col-sm-3 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">信息： </font></font></label>
                    <div class="col-sm-6">
                        <textarea name="address" class="form-control" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="code" class="col-xs-12 col-sm-3 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">验证码： </font></font></label>
                    <div class="col-xs-7 col-sm-2">
                        <input type="text" name="ImgCode" class="form-control" id="code">
                    </div>
                    <div class="col-xs-2 col-sm-1">
                        <img class="codeimg" src="./反馈 - 外贸模板网站_files/codeimg.php" onclick="this.src=this.src+&quot;?&quot;+Math.random()">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" name="button" value="Send" class="btn btn-danger page-btn"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送</font></font></button>&nbsp;
                        <button type="reset" name="reset" class="btn btn-default grey-btn"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重启</font></font></button>
                    </div>
                </div>
                <input type="hidden" name="act" value="formsend">
                <input name="groupid" type="hidden" id="groupid" value="1">
            </form>

        </div>

    </div>
</div>
    <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="left_nav" id="categories">
            <h2 class="left_h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类</font></font></h2>

            <ul class="left_nav_ul" id="firstpane">

                <li><a class="biglink" href="http://demo.weboss.hk/h105/page/html/about.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关于我们</font></font></a>
                    <ul class="left_snav_ul menu_body"></ul></li>

                <li><a class="biglink" href="http://demo.weboss.hk/h105/page/html/contact.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">联系我们</font></font></a>
                    <ul class="left_snav_ul menu_body"></ul></li>

                <li><a class="biglink" href="http://demo.weboss.hk/h105/page/html/feedback.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">反馈</font></font></a>
                    <ul class="left_snav_ul menu_body"></ul></li>

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
<?php require APP_ROOT.'public/bottom.php'?>
<?php require APP_ROOT.'public/foot.php'?>