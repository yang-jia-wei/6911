<?php require APP_ROOT.'public/head.php';?>
<div class="row top_menu">
    <div class="col-xs-12 col-sm-9 col-md-9 top_name">
        <p>
            <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">&nbsp; <?php echo $site['mobile'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
            </font>
        </p>
        <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp; <a href="javascript:;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $site['email'];?></font></font></a></p>
    </div>
    <div id="topsearch" class="col-xs-12 col-sm-3 col-md-3">
        <form id="searchform" method="get" action="http://demo.weboss.hk/h105/product/class/index.php">
            <div class="input-group search_group">
                <input type="text" name="key" class="form-control input-sm" placeholder="Product search">
                <span class="input-group-btn">
                  <span id="submit_search" onclick="searchform.submit();" title="产品搜索" class="glyphicon glyphicon-search btn-lg" aria-hidden="true"></span>
              </span>
            </div>
        </form>
    </div>
</div>
<!-- Fixed navbar -->

<nav id="top_nav" class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">切换导航</font></font></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php"><img src="<?php echo $site['logo_img'];?>" class="logo" alt=""></a>
        </div>
<!--导航栏-->
<div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <?php $list=M('classify')->where(array('classify_pid'=>2))->order('date asc')->select();
        foreach($list as $k=>$v){
            ?>
    <li class="dropdown"><a href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php $classify=M('classify')->where(array('classify_id'=>$v['classify_id']))->find();echo $classify['classify_name'];?></font></font></a>
        <a href="http://demo.weboss.hk/h105/product/class/" id="app_menudown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <span class="glyphicon glyphicon-menu-down btn-xs"></span>
        </a>
<!--        二级导航     -->
        <?php $listcs=M('classify')->where(array('classify_pid'=>$v['classify_id']))->order('date asc')->select();      ?>
                           <?php if($listcs !=''){ ?>
            <ul class="dropdown-menu nav_small" role="menu" style="display: none;">
                <?php foreach($listcs as $k2=>$v2){?>
            <li><a href="http://demo.weboss.hk/h105/product/class/?115.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php $classify=M('classify')->where(array('classify_id'=>$v2['classify_id']))->find();echo $classify['classify_name'];?></font></font></a></li>
                <?php }?>
            </ul>
             <?php } ?>

    </li>
        <?php }?>
    </ul>
</div><!--/.nav-collapse -->
    </div>
</nav>
