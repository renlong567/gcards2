  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="首页" class="tip-bottom"><i class="icon-home"></i>首页</a><a href="#" class="current">Error</a> </div>
    <h1>Error <?php echo $error['code']; ?></h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Error <?php echo $error['code']; ?></h5>
          </div>
          <div class="widget-content">
            <div class="error_ex">
              <h1><?php echo $error['code']; ?></h1>
              <h3>Opps, You're lost.</h3>
              <h5>We can not find the page you're looking for.</h5>
              <a class="btn btn-warning btn-big"  href="index.php">返回首页</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>