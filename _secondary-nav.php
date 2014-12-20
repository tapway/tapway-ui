<nav class="secondary-nav">      
  <div>
    <div class="btn-group">
      <a class="btn btn-lg btn-default" data-toggle="modal" data-target="#select-stores-modal">
        Select Stores <span class="fa fa-angle-down"></span></a>
    </div>

    <?php if ($page === "marketing-analytics.php"): ?>
    <div class="btn-group">
      <a class="btn btn-lg btn-orange" href="#">
       + Create Campaign</a>
    </div>
    <?php else: ?>
    <div class="btn-group ">
      <a class="btn btn-lg btn-default dropdown-toggle" data-toggle="dropdown">
        Show Metrics <span class="fa fa-angle-down"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>
    <?php endif; ?>

    <div class="btn-group ">
      <a class="btn btn-lg btn-default dropdown-toggle" data-toggle="dropdown">
        Export <span class="fa fa-angle-down"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>

    <?php if ($page === "marketing-analytics.php"): ?>
      <div class="btn-group">
        <a class="btn btn-lg btn-default" href="#">Edit Campaign</a>
      </div><div class="btn-group">
        <a class="btn btn-lg btn-default" href="#">Delete Campaign</a>
      </div>
    <?php endif; ?>





    <div class="btn-group daterange-nav">
      <div id="reportrange" class="pull-right">
        <a class="btn btn-default btn-report"><span></span> <i class="fa fa-angle-down"></i></a>         
      </div>
      <small>Compared to: 1 SEP 2014</small>
    </div> 
  </div>    
</nav>
