<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <?php 
       Yii::app()->assetBundle->register('backend.views.BackendAsset');
     ?>
    <link rel="icon" href="favicon.ico" />
    <link rel="stylesheet" href="assets/css/eyas.min.css" />
    <link rel="stylesheet" href="assets/css/theme-blue.min.css" />
    <script type="text/javascript" src="script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="script/jquery.eyas.navigat.js"></script>
	<title></title>
</head>
<body>

<div class="header">
   <div class="logo-header"><a href=""></a></div>

   <div class="nav-switch toggle" title="展开/收起侧边导航栏">
      <i></i>
      <i></i>
      <i></i>
   </div>

   <div class="avatar">
      <span>administrator</span>
      <p></p>
      <i></i>
      
   </div>
</div>


<div class="wapper-body">
  <div class="body-container nav-active-toggle">
     <div class="wapper-flank">
        <div class="navigat">
         111
        </div><!--navigat-->

        <div class="navigat-active">
        </div><!-- navigat-active -->
        
     </div><!-- wapper-flank -->

    <div class="wapper-content">
       <iframe src="http://www.baidu.com" frameborder="0"></iframe>
    </div>
    </div><!--wapper-content-->
  </div><!--body-container-->
</div><!--wapper-body-->

</body>
</html>