<!--首页友情链接-->

<div class="container link_box">
    <span class="link_title">Link<button id="link_btn" class="glyphicon glyphicon-plus" aria-hidden="true"></button></span>
    <span class="link_list">
    <?php $link=M()->table('index_link n,index_relevance r')->where('r.classify_id =206 and r.content_id=n.link_id')->order('date desc')->select();
    foreach($link as $k=>$v){?>
        <a href="<?php echo $v['link_url'];?>" target="_self"><?php echo $v['link_name'];?></a>
    <?php }?>
</span>
</div>

<nav class="navbar navbar-default navbar-fixed-bottom footer_nav">
    <div class="foot_nav btn-group dropup">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="http://demo.weboss.hk/h105/index.php#"><span class="glyphicon glyphicon-share btn-lg" aria-hidden="true"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 分享</font></font></a>
        <div class="dropdown-menu webshare">
            <!-- AddToAny BEGIN -->
            <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="line-height: 32px;">
                <a class="a2a_dd" href="https://www.addtoany.com/share#url=http%3A%2F%2Fdemo.weboss.hk%2Fh105%2Findex.php&amp;title=Home-Foreign%20trade%20template%20website"><span class="a2a_svg a2a_s__default a2a_s_a2a" style="background-color: rgb(1, 102, 255);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g fill="#FFF"><path d="M14 7h4v18h-4z"></path><path d="M7 14h18v4H7z"></path></g></svg></span><span class="a2a_label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分享</font></font></span></a>
                <a class="a2a_button_facebook" target="_blank" href="http://demo.weboss.hk/#facebook" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: rgb(59, 89, 152);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z"></path></svg></span><span class="a2a_label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook的</font></font></span></a>
                <a class="a2a_button_twitter" target="_blank" href="http://demo.weboss.hk/#twitter" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: rgb(85, 172, 238);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M28 8.557a9.913 9.913 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.738 9.738 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.893 9.893 0 0 1-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"></path></svg></span><span class="a2a_label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">推特</font></font></span></a>
                <a class="a2a_button_google_plus" target="_blank" href="http://demo.weboss.hk/#google_plus" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_google_plus" style="background-color: rgb(221, 75, 57);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M27 15h-2v-2h-2v2h-2v2h2v2h2v-2h2m-15-2v2.4h3.97c-.16 1.03-1.2 3.02-3.97 3.02-2.39 0-4.34-1.98-4.34-4.42s1.95-4.42 4.34-4.42c1.36 0 2.27.58 2.79 1.08l1.9-1.83C15.47 9.69 13.89 9 12 9c-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.72-2.84 6.72-6.84 0-.46-.05-.81-.11-1.16H12z" fill="#FFF"></path></svg></span><span class="a2a_label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Google+的</font></font></span></a>
                <a class="a2a_button_linkedin" target="_blank" href="http://demo.weboss.hk/#linkedin" rel="nofollow noopener"><span class="a2a_svg a2a_s__default a2a_s_linkedin" style="background-color: rgb(0, 123, 181);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M6.227 12.61h4.19v13.48h-4.19V12.61zm2.095-6.7a2.43 2.43 0 0 1 0 4.86c-1.344 0-2.428-1.09-2.428-2.43s1.084-2.43 2.428-2.43m4.72 6.7h4.02v1.84h.058c.56-1.058 1.927-2.176 3.965-2.176 4.238 0 5.02 2.792 5.02 6.42v7.395h-4.183v-6.56c0-1.564-.03-3.574-2.178-3.574-2.18 0-2.514 1.7-2.514 3.46v6.668h-4.187V12.61z" fill="#FFF"></path></svg></span><span class="a2a_label">LinkedIn</span></a>
                <div style="clear: both;"></div></div>
            <script type="text/javascript" src="js/page.js"></script>
            <!-- AddToAny END -->
        </div>
    </div>
    <div class="foot_nav">
        <a href="tel:18926129998"><span class="glyphicon glyphicon-phone btn-lg" aria-hidden="true"></span>Call</a>
    </div>
    <div class="foot_nav" aria-hidden="true" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="glyphicon glyphicon-th-list btn-lg" aria-hidden="true"></span>Menu
    </div>
    <div class="foot_nav">
        <a id="gototop" href="http://demo.weboss.hk/h105/index.php#"><span class="glyphicon glyphicon-circle-arrow-up btn-lg" aria-hidden="true"></span>Top</a>
    </div>
</nav>

<script charset="UTF-8" src="js/zh-CN.js"></script>