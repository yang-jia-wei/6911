<!DOCTYPE html>
<!-- saved from url=(0036)http://demo.weboss.hk/h105/index.php -->
<html lang="zh-CN" class="translated-ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php
    $site =get_site();

    $p=pg('p')==''?1:pg('p');
    $classify_id=get_classify_id();
    $content_id=pg('content_id');
    $type_id=get_type_id();
    $search=pg('search');
    $member=session('member');
    $member_id=$member['member_id'];
    $recursive_classify_id=recursive_classify_id($classify_id,3)==''?3:recursive_classify_id($classify_id,3);
    $cart_num=M('cart')->where(array('member_id'=>$member['member_id']))->count();
    if($cart_num=='')$cart_num=0;
    $balance=M('account')->where(array('member_id'=>$member_id))->order('account_id desc')->getfield('balance');
    if($balance=='')$balance=0.00;
    $mobile_url='mobile.php?'.$_SERVER["QUERY_STRING"];
    ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $site['company_name'];?></title>
    <meta name="keywords" content="keywords">
    <meta name="description" content="memomemomemomemomemo">
    <meta name="applicable-device" content="pc,mobile">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bxslider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script async="" src="js/icons.26.svg.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bxslider.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/bootstrap.js"></script>
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="css/translateelement.css">

</head>
<body style="overflow-x: hidden;">
<?php if(file_exists('mobile.php')){?>
<script type="text/javascript">
    function IsPC()
    {
        var userAgentInfo = navigator.userAgent;
        var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
        var flag = true;
        for (var v = 0; v < Agents.length; v++) {
            if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }
        }
        return flag;
    }
    if(!IsPC())window.location.href="<?php echo $mobile_url;?>";

</script>
<?php }?>