<?php if (!defined('THINK_PATH')) exit();?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    
    <title>门店展示</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link href="__PUBLICI__/Member/css/shop.css" rel="stylesheet" type="text/css">
    <style type="text/css">
       #ui-header {
            width: 100%;
            height: 46px;
            line-height: 46px;
            z-index: 3;
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            }
       .fixed {
        display: block;
        margin: 0 auto;
        min-width: 320px;
        height: 45px;
        top: 0;
        border-bottom: 1px solid #D1D1D1;
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.15);
        -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.15);
        background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#f9f9f9));
        background-image: -webkit-linear-gradient(#ffffff, #f9f9f9);
        background-image: -moz-linear-gradient(#ffffff, #f9f9f9);
        background-image: -ms-linear-gradient(#ffffff, #f9f9f9);
        background-image: -o-linear-gradient(#ffffff, #f9f9f9);
        background-image: linear-gradient(#ffffff, #f9f9f9);
        opacity: 0.95;
        }
       #popmenu {
        cursor: pointer;
        display: block;
        position: relative;
        text-align: center;
        width: 200px;
        margin: 0 auto;
        }

    </style>
</head>
<body id="page_order">
    <div id="ui-header">
        <div class="fixed">
            <a class="ui-title" id="popmenu">门店展示</a>
        </div>
    </div>
    <div class="cardexplain" style="margin-top:46px;">
          <?php if(is_array($store)): foreach($store as $key=>$v): ?><section>
                <a href="#">
                    <article>
                        <span>
                            <img src="<?php echo ($image_url); echo ($v["img"]); ?>" alt="" style="width:80px; height:60px"></span>
                        <h1><?php echo ($v["name"]); ?></h1>
                        <p><?php echo ($v["address"]); ?></p>
                    </article>
                </a>
                <ul>
                    <li><a class="order" href="tel:<?php echo ($v["tel"]); ?>">电话预订</a>
                    </li><li class="last"><a class="gps" href="<?php echo ($v["url"]); ?>">导航</a>
                </li></ul>
            </section><?php endforeach; endif; ?>


         

    </div>


</body></html>