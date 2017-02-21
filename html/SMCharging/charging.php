<?php
 require_once "../../php/jssdk.php";
 $jssdk = new JSSDK("wxbf0346df51c10983","ca9d609ac4341007bda1d5d59866cdb5");
 $signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=8">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-control" content="no-cache">
        <meta http-equiv="Cache" content="no-cache">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
		<title>正在充电</title>
        <link rel="icon" href="../../../img/logo.png" type="image/x-icon"/>
        <link href="jvhua/circle.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="../../JS/jquery-3.0.0.js" ></script>
        <script type="text/javascript" src="../../JS/jquery-3.0.0.min.js" ></script>
        <script type="text/javascript" src="../../JS/radialIndicator.js" ></script>
     
        <script type="text/javascript" src="../../JS/cookie.js" ></script>
		<style type="text/css">
			body{
                position:relative;
                background-color: rgb(245,245,245);
                margin:0px;
                padding:0px;
            }
			#top{
                
				margin: 20px auto 0px;
				width: 200px;
				height: 150px; 
                
			}
			 .rad-prg{
                text-align:center;
                position: relative;
            }
            .rad-con{
                
                position: absolute;
                z-index: 1;
                top:0px;
                left: 15%;
                text-align: center;
                width:150px;
                height: 120px;
                padding: 10px;
                font-family: "microsoft yahei";
            }
            .rad-con p{
                text-align:center;
                position:absolute;
                top:35%;
                left:25%;
            }
            #top #label div{
				/*background-color:red ;*/
				text-align: center;
				position: absolute;
				width: 90%;
				bottom: 10px;
				left: 5%;
			}
			span{
				 font-size: 15px;
				 color: black;
				 font: '微软雅黑'; 
			}
			
			#mid{
                width: 100%;
				
				background-color:rgb(254,254,254) ;
				text-align: center;
				padding:10px 0px;
                border: 1px solid lightgray;
                margin-bottom:80px;
               
			}
		
            .l{
			display: inline-block;
			width: 100px;
			float: left;
		
			line-height: 25px;
			
			
		}
		.m,.r,.rc{
			display: inline-block;
			width: 18%;
			float: left;
			
		}
		.m,.r,.rc div{
			
			line-height: 25px;
		}
            
            
            
            
            
            
            
            .mid_top_left{
            	display:block;
                overflow:hidden;
               
                margin-left:30px;
            }
            
            .ch{
              
                width:100px;
            	text-align:left;
                margin:5px 0;
                line-height:20px;
             
            
            }
            .mid_top_right{
              
              
                overflow:hidden;
            	
                
            }
           .mid_mid{

               text-align:left;
            }
            .chh{
            	
                padding:3px 10px 3px 0px;
                text-align:left;
            }
             .chhs{
            	
                width:30%;
                line-height:20px;
                text-align:center;
               
                 padding-left:30px;
            }
            .chhA{
            	padding:0px 10px 0px 0px;
                text-align:left;
            
            }
			#bot{
                
				width:100%;
                text-align:center;
                position:fixed; 
                bottom:20px;
				
			}
			#stop{
				
				width: 65%;
				height: 40px;
				border-radius: 5px;
				background-color:lightgreen;
                color:white;
                font-size:15px;
			}
			#refresh{
			
				width: 25%;
				height: 40px;
				border-radius: 5px;
				background-color:rgb(106,142,244) ;
				margin-left:2% ;
                color:white;
                font-size:15px
			}
            .disabled {
                pointer-events: none;
                cursor: default;
                opacity: 0.6;
		    }
            .hidden{
                
            	display:none;
            }
            
            #mask{
            	position:absolute;
                
                left:0px;
                top:-20px;
                width:100%;
                height:600px;
                
                background-color:rgba(80,80,80,0.3);
            }
		</style>
	</head>
	<body>
        <div class="hidden" id="mask">
            <div class="m-load2">
                <div class="line">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="circlebg"></div>
            </div>
        </div>
		<div id="top">
			<div class="prg-cont rad-prg" id="indicatorContainer">
               <div class="rad-con">
                 <p id = "msg">开始充电</p>
               </div>
		    </div>
        </div>
		<div id="mid">
			<div style="overflow: hidden;">
              <div class="mid_top_right" style="margin:0px 30px; text-align:left;" id="cpid">充电桩编号：1234567899654123</div>
                <div class="mid_top_left" style=" text-align:left;">
                  
                   <span class="ch" >充电计时(分)：</span>
                    <span class="ch" id="time">0.00</span>
                  
                </div>
            
                <div class="mid_top_left" style=" text-align:left;">
                  
                    <span class="ch" >计费金额(元)：</span>
                    <span class="ch" id="fee">0.00</span>
                    
                </div>
                <div class="mid_top_left" style=" text-align:left;">
                  
                    <span class="ch" >已充电量(度)：</span>
                   
                    <span class="ch" id="quantity">0.00</span>   
                </div>
            
            </div>
          
            
          <div style="overflow:hidden">
              
              	<div class="l mid_top_left">
			<div id="" style="visibility: hidden;">
				电压(伏)：</div><div id="" class="">电压(伏)：</div>
			<div id="">电流(安)：</div>
		    </div>
		<div class="m">
			<div id="">
				A相</div>
			<div id="V">0.00</div>
			<div id="A">0.00</div>
		</div>
		<div class="r">
			<div id="">B相</div>
			<div id="V1">0.00</div>
			<div id="A1">0.00</div>
		</div>
		<div class="rc">
			<div id="">C相</div>
			<div id="V2">0.00</div>
			<div id="A2">0.00</div>
		</div>
              
          </div>
            
   
               <div class="mid_top_left" style=" text-align:left;">
                   <span class="mid_top_right">当前时间：</span>
                   <span class="mid_top_right" id="date">--.--.-- --:--</span>
               </div>
			
		</div>
		<div id="bot">
			<button id="stop" onclick="stopCount()">开始充电</button>
			<button id="refresh" class="disabled" onclick="refreshCount()">刷新</button>
		</div>
	</body>
	<script type="text/javascript">
