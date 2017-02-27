

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>会员中心 - 找回密码 - 零食网</title>
    <link href="/f/css/base.css" rel="stylesheet" />
    <link href="/f/css/getPwd.style.css" rel="stylesheet" />
    <link href="/f/css/cloud.global.css" rel="stylesheet" />
    <link href="/f/css/cloud.extend.css" rel="stylesheet" />
    <link href="/f/css/cloud.control.css" rel="stylesheet" />
    <link href="/f/css/jquery.thickbox.css" rel="stylesheet" type="text/css" />
    <script src="/f/js/global.js" type="text/javascript"></script>
    <script src="/f/js/head.js" type="text/javascript"></script>
    <script src="/f/js/jquery.thickbox.js" type="text/javascript"></script>
    <script src="/f/js/jquery.form.js" type="text/javascript"></script>
    <script src="/f/js/jquery-1.8.3.min.js" type="text/javascript"></script>

</head>
<body style="background-color: #f2f2f2;">
    <div class="container1">
       <div id="TB_window" style="z-index: 9999; top: 29px; width: 430px; left: 468px; display: block; display:none;">
           <div id="TB_closeAjaxWindow"><span style="float:left">&nbsp; 填写错误</span>
               <a href="#" id="TB_closeWindowButton">关闭</a>
           </div>
           <div id="TB_ajaxContent" style="width: 400px; background-color: rgb(255, 179, 179);">
               <div id="divDialogBox">
                   <p class="box_message" style="color: rgb(192, 19, 3); background-image: url(&quot;/image/box_error.gif&quot;);">手机号不能为空！</p>
                   <p class="box_button"><input value="确定" id="box_btnok" type="button"></p>
               </div>
           </div>
       </div>
        <div class="img">
             <img src="/retrievePass/images/logo-2.png" alt="" />
        </div>
        <div class="main1 shadow">
            <div class="">
                <div class="content w1000 fix">
                    <!--内容导航 begin-->
                    <!--内容导航 end-->
                    <!--主体-->
                    <!--左-->
                    <div class="wrapCon">
                        <div align="center" class="userPhone">
                            <div class="dlTitle">
                                <h3 align="left">
                                    用手机短信</h3>
                            </div>
                            <form id="form1" method="post" action="/home/retrievePass/update">
                            {{ csrf_field() }}
                            <input type="hidden" name="user_mobile" value="{{$arr['user_mobile']}" />
                            <div class="dlContent">
                                <div align="left" class="dlContentC">
                                    <p class="c09">
                                        请输入您在注册时使用手机号码：</p>
                                    <p class="hideMsg">
                                    </p>
                                    <p align="right" class="pSty1">
                                        手机号码：<input type="text" id="txtmobile" name="user_mobile" maxlength="11" class="mobileInput" /></p>
                                    <p align="right" class="pNext">
                                        <a id="btnMobile" class="btn btnMobile" href="javascript:;"><i class="line bgc5"></i><span class="long_red_btn pl15 pr15"
                                            style="cursor: pointer">下一步</span> <i class="line bgc5"></i></a>
                                    </p>
                                    <p class="pSty6">
                                    </p>
                                    <p class="pSty4">
                                        • 请确保您的手机在您的身边，以便及时收取我们的校验码。验证码在<br />
                                        &nbsp;&nbsp;&nbsp;两小时内有效。购酒网给您发送的手机校验码短信提示是免费的。</p>
                                </div>
                            </div>
                            </form>
                        </div>
                        <!--右-->
                        <div class="EmailR">
                            <div align="center" class="Emai">
                                <div class="dlTitle">
                                    <h3 align="left">
                                        用电子邮件</h3>
                                </div>
                                <form id="form2" method="post" action="/login/MailVirification.htm">
                                <div class="dlContent">
                                    <div align="left" class="dlContentC">
                                        <p class="c09">
                                            请输入您在注册时使用的Email地址：</p>
                                        <p class="hideMsg2">
                                        </p>
                                        <p align="center" class="pSty1B pSty2B">
                                            Email地址：
                                            <input type="text" id="txtEmail" name="user_email" style="width: 200px;" class="mobileInput"
                                                maxlength="30" />
                                        </p>
                                        <p align="right" class="pSty1B">
                                            <a id="btnEmail" class="btn btnEmail" href="#"><i class="line bgc5"></i><span class="long_red_btn pl15 pr15"
                                                style="cursor: pointer">下一步</span> <i class="line bgc5"></i></a>
                                        </p>
                                        <p class="pSty6">
                                        </p>
                                        <p class="pSty4">
                                            • 如果该电子邮箱地址不正确，或者您已经忘记注册时填写的邮箱地址，<br>
                                            &nbsp;&nbsp;&nbsp;那我们无法帮您找回密码，建议创建一个新帐户。</p>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--主体-->
                </div>
            </div>
        </div>
        <div class="register">
            <a href="/retrievePass/../login/register.htm"></a>
        </div>
        <div class="foot">
            <div>
                <a href="/retrievePass/../help/show-id-18.htm" title="关于我们">关于我们</a>|<a href="/retrievePass/../help/show-id-18.htm"
                    title="联系我们">联系我们</a>|<a href="../help/show-id-45.htm" title="人才招聘">人才招聘</a>|<a href="../help/show-id-20.htm"
                        title="隐私声明">隐私声明</a>|<a href="../help/show.htm" title="帮助中心">帮助中心</a>|<a href="../help/show-id-19.htm"
                            title="友情链接">友情链接</a>
            </div>
            <div>
                Copyright©2009-2013 gjw.com, All Rights Reserved 北京毛毛虫商城电子商务有限公司 版权所有</div>
        </div>
    </div>
