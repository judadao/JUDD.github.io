<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
  <head>
    <meta charset="UTF-8">
    <title>Responsive template - 怪物圖鑑 - UXPin</title>
    <meta http-equiv="Expires" content="0"/>
    <meta name="robots" content="noindex, nofollow"/>
    <meta name="author" content=""/>
    <meta name="language" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"  />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <link rel="stylesheet" href="data/css_previewStyles_66e42343.css" type="text/css"/>
          <link rel="stylesheet" href="data/5_b_8_d_f99c8407da449947ea31362003beb2630df3.css" type="text/css"/>    
    
    <script type="text/javascript"  src="data/js_previewLibs_8528bfe9.js"></script>
    
<script>
  (function() {
    window.uxpft = new FeatureToggler({"features_names":{"FEATURE_LAYERS":"feature_layers","FEATURE_UXPATTERNS":"feature_uxpatterns","FEATURE_UXDOCUMENTS":"feature_uxdocuments","FEATURE_DOCUMENTS_UPLOAD":"feature_documents_upload","FEATURE_CHAT":"feature_chat","FEATURE_EXPORTHTML":"feature_export_html","FEATURE_PREVIEWPASS":"feature_previewpass","FEATURE_EXTENDEDLIBRARY":"feature_extendedlibrary","FEATURE_HIGHER_PLAN_INFO":"feature_higher_plan_info","FEATURE_LIVE_SHARE":"feature_live_share","FEATURE_PROJECT_IMPORT":"feature_project_import","FEATURE_USER_TESTING":"feature_user_testing","FEATURE_VAT_PER_COUNTRY":"feature_vat_per_country","FEATURE_REFERRAL":"feature_referral_program","FEATURE_TFA_AUTH":"feature_tfa_authentication","FEATURE_GROUP_DOCUMENTS":"feature_group_documents"},"features_status":{"feature_vat_per_country":true,"feature_referral_program":false,"feature_uxpatterns":false},"features_by_plan":[]});
  })();
</script>
    
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" type="image/png" href="data/favicon.png">

    
    <script type="text/javascript">
        //potrzebna dla floating sidebara :/
        dpManager = null;
        if (navigator.appName == 'Microsoft Internet Explorer') {
          alert("We're trying hard to make UXPin work with InternetExplorer, but we're not there yet. Meanwhile please use Firefox, Chrome or Safari");
        }
    </script>
    
  </head><body class="preview html-export">
<?php
    session_start();//啟用session
    include("connect.php");//資料庫連線

    if(is_null($_SESSION['username'])){//判斷使用者是否有登入
      header("location:http://127.0.0.1/game/index.php");//假如沒登入跳回登入畫面
      exit;}
  ?>
     
<script type="text/javascript"  src="data/js_offlinePreviewLibs_48decc79.js"></script>
<link rel="stylesheet" href="data/1_5_a_7_2b16be847d2289ed6a7787b63aaa03f613e1.css" type="text/css"/>
<script>
  var Preview = new dmsDPPreview_Preview();
</script>

