<!DOCTYPE html>
<html>
  <?php include_once("templates/information.php")?>  
  <link href="css/public1.css" rel="stylesheet"/>
  <link href="css/home.css" rel="stylesheet"/>
  <!-- G2 script -->
  <script src="js/G2.js"></script>  
    
  <body>
    <!-- navbar -->
    <?php include("/templates/navbar.php") ?> 
    <!-- contain -->
    <div class="row">
        <!-- sidebar and modal -->
        <?php include("/templates/sidebar.php")?>
        
        <div class="modal fade modal-inverse" id="mymodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">导航菜单</h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                          <li><button class="btn btn-success">主页
                          </button></li>
                          <li><button class="btn btn-primary">成绩</button></li>
                          <li><button class="btn btn-info">习惯</button></li>
                          <li><button class="btn btn-warning">电控</button></li>
                          <li><button class="btn btn-danger">门禁</button></li>
          
                          
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="navExitBtn" class="btn btn-primary" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div id="content"  class="col-md-9">
           <div class="row">
           <button class="dateBtn btn btn-primary"><?php echo "2016-09-09" ?></button>
           <p class="showPaneTitle" ><img src="img/home.png" />主页</p>
           <div class="my-hr"></div>
           </div> 
           <!--chart-->
           <div id="c1"><div id="c2"></div></div>
        </div>    
    </div><!-- contain end -->
    
    <hr id="footerHr">
    <!-- footer -->
    <?php include("templates/footer.php")?>
    
    <!-- js documents -->
    <script src="js/templates.js"></script>
    <script src="js/home.js"></script>
    <script src="js/c2.js"></script>
  
  </body>
</html>