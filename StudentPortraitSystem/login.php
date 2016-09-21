<!DOCTYPE html>
<html lang="zh-CN">
    <?php include_once("templates/information.php")?>     
    <link href="css/login.css" rel="stylesheet">
   <body>
     <!-- nav -->
    
     <!-- contain -->
     <div class="container-fluid">
     <div class="row">
       <div id="loginForm" class="col-xs-offset-3 col-xs-6">
         <div id="loginImg"><img src="img/logo.png"/></div>
         <form role="form" action="home.php">
           <div class="form-group"> 
           <input type="text" name="username" class="form-control input input-lg center-block" autofocus required="true" placeholder="账号" autocomplete="on"/>
           <input type="password" name="password" class="form-control input input-lg center-block" required="true" placeholder="密码"/>     
           <button type="submit" class="form-control btn btn-primary center-block">登录</button>
           </div>
           <div class="checkbox">
           <label>
           <input type="checkbox" name="rememberPassword"><p>记住密码</p>
           </label>
           </div>
           <a class="signUp" href="signup.php">无账号?请先绑定>></a>
         </form>
       </div>
     </div>
     </div>
     <!-- footer -->
     
   </body>
 </html>