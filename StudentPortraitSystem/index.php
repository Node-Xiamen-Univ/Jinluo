<!DOCTYPE html>
<html lang="en">
  <?php include_once("templates/information.php")?>  
  <link href="css/index.css" rel="stylesheet"/>

<body>
    <!-- nav -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header" style="padding-left: 2vw;">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1";><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#"><img src="img/logo.png" width="20" height="20"/></a>
      </div>
      <!-- Collect the nav right links -->
      <div class="collapse navbar-collapse navbar-left" id="defaultNavbar1">
      <ul class="nav navbar-nav">
      <li class="active" ><a href="#top" data-toggle="collapse" data-target="#defaultNavbar1";>首页<span class="sr-only">(current)</span></a></li>
      <li><a href="#statistics" data-toggle="collapse" data-target="#defaultNavbar1";>统计</a></li>
      <li><a href="#dig" data-toggle="collapse" data-target="#defaultNavbar1";>挖掘</a></li>
      <li><a href="#analyse" data-toggle="collapse" data-target="#defaultNavbar1";>分析</a></li>
      <li><a href="#about" data-toggle="collapse" data-target="#defaultNavbar1";>关于</a></li>
      </ul>
      </div>    
    </div>
  </nav>
    
    
    
    <!--  contain -->
  	<div class="container-fluid">
    <!-- top -->
    <div id="top" class="row">
        	
            <div class="showImg col-md-5"><img src="img/student.png" /></div>
            <div id="topProfile" class="col-md-7">
            	<h1 class="text-center">学生画像系统</h1>
            	<p class="text-center" >     基于大数据分析，为学生刻画学习行为画像，以帮助学生改进不合理的学习习惯和产生挂科预警，辅助学生提高自身学习能力。</p>
                <a href="login.php"><button class="btn btn-lg btn-primary center-block">马上试试！</button></a>
            </div>
    </div>
    <!-- statistics -->
     <div id="statistics" class="row">
        	  	
            
            <div id="topProfile" class="col-md-5" style="padding-left:0px;">
            	<h1 class="text-center">数据统计</h1>
            	<p class="text-center" >     基于大数据分析，为学生刻画学习行为画像，以帮助学生改进不合理的学习习惯和产生挂科预警，辅助学生提高自身学习能力。</p>
                <a href="login.php"><button class="btn btn-lg btn-primary center-block">马上试试！</button></a>
            </div>
            <div class="showImg col-md-7"><img src="img/show1.PNG" /></div>
    </div>
    <!--dig -->
    <div id="dig" class="row">
        	  	
            <div class="showImg col-md-5" style="padding-left:0px;"><img src="img/show3.PNG" /></div>
            <div id="topProfile" class="col-md-7">
            	<h1 class="text-center">数据挖掘</h1>
            	<p class="text-center" >     基于大数据分析，为学生刻画学习行为画像，以帮助学生改进不合理的学习习惯和产生挂科预警，辅助学生提高自身学习能力。</p>
                <a href="login.php"><button class="btn btn-lg btn-primary center-block">马上试试！</button></a>
            </div>
    </div>
    <!-- analyse -->
    <div id="analyse" class="row">
      <div id="analyseTitle" class="col-md-12"><h1>数据分析模块</h1></div>
      <div class="analyseContent col-md-offset-1 col-md-3"><img src="img/data1.png"/><p>分析1</p><p>数据呈下降形式，很可能出现....</p></div>      
      <div class="analyseContent col-md-offset-1 col-md-3"><img src="img/data2.png"/><p>分析2</p><p>数据呈上升形式，很可能出现....</p></div>
      <div class="analyseContent col-md-offset-1 col-md-3"><img src="img/data3.png"/><p>分析3</p><p>数据呈..形式，很可能出现....</p></div>
    </div>
    
    <!-- about -->
    <div id="about" class="row">
          <form id="feedback" role="form" class="col-md-7">
            <div class="form-group">
              <label for="inputFeedback">意见反馈</label>
              <textarea type="text" class="input-lg  form-control" id="inputFeedback" placeholder=""></textarea>
            </div>
            <div class="form-group">
              
              <input type="email" class="form-control" id="inputEmail" placeholder="输入你的邮箱">
              <button type="submit" class="btn btn-primary" id="submitBtn">提交</button>
            </div>
          </form>
          <div id="aboutUs" class="col-md-4">
            <h1><img src="img/nodeLogo.png" class="linkLogo" id="nodeLogo"/> 关于我们</h1>
            <a href="https://github.com/orgs/Node-Xiamen-Univ"> Github.com: Node-Xiamen-Univ</a>
            <h1><img src="img/circle.png" class="linkLogo" id="nodeLogo"/> 友情链接</h1>
            <p><a href="http://v4-alpha.getbootstrap.com/">v4-alpha.getbootstrap.com</a></p>
            <p><a href="http://www.w3school.com.cn/">www.w3school.com.cn</a></p>
          </div>
      </div>  
    </div><!-- contain end -->
    
    <hr id="footerHr">
    <!-- footer -->
    <?php include("templates/footer.php")?>

</body>
</html>
