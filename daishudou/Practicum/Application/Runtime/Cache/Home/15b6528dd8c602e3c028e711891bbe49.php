<?php if (!defined('THINK_PATH')) exit();?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>my</title>
    <script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/mui.min.js"></script>
    <link href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/mui.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/iconfont.css"> 
</head>
<body>
	<!-- 主界面菜单同时移动 -->
	    <!-- 侧滑导航根容器 -->
	    <div class="mui-off-canvas-wrap mui-draggable">
	        <!-- 主页面容器 -->
	        <div class="mui-inner-wrap">
	            <!-- 菜单容器 -->
	            <!-- 主页面标题 -->
	            <header class="mui-bar mui-bar-nav">
	            	  <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
	                  <h1 class="mui-title">更改昵称</h1>
	                  <button type="button" class="mui-btn mui-btn-success mui-pull-right">保存</button>
	            </header>
	            
	            <!-- 主页面内容容器 -->

	              <div class="mui-content mui-scroll-wrapper">
	                <div class="mui-scroll">
                        <form class="mui-input-group">
                            <div class="mui-input-row">
                                <label>地址</label>
                                <input type="text" class="mui-input-clear" placeholder="河北省石家庄市裕华区">
                            </div>
                        </form>
	                 </div>
	              </div>
	       	 <div class="mui-off-canvas-backdrop"></div>
	        </div>
	    </div>
	
	<script type="text/javascript" charset="utf-8">
      	mui.init();
    </script>
</body>
</html>