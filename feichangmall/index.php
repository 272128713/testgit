<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			非常猫
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" type="text/css" href="css/app.css" />
        <link rel="stylesheet" type="text/css" href="css/common.css" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <style>

        </style>
	</head>
	<body>
		<div class="header">
			<a href="" class="leftimg">
			</a>
			<div class="textcenter">
				陕西师范大学（长安区)
				<img src="images/adres.png" alt="" />
			</div>
<!--			<a href="" class="rightimg">-->
<!--			<div class="signnum">1</div>-->
<!--			</a>-->
		</div>
		<div class="navul" id="navul">
            <div class="bul">
                <a class="navli active">
                    首页
                </a>
                <a class="navli">
                    水果
                </a>
                <a class="navli">
                    零食
                </a>
                <a class="navli">
                    乳制品
                </a>
                <a class="navli">
                    干果
                </a>
                <a class="navli">
                    聚划算
                </a>
            </div>
		</div>
		<div id="slider" class="swipe" style="visibility:visible;">
			<div class="swipe-wrap">
				<figure>
					<div>
						<img src="images/banner.png" style="height: 100%;width: 100%;"/>
					</div>
				</figure>
				<!--
                	作者：272128713@qq.com
                	时间：2016-03-05
                	描述：轮播循环figure标签
                -->
				<!--<figure>
					<div>
						<img src="images/banner.png" width="100%" height="100%" />
					</div>
				</figure-->
			</div>
		</div>
		<div class="sec-title">
			水果
		</div>
		<div class="sec-content">
            <div class="list">
                <img src="images/apple.png" alt="" />
                <div class="mallp">
                    <div class="p1">洛川红富士苹果2斤</div>
                    <div class="p2">洛川苹果品质优良，果形优美，个大均匀，色泽艳丽，肉质脆密，香甜可口，素以色香味俱佳著称。</div>
                    <div class="p3">￥8.90</div>
                    <div class="p4"><del>市场价：￥10.68</del></div>
                    <!--					<img src="images/add.png" class="addbuy" alt=""  style="width: 25px;"/>-->
                    <div class="addbuy">
                        <div class="addli lisign minus" >-</div>
                        <div class="addli num" style="width: 20px;font-size: 15px;">0</div>
                        <div class="addli lisign plus" >+</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
		</div>
<!--		<div class="footer">-->
<!--			<div class="footli home-active">首页</div>-->
<!--			<div class="footli order">我的订单</div>-->
<!--			<div class="footli user">用户中心</div>-->
<!--		</div>-->

        <div class="footer">
            <div class="buylogo">
                <img src="images/buylogo.png" alt="" />
                <div class="signnum">0</div>
            </div>
            <div class="money">共￥0.00 <br />满10元包邮</div>
            <div class="gobuy">去付款</div>
        </div>
		<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/layer/layer.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/swipe.js"></script>
        <script src="js/iscroll.js" type="text/javascript" charset="utf-8"></script>
		<script>
		var slider =
			Swipe(document.getElementById('slider'), {
				auto: 3000,
				continuous: true,
				callback: function(pos) {}
			});
			$('#slider').height($('#slider img').height());
		</script>
        <script type="text/javascript">
            var phoneScroll;
            function liresize() {
                var w = $(".navul").width();
                $(".navli").width(0.21*w);
                phoneScroll.refresh();
            }

            $(function() {
                //导航
                phoneScroll = new iScroll("navul", {
                    snap: false,
                    momentum: false,
                    vScroll: false,
                    hScroll: true,
                    hScrollbar: false,
                });
                $(window).load(function(e) {
                    liresize();
                });

                //商品购买加减
                goodsnum = 0;
                totalnum = 0;
                $('.minus').click(function(){
                    if(goodsnum>0){
                        goodsnum--;
                        totalnum--;
                        num = $(this).siblings('.num');
                        num.html(goodsnum);
                        $('.signnum').html(totalnum);
                    }
                });
                $('.plus').click(function(){
                    goodsnum++;
                    totalnum++;
                    num = $(this).siblings('.num');
                    num.html(goodsnum);
                    $('.signnum').html(totalnum);


                });


            });
        </script>
	</body>
</html>
