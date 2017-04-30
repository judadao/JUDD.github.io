<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
  <head>
    <meta charset="UTF-8">
    <title>Responsive template - 戰鬥介面 - UXPin</title>
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

     
<script type="text/javascript"  src="data/js_offlinePreviewLibs_48decc79.js"></script>
<link rel="stylesheet" href="data/1_5_a_7_2b16be847d2289ed6a7787b63aaa03f613e1.css" type="text/css"/>
<script>
  var Preview = new dmsDPPreview_Preview();
</script>

<div id="canvas">
    <div id="canvas-wrapper">
        <div id="canvas-area">
            <div id="main1">
            
<?php
    session_start();
    include("connect.php");
    $sql= "SELECT 怪物名,防禦,攻擊,血量,特別技能名稱,特別攻擊,特別防禦,特別血量,特技持續回合,特技冷卻時間 
           FROM 怪物背包 natural join 怪物總覽
           where 怪物背包.ID='$_SESSION[username]' and 怪物背包.怪物名='$_SESSION[fightmonstor]'";
    $result=mysql_query($sql)or die(mysql_error());
    $row=mysql_fetch_array($result);
    echo "<script>";
    echo "attack1=\"$row[2]\";";
    echo "defend1=\"$row[1]\";";
    echo "bloon1=\"$row[3]\";";
    echo "player=\"$row[0]\";";
    echo "specialeffects1=\"$row[4]\";";
    echo "specialattack1=\"$row[5]\";";
    echo "specialdefend1=\"$row[6]\";";
    echo "specialbloon1=\"$row[7]\";";
    echo "lastround1=\"$row[8]\";";
    echo "cooltime1=\"$row[9]\";";
    echo "life1=bloon1;";
    echo "</script>";

    $sql2= "SELECT 怪物名,防禦,攻擊,血量,特別技能名稱,特別攻擊,特別防禦,特別血量,特技持續回合,特技冷卻時間
            FROM 怪物總覽 natural join 地圖
            where 區域='$_SESSION[levels]'";
    $result2=mysql_query($sql2)or die(mysql_error());
    $row2=mysql_fetch_array($result2);
    echo "<script>";
    echo "attack2=\"$row2[2]\";";
    echo "defend2=\"$row2[1]\";";
    echo "bloon2=\"$row2[3]\";";
    echo "computer=\"$row2[0]\";";
    echo "specialeffects2=\"$row2[4]\";";
    echo "specialattack2=\"$row2[5]\";";
    echo "specialdefend2=\"$row2[6]\";";
    echo "specialbloon2=\"$row2[7]\";";
    echo "lastround2=\"$row2[8]\";";
    echo "cooltime2=\"$row2[9]\";";
    echo "life2=bloon2;";
    echo "</script>";

    if(isset($_SESSION['usetoolname']))  
    {
    $sql2= "SELECT 物品,加攻擊,加防禦,加血量,回合
            FROM 道具總覽
            where 物品='$_SESSION[usetoolname]'";
    $result2=mysql_query($sql2);
    $row2=mysql_fetch_array($result2);
    echo "<script>";
    echo "addattack=\"$row2[1]\";";
    echo "adddefend=\"$row2[2]\";";
    echo "addbloon=\"$row2[3]\";";
    echo "name=\"$row2[0]\";";
    echo "useround=\"$row2[4]\";";
    echo "use=1;";
    echo "use_stopround=useround;";
    echo "</script>";
    echo $_SESSION['usetoolname'];
    unset($_SESSION['usetoolname']);
    }
    else
    {
        echo "<script>";
        echo "use=0";
        echo "use_stopround=0;";
        echo "</script>";
    }  

?>
<div class="ElImageWrapper " id="el7096176_7b180520f324bd77f144e78a75fafdb3" style="z-index:10001;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;left:40px;top:36px;position:absolute;width:150px;height:150px;" >
<script>
      path="圖片/"+computer+".png";
      document.write('<img class="ElImage" src="'+path+'" />');
