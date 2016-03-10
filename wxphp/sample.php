<?php
error_reporting(0);
require_once "jssdk.php";
$jssdk = new JSSDK("wxf74c235929c5853a", "8c1e8f91a38cb44c552ea7c1a9aa90da");
$signPackage = $jssdk->GetSignPackage();
?>
<?php echo time();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
</head>

<body>

</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
//    alert(location.href.split('#')[0]);
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  wx.config({
    debug: false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
        "onMenuShareTimeline",
        "onMenuShareAppMessage",
        "onMenuShareQQ",
        "onMenuShareWeibo",
        "onMenuShareQZone"
    ]
  });
  wx.ready(function () {
    // 在这里调用 API
//      wx.checkJsApi({
//          jsApiList: ['onMenuShareTimeline'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
//          success: function(res) {
//              // 以键值对的形式返回，可用的api值true，不可用为false
//              // 如：{"checkResult":{"chooseImage":true},"errMsg":"checkJsApi:ok"}
//          }
//      });
      //获取“分享到朋友圈”按钮点击状态及自定义分享内容接口
      wx.onMenuShareTimeline({
          title: '测试标题', // 分享标题
          link: '测试描述', // 分享链接
          imgUrl: 'http://210.14.72.52/firstaid/innerweb/images/sys_img/app_banner.png', // 分享图标
          success: function () {
              // 用户确认分享后执行的回调函数
          },
          cancel: function () {
              // 用户取消分享后执行的回调函数
          }
      });

      //获取“分享给朋友”按钮点击状态及自定义分享内容接口
      wx.onMenuShareAppMessage({
          title: '测试标题', // 分享标题
          desc: '测试描述', // 分享描述
          link: 'http://301.skyhospital.net/yixin/skyHospital/innerweb/wxphp/sample.php', // 分享链接
          imgUrl: 'http://210.14.72.52/firstaid/innerweb/images/sys_img/app_banner.png', // 分享图标
          type: '', // 分享类型,music、video或link，不填默认为link
          dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
          success: function () {
              // 用户确认分享后执行的回调函数
          },
          cancel: function () {
              // 用户取消分享后执行的回调函数
          }
      });

      //获取“分享到QQ”按钮点击状态及自定义分享内容接口
      wx.onMenuShareQQ({
          title: '测试标题', // 分享标题
          desc: '测试描述', // 分享描述
          link: 'http://301.skyhospital.net/yixin/skyHospital/innerweb/wxphp/sample.php', // 分享链接
          imgUrl: 'http://210.14.72.52/firstaid/innerweb/images/sys_img/app_banner.png', // 分享图标
          success: function () {
              // 用户确认分享后执行的回调函数
          },
          cancel: function () {
              // 用户取消分享后执行的回调函数
          }
      });
      //获取“分享到腾讯微博”按钮点击状态及自定义分享内容接口

      wx.onMenuShareWeibo({
          title: '测试标题', // 分享标题
          desc: '测试描述', // 分享描述
          link: 'http://301.skyhospital.net/yixin/skyHospital/innerweb/wxphp/sample.php', // 分享链接
          imgUrl: 'http://210.14.72.52/firstaid/innerweb/images/sys_img/app_banner.png', // 分享图标
          success: function () {
              // 用户确认分享后执行的回调函数
          },
          cancel: function () {
              // 用户取消分享后执行的回调函数
          }
      });

      //获取“分享到QQ空间”按钮点击状态及自定义分享内容接口

      wx.onMenuShareQZone({
          title: '测试标题', // 分享标题
          desc: '测试描述', // 分享描述
          link: 'http://301.skyhospital.net/yixin/skyHospital/innerweb/wxphp/sample.php', // 分享链接
          imgUrl: 'http://210.14.72.52/firstaid/innerweb/images/sys_img/app_banner.png', // 分享图标
          success: function () {
              // 用户确认分享后执行的回调函数
          },
          cancel: function () {
              // 用户取消分享后执行的回调函数
          }
      });
  });
</script>
</html>
