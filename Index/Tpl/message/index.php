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

<!--                <form id="" name="myform" class="form-horizontal" method="post" action="?" onsubmit="return CheckJob()">-->
                    <form action="index.php?m=message&a=add_save" method="post" enctype="multipart/form-data" onsubmit="return return_message()" id="form" class="form-horizontal">
                        <input name="data[type_id]" type="hidden" id="type_id" class="f14488721903" value="11" />
                        <input name="classify_id" type="hidden" id="classify_id" class="f14488721904" value="220" />
                        <input name="data[date]" type="hidden" id="date" class="f14488721905" value="<?php echo time();?>" />

                    <div class="form-group">
                        <label for="title" class="col-sm-3 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题：<font style="color:red"><font style="vertical-align: inherit;">*</font></font> </font></font></label>
                        <div class="col-sm-6">
                            <input type="text" name="date[title]" value="" class="form-control" id="title" placeholder="请输入标题">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-sm-3 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">名字：<font style="color:red"><font style="vertical-align: inherit;">*</font></font> </font></font></label>
                        <div class="col-sm-6">
                            <input type="text" name="data[name]" value="" class="form-control" id="name" placeholder="请输入名字">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-sm-3 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">手机号码：<font style="color:red"><font style="vertical-align: inherit;">*</font></font> </font></font></label>
                        <div class="col-sm-6">
                            <input type="text" name="data[tel]" value="" class="form-control" id="tel" placeholder="请输入手机号码">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-sm-3 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电子邮箱： <font style="color:red"><font style="vertical-align: inherit;">*</font></font> </font></font></label>
                        <div class="col-sm-6">
                            <input type="text" name="data[email]" value="" class="form-control" id="email" placeholder="请输入电子邮件">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contents" class="col-sm-3 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">内容： </font></font></label>
                        <div class="col-sm-6">
                            <textarea name="data[content]" class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="code" class="col-xs-12 col-sm-3 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">验证码： </font></font></label>
                        <div class="col-xs-7 col-sm-2">
                            <input type="text" name="data[verify]" class="form-control" id="code">
                        </div>
                        <div class="col-xs-2 col-sm-1">
<!--                            <img class="codeimg" src="" onclick="this.src=this.src+&quot;?&quot;+Math.random()">-->
                            <img   style="height:25px; width:60px;" title="点击可更换验证码" src="index.php?m=Index&a=verify" alt="" onclick="this.src='index.php?m=Index&a=verify&code='+Math.random()">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-10">
                            <button type="submit" name="button" value="Send" class="btn btn-danger page-btn"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送</font></font></button>&nbsp;
                            <button type="reset" name="reset" class="btn btn-default grey-btn"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">清空</font></font></button>
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
<?php require APP_ROOT.'public/bottom.php'?>
<?php require APP_ROOT.'public/foot.php'?>
<script type="text/javascript">
    function return_message()
    {
        <?php  $input = M('input')->where(array('type_id'=>11,'show_switch'=>2,'required_switch'=>2,'input_pid'=>array('exp','is null')))->order('date asc')->select();  foreach($input as $k=>$v){?>
        if($("#<?php echo $v['field_name'];?>").val()=='')
        {
            alert("<?php echo $v['prompt'];?>");
            return false;
        }
        <?php }?>
    }
</script>
<script>
    $('#tel').blur(function(){
        var phone = $('#tel').val();
        if(!(/^1[3456789]\d{9}$/.test(phone))){
            alert("手机号码有误，请重填");
            return false;
        }
    });
    $('#email').blur(function(){
        var reg =/^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
        var mail=$('#email').val();
        if(!reg.test(mail)){
            alert('邮箱不合法')
            return false;
        }
    });
</script>
