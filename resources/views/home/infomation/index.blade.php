@extends('home.layout.geren')

@section('content')
    <div class="user-info">
    <!--标题 -->
    <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">个人资料</strong> / <small>Personal&nbsp;information</small></div>
    </div>
    <hr>

    <!--头像 -->
    <div class="user-infoPic">

        <div class="filePic" style="width:140px;">
                @if(session('aaa')['userpic'])
                <img alt="" src="/upload/image/{{ session('aaa')['userpic'] }}" class="am-circle am-img-thumbnail">
                @else
                <img alt="" src="/touxiang.jpg" class="am-circle am-img-thumbnail" style="position:relative;left:20px;">
                @endif
            </div>

        <p class="am-form-help">头像</p>

        <div class="info-m">
                <div><b>用户名：<i>{{session('aaa')['phonenum'] or session('aaa')['phonenum']}}</i></b></div>
                <div class="u-level">
                    <span class="rank r2">
                 <s class="vip1"></s><a href="#" class="classes">{{session('aaa')['userqx']}}</a>
                    </span>
                </div>
                <div class="u-safety">
                    <a href="safety.html">
                     账户安全
                    <span class="u-profile"><i width="0" style="width: 60px;" class="bc_ee0000">60分</i></span>
                    </a>
                </div>
            </div>
    </div>

    <!--个人信息 -->
    <div class="info-main" style="margin-left: 100px;">
        <form class="am-form am-form-horizontal" action="/home/infomation/insert" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			
            <div class="am-form-group">
                <label class="am-form-label" for="user-name2"style="text-align: center;">昵称:</label>
                <div class="am-form-content">
                    <input type="text" placeholder="nickname" id="user-name2" name="nickname">

                </div>
            </div>

            <div class="am-form-group">
                <label class="am-form-label" for="user-name"style="text-align: center;">姓名:</label>
                <div class="am-form-content">
                    <input type="text" placeholder="name" id="user-name2" name= "username">

                </div>
            </div>

            <div class="am-form-group">
                <label class="am-form-label"style="text-align: center;">性别:</label>
                <div class="am-form-content sex">
                    <label class="am-radio-inline">
                        <input type="radio" data-am-ucheck="" value="男" name="sex" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 男
                    </label>
                    <label class="am-radio-inline">
                        <input type="radio" data-am-ucheck="" value="女" name="sex" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 女
                    </label>
                    <label class="am-radio-inline">
                        <input type="radio" data-am-ucheck="" value="保密" name="sex" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 保密
                    </label>
                </div>
            </div>

        
            <div class="am-form-group">
                <label class="am-form-label" for="user-phone"style="text-align: center;">生日:</label>
                <div class="am-form-content">
                    <input type="tel" placeholder="例如：1989-10-01"  id="user-phone"
                    name="birthday" value="">

                </div>
            </div>
            <div class="am-form-group">
                <label class="am-form-label" for="user-email"style="text-align: center;">头像:</label>
                <div class="am-form-content">
                    <input type="file" placeholder="点击上传头像" id="user-email" name="userpic" >

                </div>
            </div>
            
           
            <div class="info-btn">
                <div class="am-btn "><input type="image" src="/h/images/submit.png"></div>
            </div>

        </form>
    </div>

</div>
@endsection