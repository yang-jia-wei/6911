<?php require APP_ROOT.'public/head.php'?>
<div class="container main">
    <?php require APP_ROOT.'public/top.php';?>


    <!-- Fixed navbar -->
    
    <script>
        var PDV_PAGEID='526';
        var PDV_RP='../../';
        var PDV_COLTYPE='page';
        var PDV_PAGENAME='html_about';
    </script>
    <div class="path_bg">
        <a href="http://demo.weboss.hk/h105/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;&nbsp;首页</font></font></a>
        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> &nbsp;&nbsp;&nbsp;&gt;关于我们</font></font>
    </div>
    <!-- right -->
    <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
        <div class="list_box">
            <h2 class="left_h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php $classify=M('classify')->where(array('classify_id'=>218))->find();echo $classify['classify_name'];?></font></font></h2>
            <div class="contents"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        <?php $classify=M('classify')->where(array('classify_id'=>218))->find();echo $classify['classify_intro'];?>
            </div>
        </div>
    </div>


    <!-- left -->
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

                <li><a href="http://demo.weboss.hk/h105/news/html/?422.html" title="新的Google Nexus 10与竞争对手相比如何"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">新的Google Nexus 10与竞争对手相比如何</font></font></a></li>

                <li><a href="http://demo.weboss.hk/h105/news/html/?421.html" title="新的Google Nexus 10与竞争对手相比如何"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">新的Google Nexus 10与竞争对手相比如何</font></font></a></li>

                <li><a href="http://demo.weboss.hk/h105/news/html/?420.html" title="新的Google Nexus 10与竞争对手相比如何"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">新的Google Nexus 10与竞争对手相比如何</font></font></a></li>

                <li><a href="http://demo.weboss.hk/h105/news/html/?419.html" title="新的Google Nexus 10与竞争对手相比如何"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">新的Google Nexus 10与竞争对手相比如何</font></font></a></li>

                <li><a href="http://demo.weboss.hk/h105/news/html/?418.html" title="新的Google Nexus 10与竞争对手相比如何"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">新的Google Nexus 10与竞争对手相比如何</font></font></a></li>

            </ul>

        </div>

        <div class="index_contact">
            <h2 class="left_h2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">联系我们</font></font></h2>
            <br>
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        联系方式：Weboss
                    </font></font></p>
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        电话：18926129998
                    </font></font></p>
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        电话：020-22043297
                    </font></font></p>
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        地址：广东省广州市天河区899号
                    </font></font></p>
        </div>
    </div>

</div>    <div class="container link_box">

        <?php require APP_ROOT.'public/bottom.php'?>
        <?php require APP_ROOT.'public/foot.php'?>

