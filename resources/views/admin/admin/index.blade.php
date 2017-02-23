@extends('admin.layout.index')
@section('title')
{{ Config::get('app.title') }}
@endsection

@section('content')
	<div class="mws-stat-container clearfix">
                	
                    <!-- Statistic Item -->
                	<a href="#" class="mws-stat">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-date"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">日历</span>
                            <span class="mws-stat-value">{{date('Y年m月d')}}</span>
                        </span>
                    </a>

                	<a href="return false" class="mws-stat">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-heart"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">收藏</span>
                            <span class="mws-stat-value down">17%</span>
                        </span>
                    </a>

                	<a href="/home/infomation/password" class="mws-stat">
                    	<!-- Statistic Icon (edit to change icon) -->
                    	<span class="mws-stat-icon icol32-lock-edit"></span>
                        
                        <!-- Statistic Content -->
                        <span class="mws-stat-content">
                        	<span class="mws-stat-title">密码修改</span>
                            <span class="mws-stat-value">1次</span>
                        </span>
                    </a>
                    
                	
                </div>
        
	<div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">操作系统</label><span class="res-info">WINNT</span>
                    </li>
                    <li>
                        <label class="res-lab">运行环境</label><span class="res-info">Apache/2.2.21 (Win32) PHP/5.6.19</span>
                    </li>
                    <li>
                        <label class="res-lab">PHP运行方式</label><span class="res-info">apache2handler</span>
                    </li>
                    <li>
                        <label class="res-lab">laravel设计-版本</label><span class="res-info">Laravel 5.1</span>
                    </li>
                    <li>
                        <label class="res-lab">上传附件限制</label><span class="res-info">2M</span>
                    </li>
                    <li>
                        <label class="res-lab">北京时间</label><span class="res-info">{{date("Y-m-d H:i:s",time())}}</span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名/IP</label><span class="res-info">localhost [ 127.0.0.1 ]</span>
                    </li>
                    <li>
                        <label class="res-lab">Host</label><span class="res-info">127.0.0.1</span>
                    </li>
                </ul>
            </div>
        </div>
@endsection