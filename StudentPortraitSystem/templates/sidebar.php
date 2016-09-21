
      	<div id="sidebar" class="col-md-3">
		  <?php $username = "刘荔枝";
			  $gpa = "4.0"; ?>
              
          <div id="profile">
              <div id="userName"> 欢迎你! <?php echo "$username" ?>
              <div id="info">GPA:<?php echo "$gpa "; echo $i=($gpa>=3.5 ? '学霸':'学渣');?></div>
              </div>
			  
          </div>
          <ul>
          <li class="sidebar-active"><img src="img/home.png"/>主页</li>
          <li><img src="img/pencil.png" />成绩</li>
          <li><img src="img/clock.png" />习惯</li>
          <li><img src="img/alarm.png" />电控</li>
          <li><img src="img/gate.png" />门禁</li>
          </ul>
        </div>