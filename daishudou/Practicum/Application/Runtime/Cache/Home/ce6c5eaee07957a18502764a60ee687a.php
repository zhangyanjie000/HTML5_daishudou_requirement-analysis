<?php if (!defined('THINK_PATH')) exit();?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />   
    <title>登陆</title>
    <script src="/zhong_daishudou/daishudou/Practicum/Public/Former/js/mui.min.js"></script>
    <link href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/mui.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/zhong_daishudou/daishudou/Practicum/Public/Former/css/iconfont.css"> 
</head>
<body>
	<!-- 主界面菜单同时移动 -->
	    <!-- 侧滑导航根容器 -->
	    <div class="mui-off-canvas-wrap mui-draggable" >
	        <div class="mui-inner-wrap">
	            <div class="mui-content mui-scroll-wrapper" style="background-color:pink;width: 100%;text-align:center;">
	                <div class="mui-scroll" >            	  
	                     <img style="width: 22%;margin-top:22%;" src="/zhong_daishudou/daishudou/Practicum/Public/Former/images/logo2.png"/>


	                       <form role="form" action="" method="post" enctype="multipart/form-data">	
						    <div class="mui-input-row"  style="background-color:white;width:80%;margin:20% 10% 0 10%;border-radius:1em;">
						        <label  style="font-size:0.9em;color:#eb6c85;">用  户：</label>
						        <input type="text"  placeholder="" name="user_name" class="mui-input-clear" style="border:none;font-size:0.9em;color:#eb6c85;">
						    </div>

						     <div class="mui-input-row"  style="background-color:white;width:80%;margin:2% 10% 0 10%;border-radius:1em;">
						         <label style="font-size:0.9em;color:#eb6c85;">密 码：</label>
						        <input type="password" class="mui-input-password" placeholder="" name="user_pwd" style="font-size:0.9em;color:#eb6c85;">
						    </div>
					
						 <div class="mui-input-row">
                             <button type="submit" value="登录"  class="mui-btn mui-btn-blue" style="border-radius:10em;width:80%; height:2.8em; margin:5%  10% 2% 10%;background-color:#eb6c85;border:none" >登 录</button>
                             <span style="color:#666;font-size:0.8em">还没有账号</span><a style="text-decoration: underline;width: 80%; margin:auto;color:#eb6c85;font-size:0.9em" id="zhuce">快速注册</a>
						 </div>
						 </form>
						 
	                </div>
	            </div>
	        </div>
	    </div>
	<script type="text/javascript" charset="utf-8">
	
	    mui("#input_example input").each(function() {
			if(!this.value || this.value.trim() == "") {
			    var label = this.previousElementSibling;
			    mui.alert(label.innerText + "不允许为空");
			    check = false;
			    return false;
			}
			}); //校验通过，继续执行业务逻辑 
			if(check){
			    mui.alert('验证通过!')
		}

		document.getElementById("zhuce").addEventListener('tap',function(){
			mui.openWindow({
				url:"/zhong_daishudou/daishudou/Practicum/index.php/Home/Index/zhuce.html",
				id:"zhuce.html"
			});
		})
	
    </script>
</body>
</html>