</script>
</div>

    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(7096176, document.getElementById('el7096176_7b180520f324bd77f144e78a75fafdb3'), {"id":7096176,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="z-index:10003;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;left:210px;top:93px;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;" id="el1133428_d094b8aff02ae486c8f699a4d6ae3a31" >防禦力:<script>document.write(defend2)</script></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1133428, document.getElementById('el1133428_d094b8aff02ae486c8f699a4d6ae3a31'), {"id":1133428,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="z-index:10005;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;left:210px;top:45px;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;" id="el2789851_f81349db04487efa2053f2773771b324" >血量:<script>document.write(bloon2)</script></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2789851, document.getElementById('el2789851_f81349db04487efa2053f2773771b324'), {"id":2789851,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="z-index:10002;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;left:35px;top:200px;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;" id="el3141294_ea86684329ea7b954b89f1fe8307ece6" >生命:<div id="life2"></div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(3141294, document.getElementById('el3141294_ea86684329ea7b954b89f1fe8307ece6'), {"id":3141294,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="z-index:10004;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;left:210px;top:69px;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;" id="el7331197_10757bc3f3bb52a024656e45f4081c0e" >攻擊力:<script>document.write(attack2)</script></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(7331197, document.getElementById('el7331197_10757bc3f3bb52a024656e45f4081c0e'), {"id":7331197,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:210px;top:299px;z-index:10010;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;" id="el1143777_57ea551442098e3d804f1ee1ccd95cd1" >血量:<script>document.write(bloon1)</script></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1143777, document.getElementById('el1143777_57ea551442098e3d804f1ee1ccd95cd1'), {"id":1143777,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:35px;top:454px;z-index:10007;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;" id="el3545772_651d98f684cd22e9f196631deefe139b" >生命:<div id="life1"></div></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(3545772, document.getElementById('el3545772_651d98f684cd22e9f196631deefe139b'), {"id":3545772,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>

<div class="ElImageWrapper " id="el4116058_3c8bbd23a757cc7ec95008bcca5c9db5" style="left:40px;top:290px;z-index:10006;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;" >
 <script>   
      path2="圖片/"+player+".png";
      document.write('<img class="ElImage" src="'+path2+'" />');
</script>
</div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(4116058, document.getElementById('el4116058_3c8bbd23a757cc7ec95008bcca5c9db5'), {"id":4116058,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:210px;top:347px;z-index:10008;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;" id="el5097503_18d55ed9ea49455eacfc4eba759735ff" >防禦力:<script>document.write(defend1)</script></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(5097503, document.getElementById('el5097503_18d55ed9ea49455eacfc4eba759735ff'), {"id":5097503,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="left:210px;top:323px;z-index:10009;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;" id="el7411822_b10a30a9f6e841b21f88a9d8ce75b8fe" >攻擊力:<script>document.write(attack1)</script></div>
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(7411822, document.getElementById('el7411822_b10a30a9f6e841b21f88a9d8ce75b8fe'), {"id":7411822,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <input type="button"  onclick="javascript:specialattack(player,computer,1,1)" style=";z-index:10011;border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;border-color:#dddddd;border-style:solid;background-color:#3498db;color:#FFF;font-size:14px;font-weight:bold;font-style:normal;font-family:Arial;text-align:center;box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-o-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);background-size:auto;background-repeat:repeat;background-position:center center;padding-top:6px;padding-right:10px;padding-bottom:6px;padding-left:10px;left:610px;top:480px;position:absolute;width:120px;height:30px;;" class="ElButton active " value="特技" id="el5051042_ce841da7cfccd1d562a2ca7ff4b50dbb" />
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(5051042, document.getElementById('el5051042_ce841da7cfccd1d562a2ca7ff4b50dbb'), {"id":5051042,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <input type="button"   style=";z-index:10012;border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;border-color:#dddddd;border-style:solid;background-color:#3498db;color:#FFF;font-size:14px;font-weight:bold;font-style:normal;font-family:Arial;text-align:center;box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-o-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);background-size:auto;background-repeat:repeat;background-position:center center;padding-top:6px;padding-right:10px;padding-bottom:6px;padding-left:10px;left:769px;top:480px;position:absolute;width:120px;height:30px;;" class="ElButton active " value="道具" id="el590549_0611a6f5c3923a36dd3592d6df888ff6" />
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(590549, document.getElementById('el590549_0611a6f5c3923a36dd3592d6df888ff6'), {"id":590549,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>       <input type="button"  onclick="javascript:location.href='map.php'" style=";z-index:10013;border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;border-color:#dddddd;border-style:solid;background-color:#3498db;color:#FFF;font-size:14px;font-weight:bold;font-style:normal;font-family:Arial;text-align:center;box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-o-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);background-size:auto;background-repeat:repeat;background-position:center center;padding-top:6px;padding-right:10px;padding-bottom:6px;padding-left:10px;left:930px;top:480px;position:absolute;width:120px;height:30px;;" class="ElButton active " value="逃跑" id="el6670391_ac5ed76f75015162a98679c0b2c96f4d" />
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6670391, document.getElementById('el6670391_ac5ed76f75015162a98679c0b2c96f4d'), {"id":6670391,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <input type="button"  onclick="javascript:attack(player,computer,1)" style=";z-index:10014;border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;border-color:#dddddd;border-style:solid;background-color:#3498db;color:#FFF;font-size:14px;font-weight:bold;font-style:normal;font-family:Arial;text-align:center;box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-o-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);background-size:auto;background-repeat:repeat;background-position:center center;padding-top:6px;padding-right:10px;padding-bottom:6px;padding-left:10px;left:440px;top:478px;position:absolute;width:120px;height:30px;;" class="ElButton active " value="攻擊" id="el3744076_4482670b78429d1b495514db9eec8451" />
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(3744076, document.getElementById('el3744076_4482670b78429d1b495514db9eec8451'), {"id":3744076,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="z-index:10015;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;left:620px;top:5px;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:229px;height:64px;" id="el5675731_47a629c51eaef626938b9f3f2e99a02e" ><p style="font-size: 48px;">戰鬥細節</p></div>
    <!--<script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(5675731, document.getElementById('el5675731_47a629c51eaef626938b9f3f2e99a02e'), {"id":5675731,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <div class="ElTextElement " style="z-index:10017;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;left:400px;top:246px;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:43px;" id="el6958954_cb71064d84477cc708db0b10f19eee5a" ><p style="font-family: Arial;"><span style="color: rgb(0, 0, 0);">XXX對XXX造成傷害</span></p><p style="font-family: Arial;"><span style="color: rgb(0, 0, 0);">XXX剩餘XXX點血量</span></p></div>-->
    <script type='text/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6958954, document.getElementById('el6958954_cb71064d84477cc708db0b10f19eee5a'), {"id":6958954,"interactive":false,"in_group":false,"in_component":false,"id_component":false,"anchor_x":0,"anchor_y":0}, {"angle":0})})();</script>    <textarea class="ElBox " style="z-index:10016;border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#c8c8c8;border-style:solid;background-color:#ebebeb;background-size:auto;background-repeat:repeat;background-position:center center;color:#000000;font-size:14px;font-weight:normal;font-style:normal;font-family:Arial;text-align:left;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;left:384px;top:81px;position:absolute;width:700px;height:373px;" id="el4164683_7c41eac61c172d80a0a9fa6bc3483f6e" ></textarea> 
<?php
    if(isset($_SESSION['detail']))
    {
        echo "<script>";
        echo "string=\"$_SESSION[detail]\";";
        echo "</script>";
        unset($_SESSION['detail']);
    }
    if(isset($_SESSION['life1']))
    {
        echo "<script>";
        echo "returnlife1=\"$_SESSION[life1]\";";
        echo "</script>";
        unset($_SESSION['life1']);
    }
    else
    {
        echo "<script>";
        echo "returnlife1=0;";
        echo "</script>";
    }
    if(isset($_SESSION['life2']))
    {
        echo "<script>";
        echo "returnlife2=\"$_SESSION[life2]\";";
        echo "</script>";
        unset($_SESSION['life2']);
    }
    else
    {
        echo "<script>";
        echo "returnlife2=0;";
        echo "</script>";
    }
?> 
 <script>
    out1=bloon1;
    out2=bloon2;
    stop1=0;
    stop2=0;
    temp1=lastround1;
    temp2=lastround2;
    temp3=defend1;
    temp4=defend2;
    temp5=attack1;
    start1=0;
    start2=0;
    use_start=0;
    function out()
    {
        var i;
        var result="";
        var c;
        for (i = 0; i < string.length; i++) {
            c = string.substr(i, 1);
            if (c == "；")
            result = result + "\r\n";
        else
            result = result + c;
        }
        document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+=result;
    }
    function callbloon1()
    {
        if(returnlife1!=0)
        {
            life1=returnlife1;
            returnlife1=0;
        }
        
        out1=life1;
        document.getElementById('life1').innerHTML=out1;
        setTimeout("callbloon1()",100);
    }
    function callbloon2()
    {
        if(returnlife2!=0)
        {
            life2=returnlife2;
            returnlife2=0;
        }
        out2=life2;
        document.getElementById('life2').innerHTML=out2;
        setTimeout("callbloon2()",100);
    }

    function attack(attacker,accepter,number)
    {
        if(number==1)
        {
            if(start1==1)
                setTimeout("specialattack(player,computer,0,1)", 1000); 
            if((attack1-defend2)>0)
            {
                document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="我方"+attacker+"對"+accepter+"造成"+(attack1-defend2)+"點傷害\r\n\r\n";
                if(life2-(attack1-defend2)>0)   
                    life2-=(attack1-defend2);
                else
                {document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+=computer+"終於倒下\r\n\r\n"; 
                life2=0;
                setTimeout("end(computer)", 2000);
                }  
            }
            else
            document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="我方"+player+"的攻擊對"+computer+"不痛不癢\r\n\r\n"; 
            if(stop1!=0)
            document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="我方"+player+"的冷卻時間還有"+stop1+"回合\n\r\n"; 
        }
        else
        {
            if(start2==1)
                {document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+=start2+"\n\r\n";
                setTimeout("specialattack(computer,player,0,0)", 2000);
            }
            if((attack2-defend1)>0)
            {
                document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="對方"+attacker+"對"+accepter+"造成"+(attack2-defend1)+"點傷害\r\n\r\n";
                if(life1-(attack2-defend1)>0) 
                    life1-=(attack2-defend1);
                else
                {document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="我方"+player+"失去戰鬥能力\r\n\r\n"; 
                life1=0;
                setTimeout("end(player)", 2000);
                }  
            }
            else
                document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="對方"+computer+"的攻擊對"+player+"不痛不癢\r\n\r\n";  
            if(stop2!=0)
            document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="對方"+computer+"的冷卻時間還有"+stop2+"回合\n\r\n";
        }
        
        if(number==1)
            { 
            document.getElementById('el5051042_ce841da7cfccd1d562a2ca7ff4b50dbb').disabled=true;
            document.getElementById('el590549_0611a6f5c3923a36dd3592d6df888ff6').disabled=true;
            document.getElementById('el6670391_ac5ed76f75015162a98679c0b2c96f4d').disabled=true;
            document.getElementById('el3744076_4482670b78429d1b495514db9eec8451').disabled=true;

            if(stop2>0)
            stop2--;

            computerAI();
            setTimeout("usetool()", 1000);
            }
        else
            {
            if(stop1==0)
            document.getElementById('el5051042_ce841da7cfccd1d562a2ca7ff4b50dbb').disabled=false;
            else
            stop1--;

            document.getElementById('el590549_0611a6f5c3923a36dd3592d6df888ff6').disabled=false;
            document.getElementById('el6670391_ac5ed76f75015162a98679c0b2c96f4d').disabled=false;
            document.getElementById('el3744076_4482670b78429d1b495514db9eec8451').disabled=false;
            }
    }


    function specialattack(attacker,accepter,isfirst,number)
    {
        
        if(life1>0 && life2>0)
        {
            if(number==1)
            {
                if(specialattack1!=0 && temp1>0)
                {
                    if(isfirst==1 && temp1==lastround1)
                    {
                        start1=1;
                        if(stop1>0)
                        stop1--;
                    }
                    if(isfirst==1 && start1==1)
                    {
                        stop1=cooltime1;
                        document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="我方"+player+"的技能冷卻回合為"+stop1+"回合\n\r\n";
                    }
                    document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="我方"+attacker+"對"+accepter+"使出"+specialeffects1+"在"+temp1+"回合內造成"+specialattack1+"點傷害\r\n\r\n";
                    if((specialattack1-defend2)>0)
                    {
                        if(life2-(specialattack1-defend2)>0)
                        life2-=(specialattack1-defend2);
                        else
                        end(computer);
                    }
                    else
                    document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="對方"+computer+"防禦過高，無法打穿造成傷害\r\n\r\n";
                }
             if(specialdefend1!=0 && temp1>0)
             {
                            if(temp1==lastround1)
                                {   
                                    document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="我方"+attacker+"使出"+specialeffects1+"防禦自己了"+temp1+"回合內免受"+specialdefend1+"點傷害\r\n\r\n";
                                    defend1-=(-specialdefend1);
                                }
             }
             if(specialbloon1!=0 && temp1>0)
             {
                            if(specialbloon1>0)
                            {
                                document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="我方"+attacker+"使出"+specialeffects1+"增加血量，"+temp1+"回合內，每回合增加"+specialbloon1+"點血量\r\n\r\n";
                                life1-=(-specialbloon1);
                            }
                            else
                            {
                                document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="我方"+attacker+"使出"+specialeffects1+"削弱血量，"+temp1+"回合內，每回合削弱自己"+specialbloon1+"點血量來提升能力\r\n\r\n";
                                life1-=specialbloon1;
                            }
                            
             }
            if(temp1!=0)
            {   
                document.getElementById('el5051042_ce841da7cfccd1d562a2ca7ff4b50dbb').disabled=true;
                document.getElementById('el590549_0611a6f5c3923a36dd3592d6df888ff6').disabled=true;
                document.getElementById('el6670391_ac5ed76f75015162a98679c0b2c96f4d').disabled=true;
                document.getElementById('el3744076_4482670b78429d1b495514db9eec8451').disabled=true;
                if(isfirst==1)
                {
                    setTimeout("usetool()", 1000);
                    setTimeout("attack(computer,player,0)", 1000); 
                }
                if(stop1==0)
                document.getElementById('el5051042_ce841da7cfccd1d562a2ca7ff4b50dbb').disabled=false;

                document.getElementById('el590549_0611a6f5c3923a36dd3592d6df888ff6').disabled=false;
                document.getElementById('el6670391_ac5ed76f75015162a98679c0b2c96f4d').disabled=false;
                document.getElementById('el3744076_4482670b78429d1b495514db9eec8451').disabled=false;
            }
            else
             {
                start1=0;
                temp1=lastround1;
                defend1=temp3;
             }
             temp1--;
        }
        else
            {

            if(specialattack2!=0 && temp2>0)
                {
                    if(isfirst==1 && temp2==lastround2)
                        {if(stop2>0)
                        stop2--;
                        start2=1;}
                    if(isfirst==1 && start2==1)
                    {
                        stop2=cooltime2;
                        document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="對方"+computer+"的技能冷卻回合為"+stop2+"回合\r\n\r\n";
                    }
                    document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="對方"+computer+"對"+player+"使出"+specialeffects2+"在"+temp2+"回合內造成"+specialattack2+"點傷害\r\n\r\n";
                    if((specialattack2-defend1)>0)
                    {
                        if((life1-(specialattack2-defend1))>0)
                        life1-=(specialattack2-defend1);
                        else
                        end(player);
                    }
                    else
                    document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="我方"+player+"防禦過高，無法打穿造成傷害\r\n\r\n";
                }
             if(specialdefend2!=0 && temp2>0)
             {
                if(temp2==lastround2)
                {
                    document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="對方"+attacker+"使出"+specialeffects2+"防禦自己了"+temp2+"回合內免受"+specialdefend2+"點傷害\r\n\r\n";
                    defend2-=(-specialdefend2);
                }
             }
             if(specialbloon2!=0 && temp2>0)
             {
                    if(specialbloon2>0)
                            {
                                document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="對方"+computer+"使出"+specialeffects2+"增加血量，"+temp2+"回合內，每回合增加"+specialbloon2+"點血量\r\n\r\n";
                                life2-=(-specialbloon2);
                            }
                    else
                            {
                                document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="對方"+computer+"使出"+specialeffects2+"削弱血量，"+temp2+"回合內，每回合削弱自己"+(-specialbloon2)+"點血量來提升能力\r\n\r\n";
                                life2-=specialbloon2;
                            }
             }
            

            if(temp2==0)
            {
                start2=0;
                temp2=lastround2;
                defend2=temp4;
            }
            if(stop1==0)
            document.getElementById('el5051042_ce841da7cfccd1d562a2ca7ff4b50dbb').disabled=false;

            document.getElementById('el590549_0611a6f5c3923a36dd3592d6df888ff6').disabled=false;
            document.getElementById('el6670391_ac5ed76f75015162a98679c0b2c96f4d').disabled=false;
            document.getElementById('el3744076_4482670b78429d1b495514db9eec8451').disabled=false;
         }
         temp2--;
        }
            
    }
function computerAI()
{
    possible=Math.floor(1+Math.random()*10);
    if(possible>4 || (possible<=4 && stop2>0))
        setTimeout("attack(computer,player,0)", 1000); 
    else if(stop2==0)
        setTimeout("specialattack(computer,player,1,0)",1000); 
}
function usetool()
{
    
            if(addattack!=0 && use_stopround>0)
            {
                    if(use_stopround==useround)
                                {   
                                    document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="我方"+player+"使用了"+name+"在"+use_stopround+"回合內增加了自己"+addattack+"點攻擊\r\n\r\n";
                                    attack1-=(-adddefend);
                                }            }
            if(adddefend!=0 && use_stopround>0)
            {
                            if(use_stopround==useround)
                                {   
                                    document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="我方"+player+"使用了"+name+"在"+use_stopround+"回合內增加了自己"+adddefend+"點防禦\r\n\r\n";
                                    defend1-=(-adddefend);
                                }
            }
            if(addbloon!=0 && use_stopround>0)
            {
                            document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+="我方"+player+"使用了"+name+"在"+use_stopround+"回合內增加了自己"+addbloon+"點血量\r\n\r\n";
                            life1-=(-addbloon);
            }
            if(use==1)
                    setTimeout("computerAI()", 1000); 
            use_stopround--;
            if(use_stopround==0)
             {
                use=0;
                defend1=temp3;
                attack1=temp5;
             }
}
</script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />    
   <script src="http://code.jquery.com/jquery-1.8.2.js"></script>    
   <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>    
   <script>    
      $.fx.speeds._default = 1000;
      $(function() {
         $( "#dialog" ).dialog({
            autoOpen: false,
            show: "blind",
            hide: "explode",
         });         
         $( "#el590549_0611a6f5c3923a36dd3592d6df888ff6" ).click(function() {
            $( "#dialog" ).dialog( "open" );
               return false;

         });
         $( "#submit" ).click(function() {
            $( "#dialog" ).dialog( "close" );
               return false;
         });        
      });    
      </script>
<?php
    include("connect.php");
        $sql="  select 區域
                from 人物
                where ID='$_SESSION[username]'";
        $result=mysql_query($sql);
        $row3=mysql_fetch_array($result);
        if($_SESSION['levels']==$row3[0])
            echo "<script>area=1;</script>";
        else
             echo "<script>area=0;</script>";
?>
<?php
    $str="  select 物品
            from 道具背包
            where ID='$_SESSION[username]'";
    $result=mysql_query($str);
    $rownumber=mysql_num_rows($result);
    echo '<div id="dialog" title="道具">';
    echo '<form name="test" action="fight.php">';
    if($rownumber!=0)
    {
            for ($i=0; $i < $rownumber; $i++) {
            $data=mysql_fetch_array($result);
            echo "<input type='radio' name='usething' value='$data[0]'>$data[0]</input><br>";
            }
            echo "<br><br><br><br>";
            echo "<input type='submit' id='submit' value='使用' onclick='javascript:getValue()'></input>";
    }
    else
    {
        echo '<p>背包中沒有道具!!!</p>';
        echo "<br><br><br><br>";
    }
    echo '</form>';
    echo '</div>';
?>
<script>
    function getValue()
    {
        var usething = document.forms['test'];
        var getName = usething.elements.usething.value;
        var tmp=document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value;
        var tmp1=ReplaceSeperator(tmp);
        location.href="temp.php?detail="+tmp1+"&name="+getName+"&life1="+life1+"&life2="+life2;
    }
    function ReplaceSeperator(mobiles) {
    var i;
    var result = "";
    var c;
    for (i = 0; i < mobiles.length; i++) {
        c = mobiles.substr(i, 1);
        if ( c == "\n")
            result = result + "；";
        else if (c != "\r")
            result = result + c;
    }
    return result;
    }
    function end(loser)
    {
        document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+=loser+"戰敗，遊戲結束\r\n\r\n";
        if(loser==computer && area==1)
        {
            document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+=player+"獲勝囉\r\n\r\n";
            setTimeout("gotomap(1)",1000);
        }
        
        else if(loser==computer && area!=1)
        {
         document.getElementById('el4164683_7c41eac61c172d80a0a9fa6bc3483f6e').value+=player+"獲勝囉\r\n\r\n";
         setTimeout("gotomap(0)",1000); 
        }
        else
        location.href = 'http://127.0.0.1/game/map.php';
    }

     function gotomap(number)
    {
        if(number==1)
        location.href ='http://127.0.0.1/game/area.php';
        else if(number==0)
        location.href = 'http://127.0.0.1/game/makemoney.php';
    }
</script>
<script type="text/javascript" data-evaluate="1">
Interactions.ori_styles = {"7096176":{"opacity":null,"width":150,"height":150,"top":36,"left":40},"1133428":{"opacity":null,"width":300,"height":24,"top":93,"left":210},"2789851":{"opacity":null,"width":300,"height":24,"top":45,"left":210},"3141294":{"opacity":null,"width":300,"height":24,"top":200,"left":35},"7331197":{"opacity":null,"width":300,"height":24,"top":69,"left":210},"1143777":{"opacity":null,"width":300,"height":24,"top":299,"left":210},"3545772":{"opacity":null,"width":300,"height":24,"top":454,"left":35},"4116058":{"opacity":null,"width":150,"height":150,"top":290,"left":40},"5097503":{"opacity":null,"width":300,"height":24,"top":347,"left":210},"7411822":{"opacity":null,"width":300,"height":24,"top":323,"left":210},"5051042":{"opacity":null,"width":120,"height":30,"top":480,"left":610},"590549":{"opacity":null,"width":120,"height":30,"top":480,"left":769},"6670391":{"opacity":null,"width":120,"height":30,"top":480,"left":930},"3744076":{"opacity":null,"width":120,"height":30,"top":478,"left":440},"5675731":{"opacity":null,"width":229,"height":64,"top":5,"left":620},"6958954":{"opacity":null,"width":300,"height":43,"top":246,"left":400},"4164683":{"opacity":null,"width":700,"height":373,"top":81,"left":384}};
Interactions.scrollable_el = document.getElementById('canvas-wrapper');
Interactions.timeouts = [];
Interactions.scrolls = [];
var load_events = [];


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
    var data = {"id_project":"2503002","id_collection":"524829","id_page":"23663244","id_document":null,"version_of":"23663245","project_hash":"15dec858e079c06a1e2a6f74d84f61bd98bb9b72","active_collaboration":false,"menu_enabled":false,"export_mode":true,"add_comments":false,"page_base_url":null,"pages":[],"comments":null,"is_user_logged_in":false,"versions":"{\"7\":\"23663244\"}","current_version":"7","current_map":[],"versions_html":{"23663244":"\n    <div class=\"ElImageWrapper \" id=\"el7096176_6609f2501a905c30fa562024dbd2f793\" style=\"z-index:10001;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;left:40px;top:36px;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage \" src=\"\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(7096176, document.getElementById('el7096176_6609f2501a905c30fa562024dbd2f793'), {\"id\":7096176,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"z-index:10003;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;left:210px;top:93px;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;\" id=\"el1133428_ad55b96e9b1e2871d622f1af57f7fe8c\" >\u9632\u79a6\u529b:<\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1133428, document.getElementById('el1133428_ad55b96e9b1e2871d622f1af57f7fe8c'), {\"id\":1133428,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"z-index:10005;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;left:210px;top:45px;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;\" id=\"el2789851_266652e6a3a2b5b78924cc0a36fc6396\" >\u8840\u91cf:<\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(2789851, document.getElementById('el2789851_266652e6a3a2b5b78924cc0a36fc6396'), {\"id\":2789851,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"z-index:10002;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;left:35px;top:200px;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;\" id=\"el3141294_005945f2a24d209927efd7ecc08b6d81\" >\u751f\u547d:<\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(3141294, document.getElementById('el3141294_005945f2a24d209927efd7ecc08b6d81'), {\"id\":3141294,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"z-index:10004;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;left:210px;top:69px;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;\" id=\"el7331197_1b36dee4c348945c5d0d7c4baa199b34\" >\u653b\u64ca\u529b:<\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(7331197, document.getElementById('el7331197_1b36dee4c348945c5d0d7c4baa199b34'), {\"id\":7331197,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:210px;top:299px;z-index:10010;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;\" id=\"el1143777_69cb580685862b2e739005def508457c\" >\u8840\u91cf:<\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(1143777, document.getElementById('el1143777_69cb580685862b2e739005def508457c'), {\"id\":1143777,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:35px;top:454px;z-index:10007;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;\" id=\"el3545772_a93ef36468b44105e6fba83fc58b5e06\" >\u751f\u547d:<\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(3545772, document.getElementById('el3545772_a93ef36468b44105e6fba83fc58b5e06'), {\"id\":3545772,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n    <div class=\"ElImageWrapper \" id=\"el4116058_c36db4e3f36bf44627a808cb8266ce0a\" style=\"left:40px;top:290px;z-index:10006;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#888;border-style:solid;background-color:none;position:absolute;width:150px;height:150px;\" >\n      <img class=\"ElImage \" src=\"\" \/>\n    <\/div>\n\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(4116058, document.getElementById('el4116058_c36db4e3f36bf44627a808cb8266ce0a'), {\"id\":4116058,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:210px;top:347px;z-index:10008;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;\" id=\"el5097503_ce7114f04557d0ce8394a9b9278df6cb\" >\u9632\u79a6\u529b:<\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(5097503, document.getElementById('el5097503_ce7114f04557d0ce8394a9b9278df6cb'), {\"id\":5097503,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"left:210px;top:323px;z-index:10009;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:24px;\" id=\"el7411822_b8d2ff16cef07d4c1e7df65eb43e54bc\" >\u653b\u64ca\u529b:<\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(7411822, document.getElementById('el7411822_b8d2ff16cef07d4c1e7df65eb43e54bc'), {\"id\":7411822,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <input type=\"button\" style=\";z-index:10011;border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;border-color:#dddddd;border-style:solid;background-color:#3498db;color:#FFF;font-size:14px;font-weight:bold;font-style:normal;font-family:Arial;text-align:center;box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-o-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);background-size:auto;background-repeat:repeat;background-position:center center;padding-top:6px;padding-right:10px;padding-bottom:6px;padding-left:10px;left:610px;top:480px;position:absolute;width:120px;height:30px;;\" class=\"ElButton active \" value=\"\u7279\u6280\" id=\"el5051042_91b2b440a05ad3ea92e0e26587324251\" \/>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(5051042, document.getElementById('el5051042_91b2b440a05ad3ea92e0e26587324251'), {\"id\":5051042,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <input type=\"button\" style=\";z-index:10012;border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;border-color:#dddddd;border-style:solid;background-color:#3498db;color:#FFF;font-size:14px;font-weight:bold;font-style:normal;font-family:Arial;text-align:center;box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-o-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);background-size:auto;background-repeat:repeat;background-position:center center;padding-top:6px;padding-right:10px;padding-bottom:6px;padding-left:10px;left:769px;top:480px;position:absolute;width:120px;height:30px;;\" class=\"ElButton active \" value=\"\u9053\u5177\" id=\"el590549_b7c64699ba0b679a17622467c5edb5e8\" \/>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(590549, document.getElementById('el590549_b7c64699ba0b679a17622467c5edb5e8'), {\"id\":590549,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <input type=\"button\" style=\";z-index:10013;border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;border-color:#dddddd;border-style:solid;background-color:#3498db;color:#FFF;font-size:14px;font-weight:bold;font-style:normal;font-family:Arial;text-align:center;box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-o-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);background-size:auto;background-repeat:repeat;background-position:center center;padding-top:6px;padding-right:10px;padding-bottom:6px;padding-left:10px;left:930px;top:480px;position:absolute;width:120px;height:30px;;\" class=\"ElButton active \" value=\"\u9003\u8dd1\" id=\"el6670391_46e04bd11e3b95df4530fbd1894252ab\" \/>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6670391, document.getElementById('el6670391_46e04bd11e3b95df4530fbd1894252ab'), {\"id\":6670391,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <input type=\"button\" style=\";z-index:10014;border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;border-color:#dddddd;border-style:solid;background-color:#3498db;color:#FFF;font-size:14px;font-weight:bold;font-style:normal;font-family:Arial;text-align:center;box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-o-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);background-size:auto;background-repeat:repeat;background-position:center center;padding-top:6px;padding-right:10px;padding-bottom:6px;padding-left:10px;left:440px;top:478px;position:absolute;width:120px;height:30px;;\" class=\"ElButton active \" value=\"\u653b\u64ca\" id=\"el3744076_258ee23b8a2daf00a21e23d9e6979f34\" \/>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(3744076, document.getElementById('el3744076_258ee23b8a2daf00a21e23d9e6979f34'), {\"id\":3744076,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"z-index:10015;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;left:620px;top:5px;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:229px;height:64px;\" id=\"el5675731_74b7c99ef5d4b17f84353510480ed8ee\" ><p style=\"font-size: 48px;\">\u6230\u9b25\u7d30\u7bc0<\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(5675731, document.getElementById('el5675731_74b7c99ef5d4b17f84353510480ed8ee'), {\"id\":5675731,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElTextElement \" style=\"z-index:10017;overflow:visible;color:;text-align:left;line-height:normal;font-weight:normal;font-style:normal;left:400px;top:246px;font-family:Arial;border-width:0px;border-style:solid;position:absolute;width:300px;height:43px;\" id=\"el6958954_10618902442cd8c37334f0662a5cb09f\" ><p style=\"font-family: Arial;\"><span style=\"color: rgb(0, 0, 0);\">XXX\u5c0dXXX\u9020\u6210\u50b7\u5bb3<\/span><\/p><p style=\"font-family: Arial;\"><span style=\"color: rgb(0, 0, 0);\">XXX\u5269\u9918XXX\u9ede\u8840\u91cf<\/span><\/p><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(6958954, document.getElementById('el6958954_10618902442cd8c37334f0662a5cb09f'), {\"id\":6958954,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>    <div class=\"ElBox \" style=\"z-index:10016;border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;border-color:#c8c8c8;border-style:solid;background-color:#ebebeb;background-size:auto;background-repeat:repeat;background-position:center center;color:#000000;font-size:14px;font-weight:normal;font-style:normal;font-family:Arial;text-align:center;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;left:384px;top:81px;position:absolute;width:700px;height:373px;\" id=\"el4164683_57138e7dfcc5a7cc604ff18fd7295d07\" ><\/div>\n    <script type='text\/javascript' data-evaluate='1'>(function() {Preview.mElements.set(4164683, document.getElementById('el4164683_57138e7dfcc5a7cc604ff18fd7295d07'), {\"id\":4164683,\"interactive\":false,\"in_group\":false,\"in_component\":false,\"id_component\":false,\"anchor_x\":0,\"anchor_y\":0}, {\"angle\":0})})();<\/script>\n<script type=\"text\/javascript\" data-evaluate=\"1\">\nInteractions.ori_styles = {\"7096176\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":36,\"left\":40},\"1133428\":{\"opacity\":null,\"width\":300,\"height\":24,\"top\":93,\"left\":210},\"2789851\":{\"opacity\":null,\"width\":300,\"height\":24,\"top\":45,\"left\":210},\"3141294\":{\"opacity\":null,\"width\":300,\"height\":24,\"top\":200,\"left\":35},\"7331197\":{\"opacity\":null,\"width\":300,\"height\":24,\"top\":69,\"left\":210},\"1143777\":{\"opacity\":null,\"width\":300,\"height\":24,\"top\":299,\"left\":210},\"3545772\":{\"opacity\":null,\"width\":300,\"height\":24,\"top\":454,\"left\":35},\"4116058\":{\"opacity\":null,\"width\":150,\"height\":150,\"top\":290,\"left\":40},\"5097503\":{\"opacity\":null,\"width\":300,\"height\":24,\"top\":347,\"left\":210},\"7411822\":{\"opacity\":null,\"width\":300,\"height\":24,\"top\":323,\"left\":210},\"5051042\":{\"opacity\":null,\"width\":120,\"height\":30,\"top\":480,\"left\":610},\"590549\":{\"opacity\":null,\"width\":120,\"height\":30,\"top\":480,\"left\":769},\"6670391\":{\"opacity\":null,\"width\":120,\"height\":30,\"top\":480,\"left\":930},\"3744076\":{\"opacity\":null,\"width\":120,\"height\":30,\"top\":478,\"left\":440},\"5675731\":{\"opacity\":null,\"width\":229,\"height\":64,\"top\":5,\"left\":620},\"6958954\":{\"opacity\":null,\"width\":300,\"height\":43,\"top\":246,\"left\":400},\"4164683\":{\"opacity\":null,\"width\":700,\"height\":373,\"top\":81,\"left\":384}};\nInteractions.scrollable_el = document.getElementById('canvas-wrapper');\nInteractions.timeouts = [];\nInteractions.scrolls = [];\nvar load_events = [];\n\n\nInteractions.attachScrollEvent();\nInteractions.onContentLoaded(load_events);\n<\/script>\n"},"is_shot_mode":false,"version_data":[],"comment_id":0,"preview_url":"https:\/\/live.uxpin.com\/15dec858e079c06a1e2a6f74d84f61bd98bb9b72#\/pages\/23663244"}

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
<html><body> 
<embed src="音效/戰鬥.mp3" autostart="true" loop="true" hidden="true"></embed> 
</body></html>

<script>
    window.addEventListener("load",callbloon1,false);
    window.addEventListener("load",callbloon2,false);
    window.addEventListener("load",out,false);
    window.addEventListener("load",usetool,false);
</script>
  </body>
</html>