</body>
<script type="text/javascript">
    
    $(function(){
        $('#btnMobile').click(function(){
        var mobile = $("#txtmobile").val();
         if(mobile == ""){
             $('#TB_window').show();
             // return;
         }
     $('#TB_closeWindowButton').click(function(){
         $('#TB_window').hide();
     })
     $('#box_btnok').click(function(){
         $('#TB_window').hide();
     })     
    })
  })
</script>
<script type="text/javascript">
    $("#btnMobile").click(function () {
       var mobile = $("#txtmobile").val();
        if (mobile == "") {
            // alert("error", function () { });
           return;
        }
        if (mobile != "") {
            var patrn = /^1[3-9]\d{9}$/;
            if (!patrn.exec(mobile)) {
                alert("填写错误 , 手机号格式不正确！", "error", function () { });
                return;
            }
        }
        
        $('.btn').eq(0).click(function(){
              $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
             var mobile = $("#txtmobile").val();
             $.post('/home/retrievePass/ajax','user_mobile=13000138888',function(str){
                 alert(str);
             })
              
        })
        //form1提交
        // $('#form1').ajaxSubmit(function (data) {
        //     var json = eval(data)[0];
        //     console.log(json);
        //     if (json.Success == 1) {
        //         alert("发送成功", json.Message, "correct", function () {
        //             window.location.href = "/home/RetrievePassControllrt";
        //         });
        //     }
        //     else {
        //         alert("发送失败", json.Message, "error");

        //     }
        // });
    });

    $("#btnEmail").click(function () {

        var Email = $("#txtEmail").val();

        if (Email == "") {
             alert("填写错误", "邮箱不能为空！", "error", function () { });
            // alert(Email)
            return;
        }
        if (Email != "") {
            var patrn = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
            if (!patrn.exec(Email)) {
                alert("填写错误", "邮箱格式不正确！", "error", function () { });
                return;
            }
        }
        $.post("/ajax/user/FindPassword.htm?act=email_submit", { "txtEmail": $("#txtEmail").val() }, function (data) {
            var json = eval(data)[0];
            if (json.Success != 1) {
                alert("填写错误", "邮箱不存在！", "error", function () { });
                return;
            }
            else {
                alert("发送成功", json.Message, "correct", function () {
                    $("#form2").submit();
                });

            }
        });

    });
</script>
</html>
