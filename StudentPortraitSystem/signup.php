<!DOCTYPE html>
<html lang="zh-CN">
   <?php include_once("templates/information.php")?>     
   <link href="css/signup.css" rel="stylesheet">
   <body>
     <!-- nav -->
    
     <!-- contain -->
     <div class="container-fluid">
     <div class="row">
       <div id="loginForm" class="col-xs-offset-3 col-xs-6">
         <div id="loginImg"><img src="img/logo.png"/></div>
         <form role="form" action="login.php">
           <div class="form-group">
           <input type="text" name="username" class="form-control input input-lg center-block" placeholder="厦门大学学号" autocomplete="on"/>
           <input type="password" name="password" class="form-control input input-lg center-block" placeholder="统一认证密码"/>         
           <button type="submit" class="form-control btn btn-primary center-block">绑定</button>
           </div>
           <div class="checkbox">
              <label>
                <input type="checkbox" name="rememberPassword">我已阅读 <a id="ruleToggle" href="#" style="color:white;">注册条款</a>
              </label>
           </div>
         </form>
         <!-- modal --> 
           <div class="modal fade" id="rule">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">注册条款</h4>
                    </div>
                    <div class="modal-body">
                        <p>面对多少时光的匆匆，我们来去无从，已是很久了，不再重复昨日的忧伤，那些走过大半的青春，当一个人闭上眼回想的时候，不觉又有点失落。
　　</p><p>能在青春的更迭处，遇到最想保护一生的那个人，对于我来说，这当然是一种来之不易的恩宠，于是，我感谢一路你的相伴，以及你在我的世界里，给过的温暖</p><p>流连在你的城池里，从不觉得漫长，感光放肆明亮，镜头裁剪风景，当最美的镜头对准你，光圈拉到无限大，再亮的星辰也虚化成了光斑，唯有你的轮廓，依然清晰，而你站在镜头下，仿佛这就是我的全世界。</p><p>我还记得，当时光流转，走过你我的时候，是多么的悠然；也记得，当两颗初心，一起熬煮岁月的时候，是多么的壮丽，却不曾想过，这一切的一切，都只是一场虚幻，犹如海市蜃楼般，来不及回眸，早已经失去了当初。</p><p>时光滴答，那些扬起的风，不知吹落了多少的记忆碎片，我深深地呼吸，努力拼凑着模糊又熟悉的模样，突然忘了，伴随在青春换乘站口音响店里的音乐，忽高忽低，是在为谁等候。</p><p>指针蹁跹而过，所破碎的只是不了了之，就这样，时光把我抛在了你的身后，红了樱桃，绿了芭蕉，摸索着忧伤的步伐，在那些暗黄的落日下，又渴望着新的日出。</p><p>虽然，我知道这只是我一个人的忧伤，也有些明媚的微笑，但那明媚的微笑，又总是被寂寞所感染，不管有多么的不情愿，有多么的不心甘，还是无法逃离生活曾给予我念想你的时分。</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        
       </div>
     </div>
     </div>
     <!-- footer -->
     <script>
         $('#ruleToggle').click(function(){
			 $('#rule').modal('toggle');
		 });
     </script>
   </body>
 </html>