//全局变量
         var Ajaxs;
         var payMode = 0;
        // var cpid = "070100400200101200";
   		//var openId = "o0CsBw_0oxuji1dmw8aACKJz4kiY";
         var openId;
         var cpid = 0000;
    	 var money = 0; 
         var c = 0.01;
       	 var t;
         var timer_is_on = 0;//定时器关闭
    	 //var urlM = "http://116.236.237.244:8080/Shanxi_tank/";
         var urlM = "http://139.129.194.195:8080/Shanxi_tank/";
         var h = 0, min = 0 , s = 1;
         var chargeState;
         var out_trade_no;//商户订单号
         var serialNo;//流水号
                  
//动画初始值 
      $('#indicatorContainer').radialIndicator({
                barColor: '#007aff',
                barWidth: 5,
                initValue: 0,
                roundCorner : false,
                percentage: true,
                displayNumber: false,
                radius: 70
       });
            
//获取跳转传参
   
    function GetRequest() {
            
            //alert("hello world");
       var url = location.search;   
       var theRequest = new Object();  
       if (url.indexOf("?") != -1) {  
            var str = url.substr(1);  
            console.log("111111111"+str); 
             
            var strs= new Array();     
            strs = str.split('&');  
            cpid=strs[0].substring(5).trim();
           
           //alert("充电桩编号=="+cpid);
           document.getElementById("cpid").innerHTML = "充电桩编号："+cpid;
 
          
            openId = strs[1].substring(7).trim();
            console.log(openId);
           
            chargeState=strs[2].substring(12).trim();
            console.log(chargeState);
                     
            payMode = strs[3].substring(8).trim();
            console.log(payMode);
            
            money = strs[4].substring(6).trim();
           
            console.log(money);
           
            out_trade_no=strs[5].substring(11).trim();
           
           if(money ==0 || out_trade_no == 0 || cpid.length < 18){
           	
               chargeState = 1;
           }
           
           
           
            console.log(out_trade_no);
           
            //alert("商户号"+out_trade_no +"chargeState="+chargeState+"money="+money);
           
      	}  
	 }  
        GetRequest();  
        
        //检查cookie中的值    
    var charge = getCookieValue('cook');
        
	if(charge){//检查充电是否完成
		
         alert("点击左上角退出按钮返回");
		// location.href='../SMCharging/scanCode.php';
	}else{
    
    	 isChargeState();//判断当前的状态
    
    }
        
     
      
   // isChargeState();//判断当前的状态
        
    function isChargeState(){
        
       
    	if(chargeState == 1 ){//非空闲状态
            
        	//alert("已经是充电状态");
        	 timer_is_on = 1;  
            
       		 startCount();
            
        }else{
            //alert("非充电状态");
            //alert("setMode"+chargeState);
        		setMode();//设置充电方式
        }
		
    }
        
        //设置充电方式
        function setMode(){
       
          ajax = $.ajax({
            
				type: "GET", // 请求方式
				url: urlM+"scanCharge/setChargeMode", // 请求地址
				dataType:'json',  //jsonp:'callback', 
				data:{
                    
                    deviceId:cpid,
                    userId:openId,
                    payMode:3,
                    payValue:money,
                    platform:1,
                    out_trade_no:out_trade_no
					
				},
				success: function(data) { //data就是返回的json数据
                    
                    //alert("设置充电方式请求成功");alert("json="+JSON.stringify(data));
					console.log("json="+JSON.stringify(data));
                    
					if(data.returnCode == 0) {                    
                        
                         chargeState = 1;//开始充电
                         //stopCharge();
                        
					}else if(data.returnCode == 1){
                        $("#mask").addClass("hidden");
                        $("#bot").removeClass("disabled");
                        alert("桩没有返回数据，操作超时,重新试试！！");
                          
                    }else if(data.returnCode = 13){
                        
                         $("#bot").removeClass("disabled");
               		     $("#mask").addClass("hidden");
                         alert("充电桩通信故障,请退出公众号，稍后再试"); 
                        
                        
                        
                    }else {
                          $("#mask").addClass("hidden");
                         $("#bot").removeClass("disabled");
						
					}
				},
				error: function(jqXHR) {
                    
                     $("#mask").addClass("hidden");
                     $("#bot").removeClass("disabled");
                    alert("请求错误：json="+JSON.stringify(data));
        		},
        
           	});
        
        
          }   
        
      
        //启动动画函数
       function sCharging(val){
           //alert("donghua");
             var radObj = $('#indicatorContainer').data('radialIndicator');
             radObj.animate(100);  
       }
       
       //计时器算法
       var myDate = new Date();
       var begin_time = myDate.getTime();     //获取当前秒数(0-59)
       
        
       //调用刷新数据 
       function timedCount() {
           
          if(timer_is_on == 1 && chargeState == 1){
              
            //alert("调用getdata方法");
              
           getdata();//请求刷新数据
           t = setTimeout(function(){ timedCount() }, 10000);
              
          }
        }
          //开始定时器     
        function startCount() {
                    
                 if (timer_is_on == 1) {//定时器关闭
						
                       //alert("启动动画");
                       timedCount();
                       sCharging(100);//启动动画
                 }
                    
           }
                
        //点击左边按钮的方法
		function stopCount() {
            
            
           // alert('timer_is_on='+timer_is_on);
            
			if(timer_is_on == 0){//判断：定时器关闭状态，则开始充电
            	
                $("#mask").removeClass("hidden");
                $("#bot").addClass("disabled");
               	
                
                startCharge();//开始充电

            
            }else{//结束充电
             
                x = confirm( "是否确定结束充电?");

                if(x == true){
                    $("#mask").removeClass("hidden");
                    $("#bot").addClass("disabled");
                     //alert("结束充电请求")
                     stopCharge();//发送停止充电的命令

                }else{

                    //alert("hah");
                    //sCharging();
                }
          
		 }
    
       }    
            
       //停止充电
        
        //openId = "o0CsBw5hl9bjCI7ucmU49GaV40KY";
        //openId = "0CsBw_0oxuji1dmw8aACKJz4kiY"; 
        //cpid = "070100400200101200";
        //stopCharge();
       function stopCharge(){
            
           
           //alert("停止充电openid="+openId);
           
             var ajaxs = $.ajax({
            
				type: "GET", // 请求方式
				url: urlM+"scanCharge/stopCharge", // 请求地址
				dataType:'json',  //jsonp:'callback', 
				data:{            
                    userId:openId,
                    platform:1
				},
				success: function(data) { //data就是返回的json数据
                    
					//alert("结束充电请求成功")
                    //$("#mask").addClass("hidden");
                    //alert("json="+JSON.stringify(data));
					console.log("json="+JSON.stringify(data));
                    
					if(data.returnCode == 0) {
						   
                          $("#refresh").addClass("disabled");
                          $("#bot").removeClass("disabled");
       			          //alert("正常");
                          clearTimeout(t);
		    			  timer_is_on = 0;
                          chargeState = 0;
            			 
            			  document.getElementById("stop").innerHTML = "开始充电";
                          document.getElementById("msg").innerHTML = "开始充电";
                          
                         
                          //Ajaxs.abort();	
                         
                        
                         getSerialNo();
                        
                         var radObj = $('#indicatorContainer').data('radialIndicator');
                         radObj.animate(0);
                      
					}else if(data.returnCode == 1){
                        
                          $("#mask").addClass("hidden");
                          $("#bot").removeClass("disabled");
                          alert("停止错误"); 
                        
                    }else {
                        
                        $("#mask").addClass("hidden");
                        $("#bot").removeClass("disabled");
						 alert("充电桩停止失败"); 
					}
				},
				error: function(jqXHR) {
                    
                    alert("发生错误json="+JSON.stringify(jqXHR));
                    $("#mask").addClass("hidden");
                    $("#bot").removeClass("disabled");
       		    },
       		});	
        
         }
        
        
    
        
            
          //获取流水号
          function getSerialNo(){
            
            	var ajax = $.ajax({
                
                	type: "GET", // 请求方式
                    url: urlM+"scanCharge/getSerialNo", // 请求地址
                    dataType:'json', 
                    data:{            
                        userId:openId,
                        platform:1
                        
                    },
                    success: function(data) { //data就是返回的json数据

                        //alert("json="+JSON.stringify(data));
                      

                        if(data.returnCode == 0) {
									
                            //alert("流水号读取成功"+data.serialNo);
                            
                            serialNo = data.serialNo;
                            $("#mask").addClass("hidden");

                             $("#refresh").addClass("disabled");
                             $("#bot").removeClass("disabled");
                            location.href = "../SMCharging/finishCharge.php?serialNo="+serialNo+"&userId="+openId;
                            

                        }else if(data.returnCode == 1){

                              alert(data.message);
                            
                             $("#mask").addClass("hidden");
                             $("#bot").removeClass("disabled");

                        }else {
                             
                             $("#mask").addClass("hidden");
                             $("#bot").removeClass("disabled");
                            alert("流水号错误");
                            //启动动画
                            sCharging();
                            
                             
                        }
                    },
                    error: function(jqXHR) {
						 $("#mask").addClass("hidden");
                         $("#bot").removeClass("disabled");
                        alert("流水号发生错误0000json="+JSON.stringify(jqXHR));
                        
                    },
                    
                });
            
            }
        
        
        
      
            
        //点击右边按钮刷新
		function refreshCount(){
            //alert("开始刷新" + cpid); 
            //请求数据
            chargeState = 1;
            getdata();  	
		}
        
       
       //开始充电 
        function startCharge(){
        //alert("开始充电");
        ajax = $.ajax({
            
				type: "GET", // 请求方式
				url: urlM+"scanCharge/startCharge", // 请求地址
				dataType:'json',  //jsonp:'callback', 
				data:{
                    
                    userId:openId,
                    platform:1
                    
				},
				success: function(data) { //data就是返回的json数据
                    
                   
					//alert("请求成功")
                     $("#mask").addClass("hidden"); 
                    //alert("json="+JSON.stringify(data));
					console.log("json="+JSON.stringify(data));
                    
					if(data.returnCode == 0) {
						 timer_is_on = 1;
                         chargeState = 1;
                       
                          $("#refresh").removeClass("disabled");
                          $("#bot").removeClass("disabled");  
           				  document.getElementById("stop").innerHTML = "结束充电";
                        	
       			         startCount();//开始充电计时
                        
						
					}else if(data.returnCode == 1){

                          alert("充电桩启动失败");
                          $("#refresh").addClass("disabled");
                          $("#mask").addClass("hidden"); 
                          $("#bot").removeClass("disabled");
                        
                    }else {
						
					}
				},
				error: function(jqXHR) {
                    
                    alert("json="+JSON.stringify(jqXHR));
                    $("#mask").addClass("hidden");
                    $("#bot").removeClass("disabled");
                   // stopCharge();
       		    },
       });	
        
        
        }
        
        
        
        
        //网络请求ajax 刷新数据

		function getdata(){// alert("heha");
            
			Ajaxs = $.ajax({
				type: "GET", // 请求方式
				url: urlM+"/scanCharge/getChargeStatus", // 请求地址
				dataType:'json',  //jsonp:'callback', 
				data:{
                    
                    userId:openId,
                    platform:1
                    
				},
				success: function(data) { //data就是返回的json数据
                    
                    //alert("获取数据请求成功")
                   
					 //alert("json="+JSON.stringify(data));
					 console.log("json="+JSON.stringify(data));
                     var detail = data.detail;
                     var chargeInfo = detail.chargeInfo;
                    
					if(data.returnCode == 0) {
                         var chargeData = chargeInfo[0];
                        //var detail = data.
                        //alert("正确");
						$("#mask").addClass("hidden");
                        $("#bot").removeClass("disabled");
                        $("#refresh").removeClass("disabled");
						document.getElementById("V").innerHTML =  chargeData.voltageA;
                        document.getElementById("V1").innerHTML = chargeData.voltageB;
                        document.getElementById("V2").innerHTML = chargeData.voltageC;
                       
                        
                        console.log("电流值======"+chargeData.currentA);
                        
						document.getElementById("A").innerHTML = chargeData.currentA;
                     
                        document.getElementById("A1").innerHTML = chargeData.currentB;
                        document.getElementById("A2").innerHTML = chargeData.currentC;
						document.getElementById("fee").innerHTML = chargeData.fee;
                        document.getElementById("time").innerHTML = chargeData.chargeDuration;
						document.getElementById("quantity").innerHTML = chargeData.quantity;
                        
                        var ts = new Date();
                        var td = ts.getDate();//day
                        var ty = ts.getFullYear();//
                        var tm = ts.getMonth() + 1;
                        var th = ts.getHours();
                        var tmin = ts.getMinutes();
                        var tsd = ts.getSeconds();
                        var dtime = ty+"-"+(tm<10 ? "0" + tm : tm)+"-"+(td<10 ? "0"+ td : td)+"&nbsp"+(th<10 ? "0"+ th : th)+":"+(tmin<10 ? "0" + tmin : tmin)+":"+(tsd<10 ? "0" +tsd : tsd);
				
						document.getElementById("date").innerHTML = dtime;
                       
                        document.getElementById("msg").innerHTML = "正在充电";
                        document.getElementById("stop").innerHTML = "结束充电";
                        
                        
                        if(chargeData.command == "finish"){
                           
                             //alert("桩自动结束充电");
                           	 chargeState = 0;
                             timer_is_on = 0;
                          	//$("#mask").removClass("hidden");
                            $("#bot").removeClass("disabled");
                           
                             document.getElementById("stop").innerHTML = "开始充电";
                             document.getElementById("msg").innerHTML = "开始充电";
                             //alert("跳转退款页面");
                             location.href = "../SMCharging/finishCharge.php?serialNo="+chargeData.serialNo+"&userId="+openId;

                        }
						
					}else if(data.returnCode == 1){
                         $("#mask").addClass("hidden");
                         $("#bot").removeClass("disabled");
                         alert("");  
                           
                             
                    }else if(data.returnCode == 2){
                         $("#mask").addClass("hidden");
                         $("#bot").removeClass("disabled");     
                        alert("参数错误");
                        
                             
                    }else if(data.returnCode = 13){
 						 $("#mask").addClass("hidden");
                         $("#bot").removeClass("disabled");    
                          alert("没有找到充电桩");  
                          stopCount();
                        
                    }else {
                         $("#mask").addClass("hidden");
                         $("#bot").removeClass("disabled");
						alert("充电桩故障");
                        //stopCount();
                        location.href = "../SMCharging/Home.php";
                        
					}
				},
				error: function(jqXHR) {
                    
                    // location.href = "../html/checkBill.html";
                     $("#mask").addClass("hidden");
                     $("#bot").removeClass("disabled");
                     alert("发生错误,服务器异常："+ jqXHR.status);
                         
                     //getdata();
        		},
       		});	
      }

       
          pushHistory();
        function pushHistory() {
          var state = {
              title: "title",
              url: "#"
            };
          window.history.pushState(state, "title", "#");
        }
        if (typeof window.addEventListener != "undefined") {
          window.addEventListener("popstate", function (e) {
            WeixinJSBridge.call('closeWindow');
          }, false);
        } else {
          window.attachEvent("popstate", function (e) {
            WeixinJSBridge.call('closeWindow');
          });
        }
            pushHistory();
            function pushHistory() {
              var state = {
                title: "title",
                url: "#"
              };
              window.history.pushState(state, "title", "#");
            }
            $(function() {
              wx.config({
                 debug: false,
                  appId: '<?php echo $signPackage["appId"];?>',
    			  timestamp: '<?php echo $signPackage["timestamp"];?>',
    			  nonceStr: '<?php echo $signPackage["nonceStr"];?>',
   			      signature: '<?php echo $signPackage["signature"];?>',
                  jsApiList: [// 所有要调用的 API 都要加到这个列表中     
                           "closeWindow",
                       ]
              });
              wx.ready(function() {
                wx.hideOptionMenu();
              });
              if (typeof window.addEventListener != "undefined") {
                window.addEventListener("popstate", function(e) {
                  wx.closeWindow();
                }, false);
              } else {
                window.attachEvent("popstate", function(e) {
                  wx.closeWindow();
                });
              }
            });

        
       
	</script>
	
</html>