<div id="canvas">
    <div id="canvas-wrapper">
        <div id="canvas-area">
            <div id="main1">
              <form action="map.php">
                <input type="submit" style=";z-index:10001;border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;border-color:#dddddd;border-style:solid;background-color:#3498db;color:#FFF;font-size:14px;font-weight:bold;font-style:normal;font-family:Arial;text-align:center;box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-o-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);background-size:auto;background-repeat:repeat;background-position:center center;padding-top:6px;padding-right:10px;padding-bottom:6px;padding-left:10px;left:1080px;top:32px;position:absolute;width:120px;height:30px;;" class="ElButton active " value="返回" id="el3374034_d330355e990abdd207df5fecd90af415" />
              </form>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(3374034, document.getElementById('el3374034_d330355e990abdd207df5fecd90af415'), {"id":3374034,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script><div class="ElGroup " style="z-index:10003;left:20px;top:20px;font-family:;border-width:0px;border-style:solid;position:absolute;width:205px;height:54px;" id="el52164_9e4075fdb21741d018db6a7871d7b5f3" >    <div class="ElTextElement " style="left:0px;top:0px;z-index:10002;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:205px;height:54px;" id="el26828_1c94d4ce2efe32aed356f3982a063587" ><p class="wysiwyg-font-type-Roboto" style="font-size: 36px;"><font color="#333333">怪物圖鑑</font></p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(26828, document.getElementById('el26828_1c94d4ce2efe32aed356f3982a063587'), {"id":26828,"interactive":false,"in_group":true,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script></div><script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(52164, document.getElementById('el52164_9e4075fdb21741d018db6a7871d7b5f3'), {"id":52164,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":null})})();</script>    <div class="ElTextElement " style="z-index:10005;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;left:25px;top:224px;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el5431360_9c97ea744b77ee6a5cbfb278fe211969" ><p style="font-size: 24px;">史萊姆</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(5431360, document.getElementById('el5431360_9c97ea744b77ee6a5cbfb278fe211969'), {"id":5431360,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:225px;top:224px;z-index:10007;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el2335974_bc080fe6c2c3282b3b85277d5dcd3961" ><p style="font-size: 24px;">青蟒．史奈克</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2335974, document.getElementById('el2335974_bc080fe6c2c3282b3b85277d5dcd3961'), {"id":2335974,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el6367483_357b4f6101905ddaa33756fce00da121" style="left:225px;top:74px;z-index:10006;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Snake.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6367483, document.getElementById('el6367483_357b4f6101905ddaa33756fce00da121'), {"id":6367483,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el5528805_bdb17feec5b2512f3cfed9e6fcf3585e" style="left:425px;top:74px;z-index:10008;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Assassin.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(5528805, document.getElementById('el5528805_bdb17feec5b2512f3cfed9e6fcf3585e'), {"id":5528805,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el5649421_62af8473d00be83eca648bf0d586b703" style="left:625px;top:74px;z-index:10010;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Icelady.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(5649421, document.getElementById('el5649421_62af8473d00be83eca648bf0d586b703'), {"id":5649421,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:625px;top:224px;z-index:10011;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:63px;" id="el6066611_f0e23d702e938abf342b86f57e862ec0" ><p style="font-size: 24px;">冰姬．艾絲茵</p><p style="font-size: 24px;"><br></p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6066611, document.getElementById('el6066611_f0e23d702e938abf342b86f57e862ec0'), {"id":6066611,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:425px;top:224px;z-index:10009;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el6365930_5c3eeb8eae7c59d52f63d518ea0a409d" ><p style="font-size: 24px;">水之諜影．澗</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6365930, document.getElementById('el6365930_5c3eeb8eae7c59d52f63d518ea0a409d'), {"id":6365930,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:825px;top:224px;z-index:10013;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:63px;" id="el662735_23e33cffccb1f98e912c1b627286dbc2" ><p style="font-size: 24px;">蛇姬．美杜莎</p><p style="font-size: 24px;"><br></p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(662735, document.getElementById('el662735_23e33cffccb1f98e912c1b627286dbc2'), {"id":662735,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2457373_496833779412e113c3b5b17e5d0177c2" style="left:825px;top:74px;z-index:10012;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Lamia.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2457373, document.getElementById('el2457373_496833779412e113c3b5b17e5d0177c2'), {"id":2457373,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el285838_c2ac714661e51f5da60cb7061fb96271" style="left:825px;top:280px;z-index:10022;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Earthspirit.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(285838, document.getElementById('el285838_c2ac714661e51f5da60cb7061fb96271'), {"id":285838,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el550164_49307415b39b6660b025071a28fcaac0" style="left:625px;top:280px;z-index:10020;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Dragon.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(550164, document.getElementById('el550164_49307415b39b6660b025071a28fcaac0'), {"id":550164,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:425px;top:430px;z-index:10019;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el1224899_e62a31df3f5a3a415a7543185cf31269" ><p style="font-size: 24px;">毒蛛．帕魯森</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1224899, document.getElementById('el1224899_e62a31df3f5a3a415a7543185cf31269'), {"id":1224899,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:25px;top:430px;z-index:10015;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el1437568_3b8db250ee43512098e14d70d7f9c171" ><p style="font-size: 24px;">風精靈．溫德</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1437568, document.getElementById('el1437568_3b8db250ee43512098e14d70d7f9c171'), {"id":1437568,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:825px;top:430px;z-index:10023;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el2488504_0cae57eb121529228133cebc594baf96" ><p style="font-size: 24px;">木神久久能智</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2488504, document.getElementById('el2488504_0cae57eb121529228133cebc594baf96'), {"id":2488504,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el4434053_6774d86983505312a3d57d760ca46f70" style="left:225px;top:280px;z-index:10016;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Plant.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(4434053, document.getElementById('el4434053_6774d86983505312a3d57d760ca46f70'), {"id":4434053,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:225px;top:430px;z-index:10017;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el4489793_5ea979fd177639c6f1627d47911788c7" ><p style="font-size: 24px;">巨花．弗勞爾</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(4489793, document.getElementById('el4489793_5ea979fd177639c6f1627d47911788c7'), {"id":4489793,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:625px;top:430px;z-index:10021;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el4679398_e583aa8280c276cfd744910bf1b9f524" ><p style="font-size: 24px;">龍．尼德霍格</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(4679398, document.getElementById('el4679398_e583aa8280c276cfd744910bf1b9f524'), {"id":4679398,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el6384470_6e0c982a006ac0e9c83b28027fc350b2" style="left:425px;top:280px;z-index:10018;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Spider.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6384470, document.getElementById('el6384470_6e0c982a006ac0e9c83b28027fc350b2'), {"id":6384470,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el6394478_4e0aeafedc7fcf8093d7fa3541fcd578" style="left:25px;top:280px;z-index:10014;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Windspirit.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6394478, document.getElementById('el6394478_4e0aeafedc7fcf8093d7fa3541fcd578'), {"id":6394478,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script><div class="line " id="el2014291_416f85413ee95e29d4c4a62c1a3bcfbd" style="line-orientation:horizontal;z-index:10024;color:#8a8a8a;stroke:1;type:solid;left:25px;top:265px;font-family:;border-width:0px;border-style:solid;position:absolute;width:990px;height:10px;">
 <svg version="1.2" width="100%" height="100%">
  <line x1="0" y1="5.5" x2="990" y2="5.5" stroke="#8a8a8a" stroke-width="1" stroke-dasharray="" stroke-linecap="square" />
 </svg>
</div><script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2014291, document.getElementById('el2014291_416f85413ee95e29d4c4a62c1a3bcfbd'), {"id":2014291,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el6077109_9271c5ca18b10fafae685481d348a3a1" style="left:25px;top:74px;z-index:10004;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Slime.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6077109, document.getElementById('el6077109_9271c5ca18b10fafae685481d348a3a1'), {"id":6077109,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:625px;top:619px;z-index:10032;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el30143_f42f077a5eeab6a842ee0805820c065c" ><p style="font-size: 24px;">無端正阿修羅</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(30143, document.getElementById('el30143_f42f077a5eeab6a842ee0805820c065c'), {"id":30143,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:825px;top:619px;z-index:10034;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el205592_9bce71dc2c577c54894d5710e0805f4d" ><p style="font-size: 24px;">炎帝．神農</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(205592, document.getElementById('el205592_9bce71dc2c577c54894d5710e0805f4d'), {"id":205592,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script><div class="line " id="el354327_cd159b5d19f8714c6cd478743eea9ac5" style="line-orientation:horizontal;left:25px;top:660px;z-index:10045;color:#8a8a8a;stroke:1;type:solid;font-family:;border-width:0px;border-style:solid;position:absolute;width:990px;height:10px;">
 <svg version="1.2" width="100%" height="100%">
  <line x1="0" y1="5.5" x2="990" y2="5.5" stroke="#8a8a8a" stroke-width="1" stroke-dasharray="" stroke-linecap="square" />
 </svg>
</div><script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(354327, document.getElementById('el354327_cd159b5d19f8714c6cd478743eea9ac5'), {"id":354327,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:225px;top:619px;z-index:10028;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el569262_eb099138fadebb532810df5d0629edb2" ><p style="font-size: 24px;">異域法眼．空</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(569262, document.getElementById('el569262_eb099138fadebb532810df5d0629edb2'), {"id":569262,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el666221_e574934c0b50680e3d7e5ff50454351c" style="left:825px;top:675px;z-index:10043;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_______.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(666221, document.getElementById('el666221_e574934c0b50680e3d7e5ff50454351c'), {"id":666221,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:25px;top:619px;z-index:10026;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el920455_f7633be97e00fc5c23c7a3d1388cda9f" ><p style="font-size: 24px;">雞蛇獸阿奇斯</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(920455, document.getElementById('el920455_f7633be97e00fc5c23c7a3d1388cda9f'), {"id":920455,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el999923_56fefe0d62c44a2501786dd31027e228" style="left:625px;top:675px;z-index:10041;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:149px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Darklord.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(999923, document.getElementById('el999923_56fefe0d62c44a2501786dd31027e228'), {"id":999923,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:425px;top:619px;z-index:10030;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el1097631_63b903b21e88c247ad44ef1994fb514c" ><p style="font-size: 24px;">奇美拉蘭斯特</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1097631, document.getElementById('el1097631_63b903b21e88c247ad44ef1994fb514c'), {"id":1097631,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1121530_40ea3943de57e60c1d985ea6bff48377" style="left:425px;top:469px;z-index:10029;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Chimera.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1121530, document.getElementById('el1121530_40ea3943de57e60c1d985ea6bff48377'), {"id":1121530,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:25px;top:825px;z-index:10036;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el1188890_551e70709144cacf51d8513ef164dad7" ><p style="font-size: 24px;">海騎士．納茲</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1188890, document.getElementById('el1188890_551e70709144cacf51d8513ef164dad7'), {"id":1188890,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1524240_ac3e1d13a04745c1039297b38650f9ea" style="left:25px;top:675px;z-index:10035;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Hero_f.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1524240, document.getElementById('el1524240_ac3e1d13a04745c1039297b38650f9ea'), {"id":1524240,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1765012_9bd6f1916c35837f83bc84e2e3711e47" style="left:425px;top:675px;z-index:10039;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Warrior_f.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1765012, document.getElementById('el1765012_9bd6f1916c35837f83bc84e2e3711e47'), {"id":1765012,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1801008_88369cb401ddd6d9f68d9dd2101b6bfb" style="left:25px;top:469px;z-index:10025;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Cockatrice.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1801008, document.getElementById('el1801008_88369cb401ddd6d9f68d9dd2101b6bfb'), {"id":1801008,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:825px;top:825px;z-index:10044;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el2045036_6cf97516a0a0437fe4330c0279065966" ><p style="font-size: 24px;">無賴暴民．剛</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2045036, document.getElementById('el2045036_6cf97516a0a0437fe4330c0279065966'), {"id":2045036,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:625px;top:825px;z-index:10042;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el2190800_ef0a854a86b1381c4548464813a0d05f" ><p style="font-size: 24px;">訓龍帝．泰坦</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2190800, document.getElementById('el2190800_ef0a854a86b1381c4548464813a0d05f'), {"id":2190800,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2213733_83d94a6e01b3aead759bc2872b1af691" style="left:225px;top:675px;z-index:10037;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Thief_m.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2213733, document.getElementById('el2213733_83d94a6e01b3aead759bc2872b1af691'), {"id":2213733,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2229290_4b14a185cc80644766e66f8b0cdc966a" style="left:625px;top:469px;z-index:10031;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Asura.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2229290, document.getElementById('el2229290_4b14a185cc80644766e66f8b0cdc966a'), {"id":2229290,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:225px;top:825px;z-index:10038;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el2327355_f636a8625845026fd2b966a964b8f230" ><p style="font-size: 24px;">風忍者．傑拉</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2327355, document.getElementById('el2327355_f636a8625845026fd2b966a964b8f230'), {"id":2327355,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2344997_b58927ddc5c244a8d41aa76b34b89b00" style="left:825px;top:469px;z-index:10033;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Ifrit.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2344997, document.getElementById('el2344997_b58927ddc5c244a8d41aa76b34b89b00'), {"id":2344997,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:425px;top:825px;z-index:10040;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el2440712_a7debab212d6356bf8aa2c1a62cc76bb" ><p style="font-size: 24px;">炎盾兵．艾拉</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2440712, document.getElementById('el2440712_a7debab212d6356bf8aa2c1a62cc76bb'), {"id":2440712,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2504357_f42e72e6a06ef06e4ae54795643ecc87" style="left:225px;top:469px;z-index:10027;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Gayzer.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2504357, document.getElementById('el2504357_f42e72e6a06ef06e4ae54795643ecc87'), {"id":2504357,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:180px;top:1103px;z-index:10046;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;" id="el1098689_24759241b2daeced7f57171440cb7947" ><div>史萊姆</div><div>攻擊力:１０</div><div>防禦力:１０</div><div>血量:１０</div><div>特技:Ｘ</div><div>黏滑滑黏滑滑呼呼～</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1098689, document.getElementById('el1098689_24759241b2daeced7f57171440cb7947'), {"id":1098689,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:650px;top:1103px;z-index:10048;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;" id="el2438730_4f45388d9388be02b8c628f5831f9210" >青蟒．史奈克<div>攻擊力:２０</div><div>防禦力:５</div><div>血量:２０</div><div>特技:毒咬</div><div>別看我這樣，我會毒死你的</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2438730, document.getElementById('el2438730_4f45388d9388be02b8c628f5831f9210'), {"id":2438730,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2521229_2b3d4bd0a539cbe341b323c2952cd6ac" style="left:25px;top:1070px;z-index:10047;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Slime_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2521229, document.getElementById('el2521229_2b3d4bd0a539cbe341b323c2952cd6ac'), {"id":2521229,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:650px;top:1443px;z-index:10054;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;" id="el73792_94341cf484a4fbb061f9a6090e5fa1b2" ><div>風精靈．溫德</div><div>攻擊力:２０</div><div>防禦力:２０</div><div>血量:３０</div><div>特技:風吟</div><div>來無影去無蹤，來去一陣風</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(73792, document.getElementById('el73792_94341cf484a4fbb061f9a6090e5fa1b2'), {"id":73792,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:650px;top:1268px;z-index:10050;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;" id="el95787_85e72b47a9a71ca76a343a0d76f4f51b" >冰姬．艾絲茵<div>攻擊力:３５</div><div>防禦力:１０</div><div>血量:５０</div><div>特技:寒地</div><div>寒冷的心將極凍你</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(95787, document.getElementById('el95787_85e72b47a9a71ca76a343a0d76f4f51b'), {"id":95787,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:180px;top:1443px;z-index:10052;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;" id="el469343_6627891346a55992d7fbe6f2d2a63ce4" >蛇姬．美杜莎<div>攻擊力:４０</div><div>防禦力:２０</div><div>血量:２００</div><div>特技:石化</div><div>勸你別注視著雙眼，否則...</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(469343, document.getElementById('el469343_6627891346a55992d7fbe6f2d2a63ce4'), {"id":469343,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el959826_ebb8dfd92d1761bc188064c8166cbf18" style="left:495px;top:1410px;z-index:10055;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Windspirit.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(959826, document.getElementById('el959826_ebb8dfd92d1761bc188064c8166cbf18'), {"id":959826,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:180px;top:1268px;z-index:10049;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;" id="el1319873_797e1e6643909dae9799a37b99bfd3a8" >水之諜影．澗<div>攻擊力:１５</div><div>防禦力:３０</div><div>血量:３０</div><div>特技:水癒</div><div>潛身在影子的角落</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1319873, document.getElementById('el1319873_797e1e6643909dae9799a37b99bfd3a8'), {"id":1319873,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2007944_a01b5e953c2ce1473fcca395af76a09c" style="left:25px;top:1410px;z-index:10053;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Lamia.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2007944, document.getElementById('el2007944_a01b5e953c2ce1473fcca395af76a09c'), {"id":2007944,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2405970_16e90b2c3d7949e300d5f04a6d44b7af" style="left:495px;top:1235px;z-index:10051;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Icelady.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2405970, document.getElementById('el2405970_16e90b2c3d7949e300d5f04a6d44b7af'), {"id":2405970,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:185px;top:1796px;z-index:10060;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;" id="el23346_ce16e67f257a585f4110ca6c39ff880b" >龍．尼德霍格<div>攻擊力:５０</div><div>防禦力:３０</div><div>血量:１００</div><div>特技:咆嘯</div><div>吾雖意識已死，然而身猶在</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(23346, document.getElementById('el23346_ce16e67f257a585f4110ca6c39ff880b'), {"id":23346,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el689319_981e8077fc6c3d17d972cc1394072f72" style="left:30px;top:1928px;z-index:10065;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Cockatrice_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(689319, document.getElementById('el689319_981e8077fc6c3d17d972cc1394072f72'), {"id":689319,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1060913_49ccc31a5c8a08bbc30c72f6f236f466" style="left:30px;top:2103px;z-index:10069;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Chimera.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1060913, document.getElementById('el1060913_49ccc31a5c8a08bbc30c72f6f236f466'), {"id":1060913,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:185px;top:1621px;z-index:10056;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;" id="el1093445_76d947a1daa229751f8501bf324d5f40" >巨花．弗勞爾<div>攻擊力:３０</div><div>防禦力:２０</div><div>血量:５０</div><div>特技:攀附</div><div>咬殺一切！</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1093445, document.getElementById('el1093445_76d947a1daa229751f8501bf324d5f40'), {"id":1093445,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:655px;top:1621px;z-index:10058;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;" id="el1158197_4f5b57913e2b40bb10a7baeefb865e67" >毒蛛．帕魯森<div>攻擊力:２５</div><div>防禦力:５０</div><div>血量:５０</div><div>特技:吐絲</div><div>將你綑成木乃伊嘿嘿</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1158197, document.getElementById('el1158197_4f5b57913e2b40bb10a7baeefb865e67'), {"id":1158197,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:185px;top:2136px;z-index:10068;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:117px;" id="el1200683_bffb280d1de32a8b86385109df4cdd27" >奇美拉．蘭斯特<div>攻擊力:１００</div><div>防禦力:３０</div><div>血量:８０</div><div>特技:虎嘯</div><div>是誰允許你來到我的領地的</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1200683, document.getElementById('el1200683_bffb280d1de32a8b86385109df4cdd27'), {"id":1200683,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1326615_ccb1df6ffe8f147fe17823b67f2c73c6" style="left:500px;top:1588px;z-index:10059;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Spider_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1326615, document.getElementById('el1326615_ccb1df6ffe8f147fe17823b67f2c73c6'), {"id":1326615,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1362205_4ba06867571cbfd87a98ca4f4213f9a1" style="left:500px;top:1763px;z-index:10063;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Earthspirit_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1362205, document.getElementById('el1362205_4ba06867571cbfd87a98ca4f4213f9a1'), {"id":1362205,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1424279_37cbd92910dc27afa2756fa776d505b1" style="left:500px;top:1928px;z-index:10067;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Gayzer_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1424279, document.getElementById('el1424279_37cbd92910dc27afa2756fa776d505b1'), {"id":1424279,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:655px;top:1796px;z-index:10062;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:118px;" id="el1682593_ca478d162b45b556f1f0915b1538f568" >木神．久久能智<div>攻擊力:４０</div><div>防禦力:８０</div><div>血量:４００</div><div>特技:聖歌</div><div>你，聽得見森林對人類的憤怒嘛</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1682593, document.getElementById('el1682593_ca478d162b45b556f1f0915b1538f568'), {"id":1682593,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1781865_6a9dc340f1ad878c78bc4aa1946ffc22" style="left:500px;top:2103px;z-index:10071;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Asura_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1781865, document.getElementById('el1781865_6a9dc340f1ad878c78bc4aa1946ffc22'), {"id":1781865,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:185px;top:1961px;z-index:10064;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:117px;" id="el1821596_06be28bff02f0c5f44a72a938483c153" >雞蛇獸．阿奇斯<div>攻擊力:６０</div><div>防禦力:５０</div><div>血量:５０</div><div>特技:咬殺</div><div>咕絲～你在笑什麼？</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1821596, document.getElementById('el1821596_06be28bff02f0c5f44a72a938483c153'), {"id":1821596,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2166057_a0348963a13b071436a8e0b282108dce" style="left:30px;top:1588px;z-index:10057;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Plant.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2166057, document.getElementById('el2166057_a0348963a13b071436a8e0b282108dce'), {"id":2166057,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:655px;top:2136px;z-index:10070;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;" id="el2320214_42c64ba299ac4d180c400cf7bf43faba" ><div>無端正．阿修羅</div><div>攻擊力:９０</div><div>防禦力:８０</div><div>血量:２００</div><div>特技:輪迴</div><div>入六道輪迴，忘卻滅世三千煩惱</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2320214, document.getElementById('el2320214_42c64ba299ac4d180c400cf7bf43faba'), {"id":2320214,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2617717_af733b33ebf32541c799b30a513a190b" style="left:30px;top:1763px;z-index:10061;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Dragon_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2617717, document.getElementById('el2617717_af733b33ebf32541c799b30a513a190b'), {"id":2617717,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:655px;top:1961px;z-index:10066;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:118px;" id="el2741754_c6b9c5c870ff2c176a30e394a749a57b" >異域法眼．空<div>攻擊力:２０</div><div>防禦力:１００</div><div>血量:５０</div><div>特技:看透</div><div>一切，我都看在眼底</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2741754, document.getElementById('el2741754_c6b9c5c870ff2c176a30e394a749a57b'), {"id":2741754,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:180px;top:2828px;z-index:10084;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:136px;" id="el43398_338fa377537464694905f81cc293f0e4" >天靈．帝斯寇<div>攻擊力:２００</div><div>防禦力:５０</div><div>血量:５００</div><div>特技:讚歌</div><div>天賜萬物幸福的鐘聲，然而人類就是聽不到</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(43398, document.getElementById('el43398_338fa377537464694905f81cc293f0e4'), {"id":43398,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el98953_dea97c2a67130ef9b9919dd220d3174c" style="left:25px;top:2620px;z-index:10081;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Darklord_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(98953, document.getElementById('el98953_dea97c2a67130ef9b9919dd220d3174c'), {"id":98953,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:180px;top:2313px;z-index:10072;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:117px;" id="el343516_298429806bf4c1cff49d41dbef5e90af" >炎帝．神農<div>攻擊力:１５０</div><div>防禦力:１００</div><div>血量:１００</div><div>特技:百草</div><div>就是你，毒害世間的雜草</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(343516, document.getElementById('el343516_298429806bf4c1cff49d41dbef5e90af'), {"id":343516,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:180px;top:3160px;z-index:10088;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:116px;" id="el568577_f120e35dcd51fb4aa7c089487e7c3de2" >終曲．ＹＰ<div>攻擊力:３００</div><div>防禦力:３００</div><div>血量:１００００</div><div>特技:權威</div><div>你再一次就把你當掉</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(568577, document.getElementById('el568577_f120e35dcd51fb4aa7c089487e7c3de2'), {"id":568577,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el601699_2394df01cd73fda82e4ee8e956e8e47f" style="left:25px;top:2795px;z-index:10085;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_God_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(601699, document.getElementById('el601699_2394df01cd73fda82e4ee8e956e8e47f'), {"id":601699,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el621465_3b03eae73299c845b9a3ff0bd4c2b075" style="left:25px;top:2280px;z-index:10073;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Ifrit_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(621465, document.getElementById('el621465_3b03eae73299c845b9a3ff0bd4c2b075'), {"id":621465,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:650px;top:2313px;z-index:10074;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:118px;" id="el628780_00f8ac31da6ea2d3aa041ca3da6fb92d" >海騎士．納茲<div>攻擊力:１２０</div><div>防禦力:５０</div><div>血量:２００</div><div>特技:突刺</div><div>我的一生，為光榮薩馬斯</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(628780, document.getElementById('el628780_00f8ac31da6ea2d3aa041ca3da6fb92d'), {"id":628780,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:180px;top:2488px;z-index:10076;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:118px;" id="el1252944_3b867b93d9e04b22275635d19f460ebb" >風忍者．傑拉<div>攻擊力:８０</div><div>防禦力:５０</div><div>血量:２５０</div><div>特技:回音</div><div>我只是履行上位者的命令</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1252944, document.getElementById('el1252944_3b867b93d9e04b22275635d19f460ebb'), {"id":1252944,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:650px;top:3163px;z-index:10090;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:115px;" id="el1286975_cd9242aada80e7a8fb763b5310ccb3e2" ><div>寶箱怪</div><div>攻擊力:0</div><div>防禦力:0</div><div>血量:1</div><div>特技:千金難買寶箱怪</div><div><br></div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1286975, document.getElementById('el1286975_cd9242aada80e7a8fb763b5310ccb3e2'), {"id":1286975,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:180px;top:2653px;z-index:10080;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:118px;" id="el1331528_ec0131d6f12e75d3b11ef2a9ff2b759e" >訓龍帝王．泰坦<div>攻擊力:２００</div><div>防禦力:５０</div><div>血量:５００</div><div>特技:逆刃</div><div>覬覦薩馬斯城的萬物，皆須消滅</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1331528, document.getElementById('el1331528_ec0131d6f12e75d3b11ef2a9ff2b759e'), {"id":1331528,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1730083_b4cb9695a2383ebcc8b4a06c915fd914" style="left:25px;top:2455px;z-index:10077;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Thief_m_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1730083, document.getElementById('el1730083_b4cb9695a2383ebcc8b4a06c915fd914'), {"id":1730083,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1846694_b6afa45a287660464c6522ede8916579" style="left:495px;top:2280px;z-index:10075;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Hero_f_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1846694, document.getElementById('el1846694_b6afa45a287660464c6522ede8916579'), {"id":1846694,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1901250_c956ca3390a260431a3acb12ba9d1734" style="left:495px;top:3160px;z-index:10091;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_0.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1901250, document.getElementById('el1901250_c956ca3390a260431a3acb12ba9d1734'), {"id":1901250,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2116713_db628356325f2fb2c71324dcb85db24f" style="left:495px;top:2620px;z-index:10083;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807________1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2116713, document.getElementById('el2116713_db628356325f2fb2c71324dcb85db24f'), {"id":2116713,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2488784_2483ff6b79f26ad47ee02972a9463011" style="left:495px;top:2455px;z-index:10079;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Warrior_f_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2488784, document.getElementById('el2488784_2483ff6b79f26ad47ee02972a9463011'), {"id":2488784,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:650px;top:2653px;z-index:10082;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;" id="el2592019_633fe302af5dd79425bd322deb3be8af" >無賴暴民．剛<div>攻擊力:５</div><div>防禦力:１５０</div><div>血量:５００</div><div>特技:嘴砲</div><div>去訓你的龍啦，銅牌啦嫩。</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2592019, document.getElementById('el2592019_633fe302af5dd79425bd322deb3be8af'), {"id":2592019,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:650px;top:2488px;z-index:10078;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:117px;" id="el2632899_cf581f28a3be765ce739c9a4c6aa6363" >炎盾兵．艾拉<div>攻擊力:１００</div><div>防禦力:１００</div><div>血量:４００</div><div>特技:盾擊</div><div>我的盾，為薩馬斯而舉</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2632899, document.getElementById('el2632899_cf581f28a3be765ce739c9a4c6aa6363'), {"id":2632899,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2659859_0a044cdaa562913c1e1fdfaf74114edf" style="left:25px;top:3145px;z-index:10089;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807___________1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2659859, document.getElementById('el2659859_0a044cdaa562913c1e1fdfaf74114edf'), {"id":2659859,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:650px;top:2828px;z-index:10086;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:117px;" id="el2800369_a3f53ae59f81d5398b0c1c6ff7565c6b" ><div>吸血鬼．派爾</div><div>攻擊力:１８０</div><div>防禦力:２００</div><div>血量:４００</div><div>特技:貪食</div><div>我要吸乾你的每一滴精萃嘻哈哈哈</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2800369, document.getElementById('el2800369_a3f53ae59f81d5398b0c1c6ff7565c6b'), {"id":2800369,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2984722_f49b85adc2805084d9ae45f3824c3c08" style="left:495px;top:2795px;z-index:10087;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Vampire_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2984722, document.getElementById('el2984722_f49b85adc2805084d9ae45f3824c3c08'), {"id":2984722,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:650px;top:2998px;z-index:10094;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:118px;" id="el115788_905deafb3de052a0c72f70011230e6ca" >不死鳥．鳳凰<div>攻擊力:５００</div><div>防禦力:１００</div><div>血量:３０００</div><div>特技:聖光</div><div>死亡的盡頭，妾身未曾見過</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(115788, document.getElementById('el115788_905deafb3de052a0c72f70011230e6ca'), {"id":115788,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:180px;top:2998px;z-index:10092;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:118px;" id="el870650_7f563e842de8dc6dd286457e054e341a" >山靈．納塔爾<div>攻擊力:３００</div><div>防禦力:２００</div><div>血量:１０００</div><div>特技:衝撞</div><div>愚民，你還是執迷不悟得前進嗎？</div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(870650, document.getElementById('el870650_7f563e842de8dc6dd286457e054e341a'), {"id":870650,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2001588_f77c50ea39caa87e9ecfbfc0acd1474b" style="left:25px;top:2965px;z-index:10093;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Behemoth_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2001588, document.getElementById('el2001588_f77c50ea39caa87e9ecfbfc0acd1474b'), {"id":2001588,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el4274677_1c9e92ee9a692fd19bd671990dfa428a" style="left:495px;top:2965px;z-index:10095;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Garuda_1.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(4274677, document.getElementById('el4274677_1c9e92ee9a692fd19bd671990dfa428a'), {"id":4274677,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:230px;top:1030px;z-index:10099;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el111818_691208a4ac3d6bb460b31b484533b09c" ><p style="font-size: 24px;">吸血鬼．派爾</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(111818, document.getElementById('el111818_691208a4ac3d6bb460b31b484533b09c'), {"id":111818,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el528641_1968099085c35463a816199a07bbbe23" style="left:830px;top:880px;z-index:10104;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807__________.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(528641, document.getElementById('el528641_1968099085c35463a816199a07bbbe23'), {"id":528641,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:30px;top:1030px;z-index:10097;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el1133402_e7c7c1177e9d1370c84423a699716936" ><p style="font-size: 24px;">天靈．帝斯寇</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1133402, document.getElementById('el1133402_e7c7c1177e9d1370c84423a699716936'), {"id":1133402,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1568371_f9ad936368db8b227640c2d9c9ab5e41" style="left:430px;top:880px;z-index:10100;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Behemoth.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1568371, document.getElementById('el1568371_f9ad936368db8b227640c2d9c9ab5e41'), {"id":1568371,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1680169_9ec75011026675c1b40a83d7fa20c39e" style="left:30px;top:880px;z-index:10096;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_God.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1680169, document.getElementById('el1680169_9ec75011026675c1b40a83d7fa20c39e'), {"id":1680169,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script><div class="line " id="el2106872_99d7af2a96b83535a0cfe24cb8632938" style="line-orientation:horizontal;left:30px;top:865px;z-index:10106;color:#8a8a8a;stroke:1;type:solid;font-family:;border-width:0px;border-style:solid;position:absolute;width:990px;height:10px;">
 <svg version="1.2" width="100%" height="100%">
  <line x1="0" y1="5.5" x2="990" y2="5.5" stroke="#8a8a8a" stroke-width="1" stroke-dasharray="" stroke-linecap="square" />
 </svg>
</div><script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2106872, document.getElementById('el2106872_99d7af2a96b83535a0cfe24cb8632938'), {"id":2106872,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el2613273_3de6c039ed067bd7f4463244e40c083a" style="left:230px;top:880px;z-index:10098;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Vampire.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2613273, document.getElementById('el2613273_3de6c039ed067bd7f4463244e40c083a'), {"id":2613273,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:430px;top:1030px;z-index:10101;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el3198648_94c4d3a8a5432c757970b829b9f357c1" ><p style="font-size: 24px;">山靈．納塔爾</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(3198648, document.getElementById('el3198648_94c4d3a8a5432c757970b829b9f357c1'), {"id":3198648,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el3737621_86c2bf7ca0fe17495620e52cfb0d5fa0" style="left:630px;top:880px;z-index:10102;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Garuda.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(3737621, document.getElementById('el3737621_86c2bf7ca0fe17495620e52cfb0d5fa0'), {"id":3737621,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:830px;top:1030px;z-index:10105;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el4403596_72f45d1a8408c3bea4ee0a30af7caca7" ><p style="font-size: 24px;">終曲．ＹＰ</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(4403596, document.getElementById('el4403596_72f45d1a8408c3bea4ee0a30af7caca7'), {"id":4403596,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:630px;top:1030px;z-index:10103;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;" id="el5319847_1978d3a14c8e4f735705e239a28cf14d" ><p style="font-size: 24px;">不死鳥．鳳凰</p></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(5319847, document.getElementById('el5319847_1978d3a14c8e4f735705e239a28cf14d'), {"id":5319847,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1322035_ae117dabf3c7e3617aa2d07b6b48bc93" style="left:485px;top:1080px;z-index:10107;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Snake_2.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1322035, document.getElementById('el1322035_ae117dabf3c7e3617aa2d07b6b48bc93'), {"id":1322035,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
    <div class="ElImageWrapper " id="el1899505_608aa5daa4219ea17cdecc60c6289122" style="left:25px;top:1245px;z-index:10108;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
      <img class="ElImage ElImgNoBack" src="data/261032_265807_Assassin.png" />
    </div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1899505, document.getElementById('el1899505_608aa5daa4219ea17cdecc60c6289122'), {"id":1899505,"interactive":true,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>
<script type="text/javascript" data-evaluate="1">
Interactions.ori_styles = {"3374034":{"opacity":null,"width":120,"height":30,"top":32,"left":1080},"52164":{"opacity":null,"width":205,"height":54,"top":20,"left":20},"26828":{"opacity":null,"width":205,"height":54,"top":0,"left":0},"5431360":{"opacity":null,"width":150,"height":35,"top":224,"left":25},"2335974":{"opacity":null,"width":150,"height":35,"top":224,"left":225},"6367483":{"opacity":null,"width":150,"height":150,"top":74,"left":225},"5528805":{"opacity":null,"width":150,"height":150,"top":74,"left":425},"5649421":{"opacity":null,"width":150,"height":150,"top":74,"left":625},"6066611":{"opacity":null,"width":150,"height":63,"top":224,"left":625},"6365930":{"opacity":null,"width":150,"height":35,"top":224,"left":425},"662735":{"opacity":null,"width":150,"height":63,"top":224,"left":825},"2457373":{"opacity":null,"width":150,"height":150,"top":74,"left":825},"285838":{"opacity":null,"width":150,"height":150,"top":280,"left":825},"550164":{"opacity":null,"width":150,"height":150,"top":280,"left":625},"1224899":{"opacity":null,"width":150,"height":35,"top":430,"left":425},"1437568":{"opacity":null,"width":150,"height":35,"top":430,"left":25},"2488504":{"opacity":null,"width":150,"height":35,"top":430,"left":825},"4434053":{"opacity":null,"width":150,"height":150,"top":280,"left":225},"4489793":{"opacity":null,"width":150,"height":35,"top":430,"left":225},"4679398":{"opacity":null,"width":150,"height":35,"top":430,"left":625},"6384470":{"opacity":null,"width":150,"height":150,"top":280,"left":425},"6394478":{"opacity":null,"width":150,"height":150,"top":280,"left":25},"2014291":{"opacity":null,"width":990,"height":10,"top":265,"left":25},"6077109":{"opacity":null,"width":150,"height":150,"top":74,"left":25},"30143":{"opacity":null,"width":150,"height":35,"top":619,"left":625},"205592":{"opacity":null,"width":150,"height":35,"top":619,"left":825},"354327":{"opacity":null,"width":990,"height":10,"top":660,"left":25},"569262":{"opacity":null,"width":150,"height":35,"top":619,"left":225},"666221":{"opacity":null,"width":150,"height":150,"top":675,"left":825},"920455":{"opacity":null,"width":150,"height":35,"top":619,"left":25},"999923":{"opacity":null,"width":150,"height":149,"top":675,"left":625},"1097631":{"opacity":null,"width":150,"height":35,"top":619,"left":425},"1121530":{"opacity":null,"width":150,"height":150,"top":469,"left":425},"1188890":{"opacity":null,"width":150,"height":35,"top":825,"left":25},"1524240":{"opacity":null,"width":150,"height":150,"top":675,"left":25},"1765012":{"opacity":null,"width":150,"height":150,"top":675,"left":425},"1801008":{"opacity":null,"width":150,"height":150,"top":469,"left":25},"2045036":{"opacity":null,"width":150,"height":35,"top":825,"left":825},"2190800":{"opacity":null,"width":150,"height":35,"top":825,"left":625},"2213733":{"opacity":null,"width":150,"height":150,"top":675,"left":225},"2229290":{"opacity":null,"width":150,"height":150,"top":469,"left":625},"2327355":{"opacity":null,"width":150,"height":35,"top":825,"left":225},"2344997":{"opacity":null,"width":150,"height":150,"top":469,"left":825},"2440712":{"opacity":null,"width":150,"height":35,"top":825,"left":425},"2504357":{"opacity":null,"width":150,"height":150,"top":469,"left":225},"1098689":{"opacity":null,"width":300,"height":119,"top":1103,"left":180},"2438730":{"opacity":null,"width":300,"height":119,"top":1103,"left":650},"2521229":{"opacity":null,"width":150,"height":150,"top":1070,"left":25},"73792":{"opacity":null,"width":300,"height":119,"top":1443,"left":650},"95787":{"opacity":null,"width":300,"height":119,"top":1268,"left":650},"469343":{"opacity":null,"width":300,"height":119,"top":1443,"left":180},"959826":{"opacity":null,"width":150,"height":150,"top":1410,"left":495},"1319873":{"opacity":null,"width":300,"height":119,"top":1268,"left":180},"2007944":{"opacity":null,"width":150,"height":150,"top":1410,"left":25},"2405970":{"opacity":null,"width":150,"height":150,"top":1235,"left":495},"23346":{"opacity":null,"width":300,"height":119,"top":1796,"left":185},"689319":{"opacity":null,"width":150,"height":150,"top":1928,"left":30},"1060913":{"opacity":null,"width":150,"height":150,"top":2103,"left":30},"1093445":{"opacity":null,"width":300,"height":119,"top":1621,"left":185},"1158197":{"opacity":null,"width":300,"height":119,"top":1621,"left":655},"1200683":{"opacity":null,"width":300,"height":117,"top":2136,"left":185},"1326615":{"opacity":null,"width":150,"height":150,"top":1588,"left":500},"1362205":{"opacity":null,"width":150,"height":150,"top":1763,"left":500},"1424279":{"opacity":null,"width":150,"height":150,"top":1928,"left":500},"1682593":{"opacity":null,"width":300,"height":118,"top":1796,"left":655},"1781865":{"opacity":null,"width":150,"height":150,"top":2103,"left":500},"1821596":{"opacity":null,"width":300,"height":117,"top":1961,"left":185},"2166057":{"opacity":null,"width":150,"height":150,"top":1588,"left":30},"2320214":{"opacity":null,"width":300,"height":119,"top":2136,"left":655},"2617717":{"opacity":null,"width":150,"height":150,"top":1763,"left":30},"2741754":{"opacity":null,"width":300,"height":118,"top":1961,"left":655},"43398":{"opacity":null,"width":300,"height":136,"top":2828,"left":180},"98953":{"opacity":null,"width":150,"height":150,"top":2620,"left":25},"343516":{"opacity":null,"width":300,"height":117,"top":2313,"left":180},"568577":{"opacity":null,"width":300,"height":116,"top":3160,"left":180},"601699":{"opacity":null,"width":150,"height":150,"top":2795,"left":25},"621465":{"opacity":null,"width":150,"height":150,"top":2280,"left":25},"628780":{"opacity":null,"width":300,"height":118,"top":2313,"left":650},"1252944":{"opacity":null,"width":300,"height":118,"top":2488,"left":180},"1286975":{"opacity":null,"width":300,"height":115,"top":3163,"left":650},"1331528":{"opacity":null,"width":300,"height":118,"top":2653,"left":180},"1730083":{"opacity":null,"width":150,"height":150,"top":2455,"left":25},"1846694":{"opacity":null,"width":150,"height":150,"top":2280,"left":495},"1901250":{"opacity":null,"width":150,"height":150,"top":3160,"left":495},"2116713":{"opacity":null,"width":150,"height":150,"top":2620,"left":495},"2488784":{"opacity":null,"width":150,"height":150,"top":2455,"left":495},"2592019":{"opacity":null,"width":300,"height":119,"top":2653,"left":650},"2632899":{"opacity":null,"width":300,"height":117,"top":2488,"left":650},"2659859":{"opacity":null,"width":150,"height":150,"top":3145,"left":25},"2800369":{"opacity":null,"width":300,"height":117,"top":2828,"left":650},"2984722":{"opacity":null,"width":150,"height":150,"top":2795,"left":495},"115788":{"opacity":null,"width":300,"height":118,"top":2998,"left":650},"870650":{"opacity":null,"width":300,"height":118,"top":2998,"left":180},"2001588":{"opacity":null,"width":150,"height":150,"top":2965,"left":25},"4274677":{"opacity":null,"width":150,"height":150,"top":2965,"left":495},"111818":{"opacity":null,"width":150,"height":35,"top":1030,"left":230},"528641":{"opacity":null,"width":150,"height":150,"top":880,"left":830},"1133402":{"opacity":null,"width":150,"height":35,"top":1030,"left":30},"1568371":{"opacity":null,"width":150,"height":150,"top":880,"left":430},"1680169":{"opacity":null,"width":150,"height":150,"top":880,"left":30},"2106872":{"opacity":null,"width":990,"height":10,"top":865,"left":30},"2613273":{"opacity":null,"width":150,"height":150,"top":880,"left":230},"3198648":{"opacity":null,"width":150,"height":35,"top":1030,"left":430},"3737621":{"opacity":null,"width":150,"height":150,"top":880,"left":630},"4403596":{"opacity":null,"width":150,"height":35,"top":1030,"left":830},"5319847":{"opacity":null,"width":150,"height":35,"top":1030,"left":630},"1322035":{"opacity":null,"width":150,"height":150,"top":1080,"left":485},"1899505":{"opacity":null,"width":150,"height":150,"top":1245,"left":25}};
Interactions.scrollable_el = document.getElementById('canvas-wrapper');
Interactions.timeouts = [];
Interactions.scrolls = [];
var load_events = [];

  
    (function() {
      var element = document.getElementById('el6367483_357b4f6101905ddaa33756fce00da121');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1322035\":\"1322035\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el5528805_bdb17feec5b2512f3cfed9e6fcf3585e');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1899505\":\"1899505\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el5649421_62af8473d00be83eca648bf0d586b703');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2405970\":\"2405970\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2457373_496833779412e113c3b5b17e5d0177c2');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2007944\":\"2007944\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el285838_c2ac714661e51f5da60cb7061fb96271');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1362205\":\"1362205\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el550164_49307415b39b6660b025071a28fcaac0');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2617717\":\"2617717\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el4434053_6774d86983505312a3d57d760ca46f70');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2166057\":\"2166057\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el6384470_6e0c982a006ac0e9c83b28027fc350b2');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1326615\":\"1326615\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el6394478_4e0aeafedc7fcf8093d7fa3541fcd578');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"959826\":\"959826\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el6077109_9271c5ca18b10fafae685481d348a3a1');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2521229\":\"2521229\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el666221_e574934c0b50680e3d7e5ff50454351c');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2116713\":\"2116713\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el999923_56fefe0d62c44a2501786dd31027e228');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"98953\":\"98953\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1121530_40ea3943de57e60c1d985ea6bff48377');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1060913\":\"1060913\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1524240_ac3e1d13a04745c1039297b38650f9ea');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1846694\":\"1846694\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1765012_9bd6f1916c35837f83bc84e2e3711e47');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2488784\":\"2488784\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1801008_88369cb401ddd6d9f68d9dd2101b6bfb');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"689319\":\"689319\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2213733_83d94a6e01b3aead759bc2872b1af691');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1730083\":\"1730083\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2229290_4b14a185cc80644766e66f8b0cdc966a');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1781865\":\"1781865\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2344997_b58927ddc5c244a8d41aa76b34b89b00');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"621465\":\"621465\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2504357_f42e72e6a06ef06e4ae54795643ecc87');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1424279\":\"1424279\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2521229_2b3d4bd0a539cbe341b323c2952cd6ac');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"6077109\":\"6077109\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el959826_ebb8dfd92d1761bc188064c8166cbf18');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"6394478\":\"6394478\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2007944_a01b5e953c2ce1473fcca395af76a09c');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2457373\":\"2457373\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2405970_16e90b2c3d7949e300d5f04a6d44b7af');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"5649421\":\"5649421\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el689319_981e8077fc6c3d17d972cc1394072f72');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1801008\":\"1801008\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1060913_49ccc31a5c8a08bbc30c72f6f236f466');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1121530\":\"1121530\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1326615_ccb1df6ffe8f147fe17823b67f2c73c6');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"6384470\":\"6384470\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1362205_4ba06867571cbfd87a98ca4f4213f9a1');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"285838\":\"285838\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1424279_37cbd92910dc27afa2756fa776d505b1');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2504357\":\"2504357\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1781865_6a9dc340f1ad878c78bc4aa1946ffc22');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2229290\":\"2229290\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2166057_a0348963a13b071436a8e0b282108dce');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"4434053\":\"4434053\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2617717_af733b33ebf32541c799b30a513a190b');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"550164\":\"550164\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el98953_dea97c2a67130ef9b9919dd220d3174c');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"999923\":\"999923\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el601699_2394df01cd73fda82e4ee8e956e8e47f');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1680169\":\"1680169\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el621465_3b03eae73299c845b9a3ff0bd4c2b075');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"621465\":\"621465\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null},{"function":"function() {\n  var ids = {\"2344997\":\"2344997\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1730083_b4cb9695a2383ebcc8b4a06c915fd914');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2213733\":\"2213733\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1846694_b6afa45a287660464c6522ede8916579');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1524240\":\"1524240\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2116713_db628356325f2fb2c71324dcb85db24f');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"666221\":\"666221\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2488784_2483ff6b79f26ad47ee02972a9463011');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1765012\":\"1765012\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2659859_0a044cdaa562913c1e1fdfaf74114edf');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"528641\":\"528641\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2984722_f49b85adc2805084d9ae45f3824c3c08');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2613273\":\"2613273\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2001588_f77c50ea39caa87e9ecfbfc0acd1474b');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"1568371\":\"1568371\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el4274677_1c9e92ee9a692fd19bd671990dfa428a');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"3737621\":\"3737621\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el528641_1968099085c35463a816199a07bbbe23');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2659859\":\"2659859\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1568371_f9ad936368db8b227640c2d9c9ab5e41');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2001588\":\"2001588\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1680169_9ec75011026675c1b40a83d7fa20c39e');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"601699\":\"601699\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el2613273_3de6c039ed067bd7f4463244e40c083a');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"2984722\":\"2984722\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el3737621_86c2bf7ca0fe17495620e52cfb0d5fa0');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"4274677\":\"4274677\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1322035_ae117dabf3c7e3617aa2d07b6b48bc93');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"6367483\":\"6367483\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"300\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
    
    (function() {
      var element = document.getElementById('el1899505_608aa5daa4219ea17cdecc60c6289122');
      var event = 'click';
      var actions = {"type":"DOM","callbacks":[{"function":"function() {\n  var ids = {\"5528805\":\"5528805\"};\n  var animation = {\"easing\":\"easeNone\",\"easingType\":\"Power1\",\"amplitude\":100,\"springness\":300,\"duration\":\"299\"};\n  var position;\n\n  for (var i in ids) {\n    if (ids.hasOwnProperty(i)) {\n      position = Preview.mElements.get(ids[i]).getPosition(true);\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\n    }\n  }\n}","delay":0,"trigger_value":null}]};

      var f = function(e) {
        var processed = [];

        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {
          return;
        }

        actions.callbacks.forEach(function(callback) {
          var callback_evaluated = eval('('+callback.function+')');

          if (event != 'change' || (e.target.value === callback.trigger_value)) {
            if (callback.delay > 0) {
              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));
            } else {
              processed.push(callback_evaluated(e));
            }
          }
        });

        Interactions.handleEvent(e, processed);
      };

      if (event === 'load') {
        load_events.push(f);
      }
      else if (event === 'scroll') {
        Interactions.scrolls.push(f);
      }
      else if (element) {
        if (actions.type == 'touch') {
          if (!element.mc) {
            element.mc = new Hammer(element, {prevent_default: true});
            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});
            element.mc.get('press').set({time: 200});
          }

          element.mc.on(event, f);
        }
        else {
          element.addEventListener(event, f);
        }
      }
    })();
  
Interactions.attachScrollEvent();
Interactions.onContentLoaded(load_events);
</script>

            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
var uri = new URI(document.URL);
Preview.attachEvents();

window.addEvent('domready', function() {
    var data = {"id_project":"2503002","id_collection":"524829","id_page":"23663224","id_document":null,"version_of":null,"project_hash":"15dec858e079c06a1e2a6f74d84f61bd98bb9b72","active_collaboration":false,"menu_enabled":false,"export_mode":true,"add_comments":false,"page_base_url":null,"pages":[],"comments":null,"is_user_logged_in":false,"versions":"{\"7\":\"23663224\"}","current_version":"7","current_map":[],"versions_html":{"23663224":"    <input type=\"button\" style=\";z-index:10001;border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;border-color:#dddddd;border-style:solid;background-color:#3498db;color:#FFF;font-size:14px;font-weight:bold;font-style:normal;font-family:Arial;text-align:center;box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-o-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);background-size:auto;background-repeat:repeat;background-position:center center;padding-top:6px;padding-right:10px;padding-bottom:6px;padding-left:10px;left:1080px;top:32px;position:absolute;width:120px;height:30px;;\" class=\"ElButton active \" value=\"\u8fd4\u56de\" id=\"el3374034_5662d6cff6ef634305b18a8e201f93c9\" \/>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(3374034, document.getElementById('el3374034_5662d6cff6ef634305b18a8e201f93c9'), {\"id\":3374034,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script><div class=\"ElGroup \" style=\"z-index:10003;left:20px;top:20px;font-family:;border-width:0px;border-style:solid;position:absolute;width:205px;height:54px;\" id=\"el52164_167c3b48827526357c20a33dc1d48c97\" >    <div class=\"ElTextElement \" style=\"left:0px;top:0px;z-index:10002;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:205px;height:54px;\" id=\"el26828_d2d09d443d7e3fb296c07769c6f9e235\" ><p class=\"wysiwyg-font-type-Roboto\" style=\"font-size: 36px;\"><font color=\"#333333\">\u602a\u7269\u5716\u9451<\/font><\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(26828, document.getElementById('el26828_d2d09d443d7e3fb296c07769c6f9e235'), {\"id\":26828,\"interactive\":false,\"in_group\":true,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script><\/div><script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(52164, document.getElementById('el52164_167c3b48827526357c20a33dc1d48c97'), {\"id\":52164,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":null})})();<\/script>    <div class=\"ElTextElement \" style=\"z-index:10005;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;left:25px;top:224px;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el5431360_40dea3dedc5fdb82be4576f66eef04d0\" ><p style=\"font-size: 24px;\">\u53f2\u840a\u59c6<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(5431360, document.getElementById('el5431360_40dea3dedc5fdb82be4576f66eef04d0'), {\"id\":5431360,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:225px;top:224px;z-index:10007;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el2335974_5d3c4bd08cefabf5521ac965a39f1bd0\" ><p style=\"font-size: 24px;\">\u9752\u87d2\uff0e\u53f2\u5948\u514b<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2335974, document.getElementById('el2335974_5d3c4bd08cefabf5521ac965a39f1bd0'), {\"id\":2335974,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el6367483_275f1b880e6860c2939112ab589acc61\" style=\"left:225px;top:74px;z-index:10006;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Snake.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6367483, document.getElementById('el6367483_275f1b880e6860c2939112ab589acc61'), {\"id\":6367483,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el5528805_14c08341b55ac1105240d8346035f9da\" style=\"left:425px;top:74px;z-index:10008;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Assassin.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(5528805, document.getElementById('el5528805_14c08341b55ac1105240d8346035f9da'), {\"id\":5528805,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el5649421_6a6c2ac1b139037f64d6fd1cd2714c0a\" style=\"left:625px;top:74px;z-index:10010;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Icelady.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(5649421, document.getElementById('el5649421_6a6c2ac1b139037f64d6fd1cd2714c0a'), {\"id\":5649421,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:625px;top:224px;z-index:10011;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:63px;\" id=\"el6066611_837a186a3a34e3c774e8c0cf026e471d\" ><p style=\"font-size: 24px;\">\u51b0\u59ec\uff0e\u827e\u7d72\u8335<\/p><p style=\"font-size: 24px;\"><br><\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6066611, document.getElementById('el6066611_837a186a3a34e3c774e8c0cf026e471d'), {\"id\":6066611,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:425px;top:224px;z-index:10009;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el6365930_b53ad34c4f7623e1757a2b041a979459\" ><p style=\"font-size: 24px;\">\u6c34\u4e4b\u8adc\u5f71\uff0e\u6f97<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6365930, document.getElementById('el6365930_b53ad34c4f7623e1757a2b041a979459'), {\"id\":6365930,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:825px;top:224px;z-index:10013;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:63px;\" id=\"el662735_20cf9492ed26febe78fc054e4f15d15d\" ><p style=\"font-size: 24px;\">\u86c7\u59ec\uff0e\u7f8e\u675c\u838e<\/p><p style=\"font-size: 24px;\"><br><\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(662735, document.getElementById('el662735_20cf9492ed26febe78fc054e4f15d15d'), {\"id\":662735,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2457373_b24b24077a57ec007d925bf2fa659186\" style=\"left:825px;top:74px;z-index:10012;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Lamia.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2457373, document.getElementById('el2457373_b24b24077a57ec007d925bf2fa659186'), {\"id\":2457373,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el285838_5f3a9aec53e52d5389cfcbf10b6fe1df\" style=\"left:825px;top:280px;z-index:10022;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Earthspirit.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(285838, document.getElementById('el285838_5f3a9aec53e52d5389cfcbf10b6fe1df'), {\"id\":285838,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el550164_9dc19c113d12b4737212233c82646e12\" style=\"left:625px;top:280px;z-index:10020;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Dragon.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(550164, document.getElementById('el550164_9dc19c113d12b4737212233c82646e12'), {\"id\":550164,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:425px;top:430px;z-index:10019;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el1224899_1a131bbae9ef6d024a6956c18b14b440\" ><p style=\"font-size: 24px;\">\u6bd2\u86db\uff0e\u5e15\u9b6f\u68ee<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1224899, document.getElementById('el1224899_1a131bbae9ef6d024a6956c18b14b440'), {\"id\":1224899,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:25px;top:430px;z-index:10015;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el1437568_c6144f331b6bde215816bff2fda09897\" ><p style=\"font-size: 24px;\">\u98a8\u7cbe\u9748\uff0e\u6eab\u5fb7<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1437568, document.getElementById('el1437568_c6144f331b6bde215816bff2fda09897'), {\"id\":1437568,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:825px;top:430px;z-index:10023;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el2488504_9053110558021b5ff6559a97c8805f7c\" ><p style=\"font-size: 24px;\">\u6728\u795e\u4e45\u4e45\u80fd\u667a<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2488504, document.getElementById('el2488504_9053110558021b5ff6559a97c8805f7c'), {\"id\":2488504,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el4434053_5223e15fb9bcd7f5d9a840073e73a33c\" style=\"left:225px;top:280px;z-index:10016;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Plant.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(4434053, document.getElementById('el4434053_5223e15fb9bcd7f5d9a840073e73a33c'), {\"id\":4434053,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:225px;top:430px;z-index:10017;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el4489793_af9ce060803f695f6a34f7ad5dde549f\" ><p style=\"font-size: 24px;\">\u5de8\u82b1\uff0e\u5f17\u52de\u723e<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(4489793, document.getElementById('el4489793_af9ce060803f695f6a34f7ad5dde549f'), {\"id\":4489793,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:625px;top:430px;z-index:10021;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el4679398_0b709ee9dc30b3efdb864d75de9744ab\" ><p style=\"font-size: 24px;\">\u9f8d\uff0e\u5c3c\u5fb7\u970d\u683c<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(4679398, document.getElementById('el4679398_0b709ee9dc30b3efdb864d75de9744ab'), {\"id\":4679398,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el6384470_aec01095bf855d8d2c767fe50493c5c3\" style=\"left:425px;top:280px;z-index:10018;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Spider.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6384470, document.getElementById('el6384470_aec01095bf855d8d2c767fe50493c5c3'), {\"id\":6384470,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el6394478_0f67e8447d239efd0d588286b8f21e1c\" style=\"left:25px;top:280px;z-index:10014;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Windspirit.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6394478, document.getElementById('el6394478_0f67e8447d239efd0d588286b8f21e1c'), {\"id\":6394478,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script><div class=\"line \" id=\"el2014291_5438b53f5eb105a8b40723942a71cb5c\" style=\"line-orientation:horizontal;z-index:10024;color:#8a8a8a;stroke:1;type:solid;left:25px;top:265px;font-family:;border-width:0px;border-style:solid;position:absolute;width:990px;height:10px;\">\n <svg version=\"1.2\" width=\"100%\" height=\"100%\">\n  <line x1=\"0\" y1=\"5.5\" x2=\"990\" y2=\"5.5\" stroke=\"#8a8a8a\" stroke-width=\"1\" stroke-dasharray=\"\" stroke-linecap=\"square\" \/>\n <\/svg>\n<\/div><script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2014291, document.getElementById('el2014291_5438b53f5eb105a8b40723942a71cb5c'), {\"id\":2014291,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el6077109_c35fa85e451fb58b63bd3944395cf134\" style=\"left:25px;top:74px;z-index:10004;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Slime.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6077109, document.getElementById('el6077109_c35fa85e451fb58b63bd3944395cf134'), {\"id\":6077109,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:625px;top:619px;z-index:10032;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el30143_0ddcac6ce0a97dd9d9e60f4729dd0993\" ><p style=\"font-size: 24px;\">\u7121\u7aef\u6b63\u963f\u4fee\u7f85<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(30143, document.getElementById('el30143_0ddcac6ce0a97dd9d9e60f4729dd0993'), {\"id\":30143,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:825px;top:619px;z-index:10034;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el205592_937ae61fe6385e98e0cbd45576547209\" ><p style=\"font-size: 24px;\">\u708e\u5e1d\uff0e\u795e\u8fb2<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(205592, document.getElementById('el205592_937ae61fe6385e98e0cbd45576547209'), {\"id\":205592,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script><div class=\"line \" id=\"el354327_2316c40d1cf2388ba133ad1168470d52\" style=\"line-orientation:horizontal;left:25px;top:660px;z-index:10045;color:#8a8a8a;stroke:1;type:solid;font-family:;border-width:0px;border-style:solid;position:absolute;width:990px;height:10px;\">\n <svg version=\"1.2\" width=\"100%\" height=\"100%\">\n  <line x1=\"0\" y1=\"5.5\" x2=\"990\" y2=\"5.5\" stroke=\"#8a8a8a\" stroke-width=\"1\" stroke-dasharray=\"\" stroke-linecap=\"square\" \/>\n <\/svg>\n<\/div><script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(354327, document.getElementById('el354327_2316c40d1cf2388ba133ad1168470d52'), {\"id\":354327,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:225px;top:619px;z-index:10028;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el569262_4ddbd1bc67d2941f0b4ee4c116255d3b\" ><p style=\"font-size: 24px;\">\u7570\u57df\u6cd5\u773c\uff0e\u7a7a<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(569262, document.getElementById('el569262_4ddbd1bc67d2941f0b4ee4c116255d3b'), {\"id\":569262,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el666221_a64fd1b9d17651ea1029b8d663e1a389\" style=\"left:825px;top:675px;z-index:10043;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_______.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(666221, document.getElementById('el666221_a64fd1b9d17651ea1029b8d663e1a389'), {\"id\":666221,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:25px;top:619px;z-index:10026;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el920455_c71b63cc6c547a0c2a2a46453167a7a9\" ><p style=\"font-size: 24px;\">\u96de\u86c7\u7378\u963f\u5947\u65af<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(920455, document.getElementById('el920455_c71b63cc6c547a0c2a2a46453167a7a9'), {\"id\":920455,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el999923_16c4c6b5c7e9e5e8c310425ad1270869\" style=\"left:625px;top:675px;z-index:10041;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:149px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Darklord.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(999923, document.getElementById('el999923_16c4c6b5c7e9e5e8c310425ad1270869'), {\"id\":999923,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:425px;top:619px;z-index:10030;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el1097631_ff1b51922257aae65a73cdfa2a165941\" ><p style=\"font-size: 24px;\">\u5947\u7f8e\u62c9\u862d\u65af\u7279<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1097631, document.getElementById('el1097631_ff1b51922257aae65a73cdfa2a165941'), {\"id\":1097631,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1121530_9d43a3eef0bbcdc20b359d8c97f7801f\" style=\"left:425px;top:469px;z-index:10029;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Chimera.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1121530, document.getElementById('el1121530_9d43a3eef0bbcdc20b359d8c97f7801f'), {\"id\":1121530,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:25px;top:825px;z-index:10036;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el1188890_68f49f7febfd026824742fbb6b97946b\" ><p style=\"font-size: 24px;\">\u6d77\u9a0e\u58eb\uff0e\u7d0d\u8332<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1188890, document.getElementById('el1188890_68f49f7febfd026824742fbb6b97946b'), {\"id\":1188890,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1524240_8004f26c2c3085bb1f8766ec51952e71\" style=\"left:25px;top:675px;z-index:10035;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Hero_f.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1524240, document.getElementById('el1524240_8004f26c2c3085bb1f8766ec51952e71'), {\"id\":1524240,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1765012_bcd13f1083bafd49fffbeeed6ee096fb\" style=\"left:425px;top:675px;z-index:10039;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Warrior_f.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1765012, document.getElementById('el1765012_bcd13f1083bafd49fffbeeed6ee096fb'), {\"id\":1765012,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1801008_551bce5b0f3f59ecf25fa04490f7152c\" style=\"left:25px;top:469px;z-index:10025;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Cockatrice.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1801008, document.getElementById('el1801008_551bce5b0f3f59ecf25fa04490f7152c'), {\"id\":1801008,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:825px;top:825px;z-index:10044;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el2045036_8629d15e8b47486b5e2ac77a27019441\" ><p style=\"font-size: 24px;\">\u7121\u8cf4\u66b4\u6c11\uff0e\u525b<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2045036, document.getElementById('el2045036_8629d15e8b47486b5e2ac77a27019441'), {\"id\":2045036,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:625px;top:825px;z-index:10042;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el2190800_f52f4989466641f433bd3eb5e4cea43a\" ><p style=\"font-size: 24px;\">\u8a13\u9f8d\u5e1d\uff0e\u6cf0\u5766<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2190800, document.getElementById('el2190800_f52f4989466641f433bd3eb5e4cea43a'), {\"id\":2190800,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2213733_954a4c2915422bf55c3e2406d30a5a02\" style=\"left:225px;top:675px;z-index:10037;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Thief_m.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2213733, document.getElementById('el2213733_954a4c2915422bf55c3e2406d30a5a02'), {\"id\":2213733,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2229290_f05aadaa0c42500f552b04c7dd9cbbce\" style=\"left:625px;top:469px;z-index:10031;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Asura.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2229290, document.getElementById('el2229290_f05aadaa0c42500f552b04c7dd9cbbce'), {\"id\":2229290,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:225px;top:825px;z-index:10038;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el2327355_e578333cb5037db7a61757a850f21828\" ><p style=\"font-size: 24px;\">\u98a8\u5fcd\u8005\uff0e\u5091\u62c9<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2327355, document.getElementById('el2327355_e578333cb5037db7a61757a850f21828'), {\"id\":2327355,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2344997_618607c5a7d96b2ea4157256f3860a09\" style=\"left:825px;top:469px;z-index:10033;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Ifrit.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2344997, document.getElementById('el2344997_618607c5a7d96b2ea4157256f3860a09'), {\"id\":2344997,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:425px;top:825px;z-index:10040;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el2440712_a335cb159388523a153a3694209e4c8d\" ><p style=\"font-size: 24px;\">\u708e\u76fe\u5175\uff0e\u827e\u62c9<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2440712, document.getElementById('el2440712_a335cb159388523a153a3694209e4c8d'), {\"id\":2440712,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2504357_5c11a0da02909856d90dc08d7277c617\" style=\"left:225px;top:469px;z-index:10027;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Gayzer.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2504357, document.getElementById('el2504357_5c11a0da02909856d90dc08d7277c617'), {\"id\":2504357,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:180px;top:1103px;z-index:10046;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;\" id=\"el1098689_615f79c96db92de184c0aebd9f2f0fee\" ><div>\u53f2\u840a\u59c6<\/div><div>\u653b\u64ca\u529b:\uff11\uff10<\/div><div>\u9632\u79a6\u529b:\uff11\uff10<\/div><div>\u8840\u91cf:\uff11\uff10<\/div><div>\u7279\u6280:\uff38<\/div><div>\u9ecf\u6ed1\u6ed1\u9ecf\u6ed1\u6ed1\u547c\u547c\uff5e<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1098689, document.getElementById('el1098689_615f79c96db92de184c0aebd9f2f0fee'), {\"id\":1098689,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:650px;top:1103px;z-index:10048;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;\" id=\"el2438730_3b48bf51d801ad47073b5d273ee6e265\" >\u9752\u87d2\uff0e\u53f2\u5948\u514b<div>\u653b\u64ca\u529b:\uff12\uff10<\/div><div>\u9632\u79a6\u529b:\uff15<\/div><div>\u8840\u91cf:\uff12\uff10<\/div><div>\u7279\u6280:\u6bd2\u54ac<\/div><div>\u5225\u770b\u6211\u9019\u6a23\uff0c\u6211\u6703\u6bd2\u6b7b\u4f60\u7684<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2438730, document.getElementById('el2438730_3b48bf51d801ad47073b5d273ee6e265'), {\"id\":2438730,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2521229_5f53d210ca5c348366c41b2c09abf732\" style=\"left:25px;top:1070px;z-index:10047;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Slime_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2521229, document.getElementById('el2521229_5f53d210ca5c348366c41b2c09abf732'), {\"id\":2521229,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:650px;top:1443px;z-index:10054;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;\" id=\"el73792_facf47dca31882835836475d06e7c223\" ><div>\u98a8\u7cbe\u9748\uff0e\u6eab\u5fb7<\/div><div>\u653b\u64ca\u529b:\uff12\uff10<\/div><div>\u9632\u79a6\u529b:\uff12\uff10<\/div><div>\u8840\u91cf:\uff13\uff10<\/div><div>\u7279\u6280:\u98a8\u541f<\/div><div>\u4f86\u7121\u5f71\u53bb\u7121\u8e64\uff0c\u4f86\u53bb\u4e00\u9663\u98a8<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(73792, document.getElementById('el73792_facf47dca31882835836475d06e7c223'), {\"id\":73792,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:650px;top:1268px;z-index:10050;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;\" id=\"el95787_3c4de15a6afccf2af590482e4284c399\" >\u51b0\u59ec\uff0e\u827e\u7d72\u8335<div>\u653b\u64ca\u529b:\uff13\uff15<\/div><div>\u9632\u79a6\u529b:\uff11\uff10<\/div><div>\u8840\u91cf:\uff15\uff10<\/div><div>\u7279\u6280:\u5bd2\u5730<\/div><div>\u5bd2\u51b7\u7684\u5fc3\u5c07\u6975\u51cd\u4f60<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(95787, document.getElementById('el95787_3c4de15a6afccf2af590482e4284c399'), {\"id\":95787,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:180px;top:1443px;z-index:10052;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;\" id=\"el469343_db21931d6d529ceda668f249ac374541\" >\u86c7\u59ec\uff0e\u7f8e\u675c\u838e<div>\u653b\u64ca\u529b:\uff14\uff10<\/div><div>\u9632\u79a6\u529b:\uff12\uff10<\/div><div>\u8840\u91cf:\uff12\uff10\uff10<\/div><div>\u7279\u6280:\u77f3\u5316<\/div><div>\u52f8\u4f60\u5225\u6ce8\u8996\u8457\u96d9\u773c\uff0c\u5426\u5247...<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(469343, document.getElementById('el469343_db21931d6d529ceda668f249ac374541'), {\"id\":469343,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el959826_1c6362488d87a78b51929803815859db\" style=\"left:495px;top:1410px;z-index:10055;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Windspirit.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(959826, document.getElementById('el959826_1c6362488d87a78b51929803815859db'), {\"id\":959826,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:180px;top:1268px;z-index:10049;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;\" id=\"el1319873_965ab052d108724aaa17884e261b6703\" >\u6c34\u4e4b\u8adc\u5f71\uff0e\u6f97<div>\u653b\u64ca\u529b:\uff11\uff15<\/div><div>\u9632\u79a6\u529b:\uff13\uff10<\/div><div>\u8840\u91cf:\uff13\uff10<\/div><div>\u7279\u6280:\u6c34\u7652<\/div><div>\u6f5b\u8eab\u5728\u5f71\u5b50\u7684\u89d2\u843d<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1319873, document.getElementById('el1319873_965ab052d108724aaa17884e261b6703'), {\"id\":1319873,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2007944_4266c412abefa0d0696ac507fb1b66b6\" style=\"left:25px;top:1410px;z-index:10053;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Lamia.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2007944, document.getElementById('el2007944_4266c412abefa0d0696ac507fb1b66b6'), {\"id\":2007944,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2405970_a464ee062e394c0e089e1d57b056f650\" style=\"left:495px;top:1235px;z-index:10051;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Icelady.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2405970, document.getElementById('el2405970_a464ee062e394c0e089e1d57b056f650'), {\"id\":2405970,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:185px;top:1796px;z-index:10060;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;\" id=\"el23346_95804c4e88a0a1cd3d7a8a2edecf99c7\" >\u9f8d\uff0e\u5c3c\u5fb7\u970d\u683c<div>\u653b\u64ca\u529b:\uff15\uff10<\/div><div>\u9632\u79a6\u529b:\uff13\uff10<\/div><div>\u8840\u91cf:\uff11\uff10\uff10<\/div><div>\u7279\u6280:\u5486\u562f<\/div><div>\u543e\u96d6\u610f\u8b58\u5df2\u6b7b\uff0c\u7136\u800c\u8eab\u7336\u5728<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(23346, document.getElementById('el23346_95804c4e88a0a1cd3d7a8a2edecf99c7'), {\"id\":23346,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el689319_7973b74fcbe3a92458fb4745f1eafaf1\" style=\"left:30px;top:1928px;z-index:10065;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Cockatrice_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(689319, document.getElementById('el689319_7973b74fcbe3a92458fb4745f1eafaf1'), {\"id\":689319,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1060913_cb6f9b97342b9a1eb0b7f789436e92bc\" style=\"left:30px;top:2103px;z-index:10069;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Chimera.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1060913, document.getElementById('el1060913_cb6f9b97342b9a1eb0b7f789436e92bc'), {\"id\":1060913,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:185px;top:1621px;z-index:10056;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;\" id=\"el1093445_e0bd709317439ad8bc7d74b746cfc960\" >\u5de8\u82b1\uff0e\u5f17\u52de\u723e<div>\u653b\u64ca\u529b:\uff13\uff10<\/div><div>\u9632\u79a6\u529b:\uff12\uff10<\/div><div>\u8840\u91cf:\uff15\uff10<\/div><div>\u7279\u6280:\u6500\u9644<\/div><div>\u54ac\u6bba\u4e00\u5207\uff01<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1093445, document.getElementById('el1093445_e0bd709317439ad8bc7d74b746cfc960'), {\"id\":1093445,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:655px;top:1621px;z-index:10058;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;\" id=\"el1158197_8b7dd615d324bea82771a0ff58002570\" >\u6bd2\u86db\uff0e\u5e15\u9b6f\u68ee<div>\u653b\u64ca\u529b:\uff12\uff15<\/div><div>\u9632\u79a6\u529b:\uff15\uff10<\/div><div>\u8840\u91cf:\uff15\uff10<\/div><div>\u7279\u6280:\u5410\u7d72<\/div><div>\u5c07\u4f60\u7d91\u6210\u6728\u4e43\u4f0a\u563f\u563f<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1158197, document.getElementById('el1158197_8b7dd615d324bea82771a0ff58002570'), {\"id\":1158197,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:185px;top:2136px;z-index:10068;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:117px;\" id=\"el1200683_d426d6947882978a2363d3ebcb7309a6\" >\u5947\u7f8e\u62c9\uff0e\u862d\u65af\u7279<div>\u653b\u64ca\u529b:\uff11\uff10\uff10<\/div><div>\u9632\u79a6\u529b:\uff13\uff10<\/div><div>\u8840\u91cf:\uff18\uff10<\/div><div>\u7279\u6280:\u864e\u562f<\/div><div>\u662f\u8ab0\u5141\u8a31\u4f60\u4f86\u5230\u6211\u7684\u9818\u5730\u7684<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1200683, document.getElementById('el1200683_d426d6947882978a2363d3ebcb7309a6'), {\"id\":1200683,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1326615_9e62edbedabc05f7464a09e479278ea9\" style=\"left:500px;top:1588px;z-index:10059;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Spider_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1326615, document.getElementById('el1326615_9e62edbedabc05f7464a09e479278ea9'), {\"id\":1326615,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1362205_28fbf324929732440359de12867273fb\" style=\"left:500px;top:1763px;z-index:10063;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Earthspirit_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1362205, document.getElementById('el1362205_28fbf324929732440359de12867273fb'), {\"id\":1362205,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1424279_e010b6e3f2779b35741e8a72493ffc69\" style=\"left:500px;top:1928px;z-index:10067;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Gayzer_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1424279, document.getElementById('el1424279_e010b6e3f2779b35741e8a72493ffc69'), {\"id\":1424279,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:655px;top:1796px;z-index:10062;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:118px;\" id=\"el1682593_fec7030a94d6bcaec13b23b99a725ac4\" >\u6728\u795e\uff0e\u4e45\u4e45\u80fd\u667a<div>\u653b\u64ca\u529b:\uff14\uff10<\/div><div>\u9632\u79a6\u529b:\uff18\uff10<\/div><div>\u8840\u91cf:\uff14\uff10\uff10<\/div><div>\u7279\u6280:\u8056\u6b4c<\/div><div>\u4f60\uff0c\u807d\u5f97\u898b\u68ee\u6797\u5c0d\u4eba\u985e\u7684\u61a4\u6012\u561b<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1682593, document.getElementById('el1682593_fec7030a94d6bcaec13b23b99a725ac4'), {\"id\":1682593,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1781865_1fd780d1c2c5e6399e212a189f5c459e\" style=\"left:500px;top:2103px;z-index:10071;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Asura_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1781865, document.getElementById('el1781865_1fd780d1c2c5e6399e212a189f5c459e'), {\"id\":1781865,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:185px;top:1961px;z-index:10064;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:117px;\" id=\"el1821596_68ee3d15fbfa7794b2b6db2d99574314\" >\u96de\u86c7\u7378\uff0e\u963f\u5947\u65af<div>\u653b\u64ca\u529b:\uff16\uff10<\/div><div>\u9632\u79a6\u529b:\uff15\uff10<\/div><div>\u8840\u91cf:\uff15\uff10<\/div><div>\u7279\u6280:\u54ac\u6bba<\/div><div>\u5495\u7d72\uff5e\u4f60\u5728\u7b11\u4ec0\u9ebc\uff1f<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1821596, document.getElementById('el1821596_68ee3d15fbfa7794b2b6db2d99574314'), {\"id\":1821596,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2166057_f9461241af11419599c8c89b0147cee7\" style=\"left:30px;top:1588px;z-index:10057;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Plant.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2166057, document.getElementById('el2166057_f9461241af11419599c8c89b0147cee7'), {\"id\":2166057,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:655px;top:2136px;z-index:10070;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;\" id=\"el2320214_c80cfade9b30d2579a6c84d9d9534cec\" ><div>\u7121\u7aef\u6b63\uff0e\u963f\u4fee\u7f85<\/div><div>\u653b\u64ca\u529b:\uff19\uff10<\/div><div>\u9632\u79a6\u529b:\uff18\uff10<\/div><div>\u8840\u91cf:\uff12\uff10\uff10<\/div><div>\u7279\u6280:\u8f2a\u8ff4<\/div><div>\u5165\u516d\u9053\u8f2a\u8ff4\uff0c\u5fd8\u537b\u6ec5\u4e16\u4e09\u5343\u7169\u60f1<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2320214, document.getElementById('el2320214_c80cfade9b30d2579a6c84d9d9534cec'), {\"id\":2320214,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2617717_980c781041bdb01276d2dc6a96b50479\" style=\"left:30px;top:1763px;z-index:10061;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Dragon_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2617717, document.getElementById('el2617717_980c781041bdb01276d2dc6a96b50479'), {\"id\":2617717,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:655px;top:1961px;z-index:10066;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:118px;\" id=\"el2741754_f86067cce44e0d39f5e245b22a0c66c7\" >\u7570\u57df\u6cd5\u773c\uff0e\u7a7a<div>\u653b\u64ca\u529b:\uff12\uff10<\/div><div>\u9632\u79a6\u529b:\uff11\uff10\uff10<\/div><div>\u8840\u91cf:\uff15\uff10<\/div><div>\u7279\u6280:\u770b\u900f<\/div><div>\u4e00\u5207\uff0c\u6211\u90fd\u770b\u5728\u773c\u5e95<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2741754, document.getElementById('el2741754_f86067cce44e0d39f5e245b22a0c66c7'), {\"id\":2741754,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:180px;top:2828px;z-index:10084;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:136px;\" id=\"el43398_ad0d78558247e8977ffdc5a185b37dbf\" >\u5929\u9748\uff0e\u5e1d\u65af\u5bc7<div>\u653b\u64ca\u529b:\uff12\uff10\uff10<\/div><div>\u9632\u79a6\u529b:\uff15\uff10<\/div><div>\u8840\u91cf:\uff15\uff10\uff10<\/div><div>\u7279\u6280:\u8b9a\u6b4c<\/div><div>\u5929\u8cdc\u842c\u7269\u5e78\u798f\u7684\u9418\u8072\uff0c\u7136\u800c\u4eba\u985e\u5c31\u662f\u807d\u4e0d\u5230<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(43398, document.getElementById('el43398_ad0d78558247e8977ffdc5a185b37dbf'), {\"id\":43398,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el98953_5675bcc1e7e4036bb9d8430123a93fcf\" style=\"left:25px;top:2620px;z-index:10081;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Darklord_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(98953, document.getElementById('el98953_5675bcc1e7e4036bb9d8430123a93fcf'), {\"id\":98953,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:180px;top:2313px;z-index:10072;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:117px;\" id=\"el343516_eea9a8ac83c83c71b4e05f0963721453\" >\u708e\u5e1d\uff0e\u795e\u8fb2<div>\u653b\u64ca\u529b:\uff11\uff15\uff10<\/div><div>\u9632\u79a6\u529b:\uff11\uff10\uff10<\/div><div>\u8840\u91cf:\uff11\uff10\uff10<\/div><div>\u7279\u6280:\u767e\u8349<\/div><div>\u5c31\u662f\u4f60\uff0c\u6bd2\u5bb3\u4e16\u9593\u7684\u96dc\u8349<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(343516, document.getElementById('el343516_eea9a8ac83c83c71b4e05f0963721453'), {\"id\":343516,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:180px;top:3160px;z-index:10088;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:116px;\" id=\"el568577_fd0055938ffa590cabbe96ec7caf429d\" >\u7d42\u66f2\uff0e\uff39\uff30<div>\u653b\u64ca\u529b:\uff13\uff10\uff10<\/div><div>\u9632\u79a6\u529b:\uff13\uff10\uff10<\/div><div>\u8840\u91cf:\uff11\uff10\uff10\uff10\uff10<\/div><div>\u7279\u6280:\u6b0a\u5a01<\/div><div>\u4f60\u518d\u4e00\u6b21\u5c31\u628a\u4f60\u7576\u6389<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(568577, document.getElementById('el568577_fd0055938ffa590cabbe96ec7caf429d'), {\"id\":568577,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el601699_be53dcf81f561ed483e2e7a85e279491\" style=\"left:25px;top:2795px;z-index:10085;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_God_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(601699, document.getElementById('el601699_be53dcf81f561ed483e2e7a85e279491'), {\"id\":601699,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el621465_ff57c1c37e0f32155e654e9f05dc73de\" style=\"left:25px;top:2280px;z-index:10073;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Ifrit_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(621465, document.getElementById('el621465_ff57c1c37e0f32155e654e9f05dc73de'), {\"id\":621465,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:650px;top:2313px;z-index:10074;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:118px;\" id=\"el628780_855988271030c385c5511e688d5903ac\" >\u6d77\u9a0e\u58eb\uff0e\u7d0d\u8332<div>\u653b\u64ca\u529b:\uff11\uff12\uff10<\/div><div>\u9632\u79a6\u529b:\uff15\uff10<\/div><div>\u8840\u91cf:\uff12\uff10\uff10<\/div><div>\u7279\u6280:\u7a81\u523a<\/div><div>\u6211\u7684\u4e00\u751f\uff0c\u70ba\u5149\u69ae\u85a9\u99ac\u65af<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(628780, document.getElementById('el628780_855988271030c385c5511e688d5903ac'), {\"id\":628780,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:180px;top:2488px;z-index:10076;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:118px;\" id=\"el1252944_7f9cf0c47a3feea940d519a8d2151e6f\" >\u98a8\u5fcd\u8005\uff0e\u5091\u62c9<div>\u653b\u64ca\u529b:\uff18\uff10<\/div><div>\u9632\u79a6\u529b:\uff15\uff10<\/div><div>\u8840\u91cf:\uff12\uff15\uff10<\/div><div>\u7279\u6280:\u56de\u97f3<\/div><div>\u6211\u53ea\u662f\u5c65\u884c\u4e0a\u4f4d\u8005\u7684\u547d\u4ee4<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1252944, document.getElementById('el1252944_7f9cf0c47a3feea940d519a8d2151e6f'), {\"id\":1252944,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:650px;top:3163px;z-index:10090;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:115px;\" id=\"el1286975_3961006f89419b9f4b6605b00f5c28be\" ><div>\u5bf6\u7bb1\u602a<\/div><div>\u653b\u64ca\u529b:0<\/div><div>\u9632\u79a6\u529b:0<\/div><div>\u8840\u91cf:1<\/div><div>\u7279\u6280:\u5343\u91d1\u96e3\u8cb7\u5bf6\u7bb1\u602a<\/div><div><br><\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1286975, document.getElementById('el1286975_3961006f89419b9f4b6605b00f5c28be'), {\"id\":1286975,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:180px;top:2653px;z-index:10080;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:118px;\" id=\"el1331528_0c93b97658857c0e1eca3454cfca4a19\" >\u8a13\u9f8d\u5e1d\u738b\uff0e\u6cf0\u5766<div>\u653b\u64ca\u529b:\uff12\uff10\uff10<\/div><div>\u9632\u79a6\u529b:\uff15\uff10<\/div><div>\u8840\u91cf:\uff15\uff10\uff10<\/div><div>\u7279\u6280:\u9006\u5203<\/div><div>\u89ac\u89a6\u85a9\u99ac\u65af\u57ce\u7684\u842c\u7269\uff0c\u7686\u9808\u6d88\u6ec5<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1331528, document.getElementById('el1331528_0c93b97658857c0e1eca3454cfca4a19'), {\"id\":1331528,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1730083_03cc71be0a9c6323764185295957a899\" style=\"left:25px;top:2455px;z-index:10077;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Thief_m_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1730083, document.getElementById('el1730083_03cc71be0a9c6323764185295957a899'), {\"id\":1730083,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1846694_b76c07612327481162ef7663bb003cb8\" style=\"left:495px;top:2280px;z-index:10075;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Hero_f_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1846694, document.getElementById('el1846694_b76c07612327481162ef7663bb003cb8'), {\"id\":1846694,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1901250_cd1f38eb77bbaa4278e056aee5ff118d\" style=\"left:495px;top:3160px;z-index:10091;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_0.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1901250, document.getElementById('el1901250_cd1f38eb77bbaa4278e056aee5ff118d'), {\"id\":1901250,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2116713_12e1f2468c5d76e7a44f3b4f21105769\" style=\"left:495px;top:2620px;z-index:10083;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807________1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2116713, document.getElementById('el2116713_12e1f2468c5d76e7a44f3b4f21105769'), {\"id\":2116713,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2488784_ca49239fda50f12cb43dc34bd0f9c4ec\" style=\"left:495px;top:2455px;z-index:10079;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Warrior_f_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2488784, document.getElementById('el2488784_ca49239fda50f12cb43dc34bd0f9c4ec'), {\"id\":2488784,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:650px;top:2653px;z-index:10082;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:119px;\" id=\"el2592019_5334941fde20bc401ccd554434352723\" >\u7121\u8cf4\u66b4\u6c11\uff0e\u525b<div>\u653b\u64ca\u529b:\uff15<\/div><div>\u9632\u79a6\u529b:\uff11\uff15\uff10<\/div><div>\u8840\u91cf:\uff15\uff10\uff10<\/div><div>\u7279\u6280:\u5634\u7832<\/div><div>\u53bb\u8a13\u4f60\u7684\u9f8d\u5566\uff0c\u9285\u724c\u5566\u5ae9\u3002<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2592019, document.getElementById('el2592019_5334941fde20bc401ccd554434352723'), {\"id\":2592019,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:650px;top:2488px;z-index:10078;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:117px;\" id=\"el2632899_db836b32bea640e9667af66923a58a75\" >\u708e\u76fe\u5175\uff0e\u827e\u62c9<div>\u653b\u64ca\u529b:\uff11\uff10\uff10<\/div><div>\u9632\u79a6\u529b:\uff11\uff10\uff10<\/div><div>\u8840\u91cf:\uff14\uff10\uff10<\/div><div>\u7279\u6280:\u76fe\u64ca<\/div><div>\u6211\u7684\u76fe\uff0c\u70ba\u85a9\u99ac\u65af\u800c\u8209<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2632899, document.getElementById('el2632899_db836b32bea640e9667af66923a58a75'), {\"id\":2632899,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2659859_ae2b7fc8023a8b0d79c978710c8d0a90\" style=\"left:25px;top:3145px;z-index:10089;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807___________1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2659859, document.getElementById('el2659859_ae2b7fc8023a8b0d79c978710c8d0a90'), {\"id\":2659859,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:650px;top:2828px;z-index:10086;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:117px;\" id=\"el2800369_0e0f00aae78053870ec2572a38284447\" ><div>\u5438\u8840\u9b3c\uff0e\u6d3e\u723e<\/div><div>\u653b\u64ca\u529b:\uff11\uff18\uff10<\/div><div>\u9632\u79a6\u529b:\uff12\uff10\uff10<\/div><div>\u8840\u91cf:\uff14\uff10\uff10<\/div><div>\u7279\u6280:\u8caa\u98df<\/div><div>\u6211\u8981\u5438\u4e7e\u4f60\u7684\u6bcf\u4e00\u6ef4\u7cbe\u8403\u563b\u54c8\u54c8\u54c8<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2800369, document.getElementById('el2800369_0e0f00aae78053870ec2572a38284447'), {\"id\":2800369,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2984722_c5f7a074e20e14f45fcb1554ef3a94cb\" style=\"left:495px;top:2795px;z-index:10087;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Vampire_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2984722, document.getElementById('el2984722_c5f7a074e20e14f45fcb1554ef3a94cb'), {\"id\":2984722,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:650px;top:2998px;z-index:10094;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:118px;\" id=\"el115788_4cf14b424367c17050ecde680d9bfcb6\" >\u4e0d\u6b7b\u9ce5\uff0e\u9cf3\u51f0<div>\u653b\u64ca\u529b:\uff15\uff10\uff10<\/div><div>\u9632\u79a6\u529b:\uff11\uff10\uff10<\/div><div>\u8840\u91cf:\uff13\uff10\uff10\uff10<\/div><div>\u7279\u6280:\u8056\u5149<\/div><div>\u6b7b\u4ea1\u7684\u76e1\u982d\uff0c\u59be\u8eab\u672a\u66fe\u898b\u904e<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(115788, document.getElementById('el115788_4cf14b424367c17050ecde680d9bfcb6'), {\"id\":115788,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:180px;top:2998px;z-index:10092;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:118px;\" id=\"el870650_abf415d3eaf7a076f17a64ae3969959f\" >\u5c71\u9748\uff0e\u7d0d\u5854\u723e<div>\u653b\u64ca\u529b:\uff13\uff10\uff10<\/div><div>\u9632\u79a6\u529b:\uff12\uff10\uff10<\/div><div>\u8840\u91cf:\uff11\uff10\uff10\uff10<\/div><div>\u7279\u6280:\u885d\u649e<\/div><div>\u611a\u6c11\uff0c\u4f60\u9084\u662f\u57f7\u8ff7\u4e0d\u609f\u5f97\u524d\u9032\u55ce\uff1f<\/div><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(870650, document.getElementById('el870650_abf415d3eaf7a076f17a64ae3969959f'), {\"id\":870650,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2001588_e7d8e773c1e9d2b725a91c46f7d6e3cd\" style=\"left:25px;top:2965px;z-index:10093;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Behemoth_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2001588, document.getElementById('el2001588_e7d8e773c1e9d2b725a91c46f7d6e3cd'), {\"id\":2001588,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el4274677_302c14537f3611ce03730e6ab2a3e2c1\" style=\"left:495px;top:2965px;z-index:10095;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Garuda_1.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(4274677, document.getElementById('el4274677_302c14537f3611ce03730e6ab2a3e2c1'), {\"id\":4274677,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:230px;top:1030px;z-index:10099;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el111818_4504c53dcb201624750885b0f6fdace8\" ><p style=\"font-size: 24px;\">\u5438\u8840\u9b3c\uff0e\u6d3e\u723e<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(111818, document.getElementById('el111818_4504c53dcb201624750885b0f6fdace8'), {\"id\":111818,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el528641_9588c48698fc16ddd650588fb0eccbfa\" style=\"left:830px;top:880px;z-index:10104;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807__________.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(528641, document.getElementById('el528641_9588c48698fc16ddd650588fb0eccbfa'), {\"id\":528641,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:30px;top:1030px;z-index:10097;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el1133402_23aa691095bcdcd6de6e32bc172635ec\" ><p style=\"font-size: 24px;\">\u5929\u9748\uff0e\u5e1d\u65af\u5bc7<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1133402, document.getElementById('el1133402_23aa691095bcdcd6de6e32bc172635ec'), {\"id\":1133402,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1568371_90566b944f3c30de53fcc29e4f4a8082\" style=\"left:430px;top:880px;z-index:10100;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Behemoth.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1568371, document.getElementById('el1568371_90566b944f3c30de53fcc29e4f4a8082'), {\"id\":1568371,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1680169_68da09d3e44273fcef7b771e602c9e28\" style=\"left:30px;top:880px;z-index:10096;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_God.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1680169, document.getElementById('el1680169_68da09d3e44273fcef7b771e602c9e28'), {\"id\":1680169,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script><div class=\"line \" id=\"el2106872_9444aa49c5e06c4478a7bfc7be69aef3\" style=\"line-orientation:horizontal;left:30px;top:865px;z-index:10106;color:#8a8a8a;stroke:1;type:solid;font-family:;border-width:0px;border-style:solid;position:absolute;width:990px;height:10px;\">\n <svg version=\"1.2\" width=\"100%\" height=\"100%\">\n  <line x1=\"0\" y1=\"5.5\" x2=\"990\" y2=\"5.5\" stroke=\"#8a8a8a\" stroke-width=\"1\" stroke-dasharray=\"\" stroke-linecap=\"square\" \/>\n <\/svg>\n<\/div><script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2106872, document.getElementById('el2106872_9444aa49c5e06c4478a7bfc7be69aef3'), {\"id\":2106872,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el2613273_b52be0effca4e05769a29213def71e5e\" style=\"left:230px;top:880px;z-index:10098;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Vampire.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2613273, document.getElementById('el2613273_b52be0effca4e05769a29213def71e5e'), {\"id\":2613273,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:430px;top:1030px;z-index:10101;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el3198648_be13c8da7e52c02f896dd4c3f254c2b8\" ><p style=\"font-size: 24px;\">\u5c71\u9748\uff0e\u7d0d\u5854\u723e<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(3198648, document.getElementById('el3198648_be13c8da7e52c02f896dd4c3f254c2b8'), {\"id\":3198648,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el3737621_c4dd0530cd25c43b229ee90c36a0be61\" style=\"left:630px;top:880px;z-index:10102;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Garuda.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(3737621, document.getElementById('el3737621_c4dd0530cd25c43b229ee90c36a0be61'), {\"id\":3737621,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:830px;top:1030px;z-index:10105;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el4403596_f512d5ee58a6b47404214d164a367e9d\" ><p style=\"font-size: 24px;\">\u7d42\u66f2\uff0e\uff39\uff30<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(4403596, document.getElementById('el4403596_f512d5ee58a6b47404214d164a367e9d'), {\"id\":4403596,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:630px;top:1030px;z-index:10103;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:150px;height:35px;\" id=\"el5319847_53353fcb612e527fff047a41a7b07bdc\" ><p style=\"font-size: 24px;\">\u4e0d\u6b7b\u9ce5\uff0e\u9cf3\u51f0<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(5319847, document.getElementById('el5319847_53353fcb612e527fff047a41a7b07bdc'), {\"id\":5319847,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1322035_da01706ba2a818f2a274a5e0f6738202\" style=\"left:485px;top:1080px;z-index:10107;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Snake_2.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1322035, document.getElementById('el1322035_da01706ba2a818f2a274a5e0f6738202'), {\"id\":1322035,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el1899505_a7311ac808aaf6de88680f67551f06f3\" style=\"left:25px;top:1245px;z-index:10108;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage ElImgNoBack\" src=\"data\/261032_265807_Assassin.png\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1899505, document.getElementById('el1899505_a7311ac808aaf6de88680f67551f06f3'), {\"id\":1899505,\"interactive\":true,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n<script type=\"text\/javascript\" data-evaluate=\"1\">\nInteractions.ori_styles = {\"3374034\":{\"opacity\":null,\"width\":120,\"height\":30,\"top\":32,\"left\":1080},\"52164\":{\"opacity\":null,\"width\":205,\"height\":54,\"top\":20,\"left\":20},\"26828\":{\"opacity\":null,\"width\":205,\"height\":54,\"top\":0,\"left\":0},\"5431360\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":224,\"left\":25},\"2335974\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":224,\"left\":225},\"6367483\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":74,\"left\":225},\"5528805\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":74,\"left\":425},\"5649421\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":74,\"left\":625},\"6066611\":{\"opacity\":null,\"width\":150,\"height\":63,\"top\":224,\"left\":625},\"6365930\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":224,\"left\":425},\"662735\":{\"opacity\":null,\"width\":150,\"height\":63,\"top\":224,\"left\":825},\"2457373\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":74,\"left\":825},\"285838\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":280,\"left\":825},\"550164\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":280,\"left\":625},\"1224899\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":430,\"left\":425},\"1437568\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":430,\"left\":25},\"2488504\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":430,\"left\":825},\"4434053\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":280,\"left\":225},\"4489793\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":430,\"left\":225},\"4679398\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":430,\"left\":625},\"6384470\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":280,\"left\":425},\"6394478\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":280,\"left\":25},\"2014291\":{\"opacity\":null,\"width\":990,\"height\":10,\"top\":265,\"left\":25},\"6077109\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":74,\"left\":25},\"30143\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":619,\"left\":625},\"205592\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":619,\"left\":825},\"354327\":{\"opacity\":null,\"width\":990,\"height\":10,\"top\":660,\"left\":25},\"569262\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":619,\"left\":225},\"666221\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":675,\"left\":825},\"920455\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":619,\"left\":25},\"999923\":{\"opacity\":null,\"width\":150,\"height\":149,\"top\":675,\"left\":625},\"1097631\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":619,\"left\":425},\"1121530\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":469,\"left\":425},\"1188890\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":825,\"left\":25},\"1524240\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":675,\"left\":25},\"1765012\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":675,\"left\":425},\"1801008\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":469,\"left\":25},\"2045036\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":825,\"left\":825},\"2190800\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":825,\"left\":625},\"2213733\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":675,\"left\":225},\"2229290\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":469,\"left\":625},\"2327355\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":825,\"left\":225},\"2344997\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":469,\"left\":825},\"2440712\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":825,\"left\":425},\"2504357\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":469,\"left\":225},\"1098689\":{\"opacity\":null,\"width\":300,\"height\":119,\"top\":1103,\"left\":180},\"2438730\":{\"opacity\":null,\"width\":300,\"height\":119,\"top\":1103,\"left\":650},\"2521229\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":1070,\"left\":25},\"73792\":{\"opacity\":null,\"width\":300,\"height\":119,\"top\":1443,\"left\":650},\"95787\":{\"opacity\":null,\"width\":300,\"height\":119,\"top\":1268,\"left\":650},\"469343\":{\"opacity\":null,\"width\":300,\"height\":119,\"top\":1443,\"left\":180},\"959826\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":1410,\"left\":495},\"1319873\":{\"opacity\":null,\"width\":300,\"height\":119,\"top\":1268,\"left\":180},\"2007944\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":1410,\"left\":25},\"2405970\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":1235,\"left\":495},\"23346\":{\"opacity\":null,\"width\":300,\"height\":119,\"top\":1796,\"left\":185},\"689319\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":1928,\"left\":30},\"1060913\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":2103,\"left\":30},\"1093445\":{\"opacity\":null,\"width\":300,\"height\":119,\"top\":1621,\"left\":185},\"1158197\":{\"opacity\":null,\"width\":300,\"height\":119,\"top\":1621,\"left\":655},\"1200683\":{\"opacity\":null,\"width\":300,\"height\":117,\"top\":2136,\"left\":185},\"1326615\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":1588,\"left\":500},\"1362205\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":1763,\"left\":500},\"1424279\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":1928,\"left\":500},\"1682593\":{\"opacity\":null,\"width\":300,\"height\":118,\"top\":1796,\"left\":655},\"1781865\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":2103,\"left\":500},\"1821596\":{\"opacity\":null,\"width\":300,\"height\":117,\"top\":1961,\"left\":185},\"2166057\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":1588,\"left\":30},\"2320214\":{\"opacity\":null,\"width\":300,\"height\":119,\"top\":2136,\"left\":655},\"2617717\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":1763,\"left\":30},\"2741754\":{\"opacity\":null,\"width\":300,\"height\":118,\"top\":1961,\"left\":655},\"43398\":{\"opacity\":null,\"width\":300,\"height\":136,\"top\":2828,\"left\":180},\"98953\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":2620,\"left\":25},\"343516\":{\"opacity\":null,\"width\":300,\"height\":117,\"top\":2313,\"left\":180},\"568577\":{\"opacity\":null,\"width\":300,\"height\":116,\"top\":3160,\"left\":180},\"601699\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":2795,\"left\":25},\"621465\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":2280,\"left\":25},\"628780\":{\"opacity\":null,\"width\":300,\"height\":118,\"top\":2313,\"left\":650},\"1252944\":{\"opacity\":null,\"width\":300,\"height\":118,\"top\":2488,\"left\":180},\"1286975\":{\"opacity\":null,\"width\":300,\"height\":115,\"top\":3163,\"left\":650},\"1331528\":{\"opacity\":null,\"width\":300,\"height\":118,\"top\":2653,\"left\":180},\"1730083\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":2455,\"left\":25},\"1846694\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":2280,\"left\":495},\"1901250\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":3160,\"left\":495},\"2116713\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":2620,\"left\":495},\"2488784\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":2455,\"left\":495},\"2592019\":{\"opacity\":null,\"width\":300,\"height\":119,\"top\":2653,\"left\":650},\"2632899\":{\"opacity\":null,\"width\":300,\"height\":117,\"top\":2488,\"left\":650},\"2659859\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":3145,\"left\":25},\"2800369\":{\"opacity\":null,\"width\":300,\"height\":117,\"top\":2828,\"left\":650},\"2984722\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":2795,\"left\":495},\"115788\":{\"opacity\":null,\"width\":300,\"height\":118,\"top\":2998,\"left\":650},\"870650\":{\"opacity\":null,\"width\":300,\"height\":118,\"top\":2998,\"left\":180},\"2001588\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":2965,\"left\":25},\"4274677\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":2965,\"left\":495},\"111818\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":1030,\"left\":230},\"528641\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":880,\"left\":830},\"1133402\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":1030,\"left\":30},\"1568371\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":880,\"left\":430},\"1680169\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":880,\"left\":30},\"2106872\":{\"opacity\":null,\"width\":990,\"height\":10,\"top\":865,\"left\":30},\"2613273\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":880,\"left\":230},\"3198648\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":1030,\"left\":430},\"3737621\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":880,\"left\":630},\"4403596\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":1030,\"left\":830},\"5319847\":{\"opacity\":null,\"width\":150,\"height\":35,\"top\":1030,\"left\":630},\"1322035\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":1080,\"left\":485},\"1899505\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":1245,\"left\":25}};\nInteractions.scrollable_el = document.getElementById('canvas-wrapper');\nInteractions.timeouts = [];\nInteractions.scrolls = [];\nvar load_events = [];\n\n  \n    (function() {\n      var element = document.getElementById('el6367483_275f1b880e6860c2939112ab589acc61');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1322035\\\":\\\"1322035\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el5528805_14c08341b55ac1105240d8346035f9da');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1899505\\\":\\\"1899505\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el5649421_6a6c2ac1b139037f64d6fd1cd2714c0a');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2405970\\\":\\\"2405970\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2457373_b24b24077a57ec007d925bf2fa659186');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2007944\\\":\\\"2007944\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el285838_5f3a9aec53e52d5389cfcbf10b6fe1df');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1362205\\\":\\\"1362205\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el550164_9dc19c113d12b4737212233c82646e12');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2617717\\\":\\\"2617717\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el4434053_5223e15fb9bcd7f5d9a840073e73a33c');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2166057\\\":\\\"2166057\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el6384470_aec01095bf855d8d2c767fe50493c5c3');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1326615\\\":\\\"1326615\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el6394478_0f67e8447d239efd0d588286b8f21e1c');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"959826\\\":\\\"959826\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el6077109_c35fa85e451fb58b63bd3944395cf134');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2521229\\\":\\\"2521229\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el666221_a64fd1b9d17651ea1029b8d663e1a389');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2116713\\\":\\\"2116713\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el999923_16c4c6b5c7e9e5e8c310425ad1270869');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"98953\\\":\\\"98953\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1121530_9d43a3eef0bbcdc20b359d8c97f7801f');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1060913\\\":\\\"1060913\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1524240_8004f26c2c3085bb1f8766ec51952e71');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1846694\\\":\\\"1846694\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1765012_bcd13f1083bafd49fffbeeed6ee096fb');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2488784\\\":\\\"2488784\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1801008_551bce5b0f3f59ecf25fa04490f7152c');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"689319\\\":\\\"689319\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2213733_954a4c2915422bf55c3e2406d30a5a02');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1730083\\\":\\\"1730083\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2229290_f05aadaa0c42500f552b04c7dd9cbbce');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1781865\\\":\\\"1781865\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2344997_618607c5a7d96b2ea4157256f3860a09');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"621465\\\":\\\"621465\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2504357_5c11a0da02909856d90dc08d7277c617');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1424279\\\":\\\"1424279\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2521229_5f53d210ca5c348366c41b2c09abf732');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"6077109\\\":\\\"6077109\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el959826_1c6362488d87a78b51929803815859db');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"6394478\\\":\\\"6394478\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2007944_4266c412abefa0d0696ac507fb1b66b6');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2457373\\\":\\\"2457373\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2405970_a464ee062e394c0e089e1d57b056f650');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"5649421\\\":\\\"5649421\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el689319_7973b74fcbe3a92458fb4745f1eafaf1');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1801008\\\":\\\"1801008\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1060913_cb6f9b97342b9a1eb0b7f789436e92bc');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1121530\\\":\\\"1121530\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1326615_9e62edbedabc05f7464a09e479278ea9');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"6384470\\\":\\\"6384470\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1362205_28fbf324929732440359de12867273fb');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"285838\\\":\\\"285838\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1424279_e010b6e3f2779b35741e8a72493ffc69');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2504357\\\":\\\"2504357\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1781865_1fd780d1c2c5e6399e212a189f5c459e');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2229290\\\":\\\"2229290\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2166057_f9461241af11419599c8c89b0147cee7');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"4434053\\\":\\\"4434053\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2617717_980c781041bdb01276d2dc6a96b50479');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"550164\\\":\\\"550164\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el98953_5675bcc1e7e4036bb9d8430123a93fcf');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"999923\\\":\\\"999923\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el601699_be53dcf81f561ed483e2e7a85e279491');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1680169\\\":\\\"1680169\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el621465_ff57c1c37e0f32155e654e9f05dc73de');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"621465\\\":\\\"621465\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null},{\"function\":\"function() {\\n  var ids = {\\\"2344997\\\":\\\"2344997\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1730083_03cc71be0a9c6323764185295957a899');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2213733\\\":\\\"2213733\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1846694_b76c07612327481162ef7663bb003cb8');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1524240\\\":\\\"1524240\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2116713_12e1f2468c5d76e7a44f3b4f21105769');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"666221\\\":\\\"666221\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2488784_ca49239fda50f12cb43dc34bd0f9c4ec');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1765012\\\":\\\"1765012\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2659859_ae2b7fc8023a8b0d79c978710c8d0a90');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"528641\\\":\\\"528641\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2984722_c5f7a074e20e14f45fcb1554ef3a94cb');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2613273\\\":\\\"2613273\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2001588_e7d8e773c1e9d2b725a91c46f7d6e3cd');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"1568371\\\":\\\"1568371\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el4274677_302c14537f3611ce03730e6ab2a3e2c1');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"3737621\\\":\\\"3737621\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el528641_9588c48698fc16ddd650588fb0eccbfa');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2659859\\\":\\\"2659859\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1568371_90566b944f3c30de53fcc29e4f4a8082');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2001588\\\":\\\"2001588\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1680169_68da09d3e44273fcef7b771e602c9e28');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"601699\\\":\\\"601699\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el2613273_b52be0effca4e05769a29213def71e5e');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"2984722\\\":\\\"2984722\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el3737621_c4dd0530cd25c43b229ee90c36a0be61');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"4274677\\\":\\\"4274677\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1322035_da01706ba2a818f2a274a5e0f6738202');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"6367483\\\":\\\"6367483\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"300\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n    \n    (function() {\n      var element = document.getElementById('el1899505_a7311ac808aaf6de88680f67551f06f3');\n      var event = 'click';\n      var actions = {\"type\":\"DOM\",\"callbacks\":[{\"function\":\"function() {\\n  var ids = {\\\"5528805\\\":\\\"5528805\\\"};\\n  var animation = {\\\"easing\\\":\\\"easeNone\\\",\\\"easingType\\\":\\\"Power1\\\",\\\"amplitude\\\":100,\\\"springness\\\":300,\\\"duration\\\":\\\"299\\\"};\\n  var position;\\n\\n  for (var i in ids) {\\n    if (ids.hasOwnProperty(i)) {\\n      position = Preview.mElements.get(ids[i]).getPosition(true);\\n      InteractionsAnimations.processScroll(Interactions.scrollable_el, position.top, animation.duration || animation.time, animation);\\n    }\\n  }\\n}\",\"delay\":0,\"trigger_value\":null}]};\n\n      var f = function(e) {\n        var processed = [];\n\n        if (typeof Interactions.shouldBeFired == 'function' && false === Interactions.shouldBeFired(e)) {\n          return;\n        }\n\n        actions.callbacks.forEach(function(callback) {\n          var callback_evaluated = eval('('+callback.function+')');\n\n          if (event != 'change' || (e.target.value === callback.trigger_value)) {\n            if (callback.delay > 0) {\n              Interactions.timeouts.push(setTimeout(callback_evaluated, callback.delay, e));\n            } else {\n              processed.push(callback_evaluated(e));\n            }\n          }\n        });\n\n        Interactions.handleEvent(e, processed);\n      };\n\n      if (event === 'load') {\n        load_events.push(f);\n      }\n      else if (event === 'scroll') {\n        Interactions.scrolls.push(f);\n      }\n      else if (element) {\n        if (actions.type == 'touch') {\n          if (!element.mc) {\n            element.mc = new Hammer(element, {prevent_default: true});\n            element.mc.get('swipe').set({direction: Hammer.DIRECTION_ALL, velocity: 0.0001, threshold: 2});\n            element.mc.get('press').set({time: 200});\n          }\n\n          element.mc.on(event, f);\n        }\n        else {\n          element.addEventListener(event, f);\n        }\n      }\n    })();\n  \nInteractions.attachScrollEvent();\nInteractions.onContentLoaded(load_events);\n<\/script>\n"},"is_shot_mode":false,"version_data":[],"comment_id":0,"preview_url":"https:\/\/live.uxpin.com\/15dec858e079c06a1e2a6f74d84f61bd98bb9b72#\/pages\/23663224"}

        Preview.setData(data)

    if(!Preview.isExport() && Preview.isMenuEnabled()) {
        Preview.createMainToolbar();
    }

    if(data.menu_enabled) {
        Preview.createSidebar({
            'show_comments': data.export_mode ? false : true,
            'show_back_widget': data.export_mode || !data.is_user_logged_in ? false : true
        });
    }

    if(data.versions) {
        if(data.versions.getLength() > 1) {
            Preview.createVersionSwitch(data.versions)
        }
    }

    Preview.comet = new dmsDPPreview_Comet();

    var uin = '';

    if(uin && document.getElement('#name-set')) {
        document.getElement('#name-set').dispose();
    }

    new Hash(Preview.mData.versions_html).each(function(pHTML, pId) {

      Preview.cachePage(pId,pHTML);
    })

    if(uri.get('fragment')) {
      Preview.loadPageVersion(uri.get('fragment').toInt());
    }
    Preview.fixModals();

    Preview.mFixedElems = Preview.getFixed();

    var canvas = document.getElementById('canvas-wrapper');
    canvas.addEventListener('scroll', function scrollFixed(pEv){
      var fixed = Preview.mFixedElems;
      for(var i = 0;i<fixed.length;i++) {
        fixed[i].style.top = pEv.target.scrollTop + fixed[i].originalTop.toInt() + "px";
        fixed[i].style.left = pEv.target.scrollLeft + fixed[i].originalLeft.toInt() + "px";
      }
      if ("" == canvas.style.zIndex || 99 == canvas.style.zIndex) {  // hack for chrome; forced rerender because of artifacts
        canvas.style.zIndex=100;
      } else {
        canvas.style.zIndex=99;
      }
    });
});

Array.implement({

    /**
     * Dziala identycznie jak each() z tym wyjatkiem, ze jesli callback zwroci FALSE
     * petla zostanie przerwana
     */
    breakEach: function(fn, bind){

        for (var i = 0, l = this.length; i < l; i++) {

            if(false === fn.call(bind, this[i], i, this)) {
                break;
            }
        }
    }

});

</script>


      
<script>
GAnal = {

  registerElements: function(pConfig) {

    if(typeof pConfig.each != 'function') {
      pConfig = new Hash(pConfig);
    }

    pConfig.each(function(pConfig, pSelector) {
      var el = document.getElement(pSelector);

      el && el.addEvent('click', function() {
        GAnal.trackEvent.apply(GAnal, pConfig)
      });
    });
  },

  // more at: https://developers.google.com/analytics/devguides/collection/gajs/eventTrackerGuide
  trackEvent: function(pCategory, pAction, pLabel, pValue, pNoninteraction) {
    if('uxpin.local.com' === location.hostname) {
      console.log('trackEvent', arguments);
    } else if (window._gaq) {
      _gaq.push(['_trackEvent', pCategory, pAction, pLabel, pValue, pNoninteraction]);
    }
  },

  // more at: https://developers.google.com/analytics/devguides/collection/gajs/gaTrackingTiming
  trackTiming: function(pCategory, pVariable, pTime, pLabel, pSampleRate) {
    if('uxpin.local.com' === location.hostname) {
      console.log('trackTiming', arguments);
    } else if (window._gaq && pTime > 0) {
      var rate = pSampleRate || 100;
      _gaq.push(['_trackTiming', pCategory, pVariable, pTime, pLabel, rate]);
    }
  }
};
</script>

<script>
(function() {
  var tag = document.createElement('script');
  var firstScriptTag = document.getElementsByTagName('script')[0];

  tag.src = 'https://www.youtube.com/player_api';
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
})();
</script>



  </body>
</html>