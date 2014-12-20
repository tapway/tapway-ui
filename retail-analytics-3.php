<div class="section-heading">
  <header>
    <h1>Retail Analytics <!-- <small><a href="#">The Red Bean Bag</a>, KL</small> -->
    </h1>  
    <?php include '_primary-nav.php'; ?>
  </header>
  <?php include '_secondary-nav.php'; ?>
</div>
<!-- /.section-heading -->

<!-- .section-body -->
<div class="section-body">
  <div class="panel">

    <nav class="retail-nav">
      <ul class="nav">
        <li class="overview">        
          <a href="/tapway-ui/index.php?p=retail-analytics-1">
            Overview</a>
        </li>
        <li class="attraction">        
          <a href="/tapway-ui/index.php?p=retail-analytics-2">
           Attraction</a>
        </li>
        <li class="divider"></li>
        <li class="engagement active">        
          <a href="/tapway-ui/index.php?p=retail-analytics-3">
           Engagement</a>
        </li>
        <li class="divider"></li>
        <li class="sales">        
          <a href="/tapway-ui/index.php?p=retail-analytics-4">
            Sales</a>
        </li>
        <li class="divider"></li>
        <li class="loyalty">        
          <a href="/tapway-ui/index.php?p=retail-analytics-5">
            Loyalty</a>
        </li>
      </ul>
    </nav>
    
    <!-- row 1 -->
    <div class="row">
      <div class="col-sm-3">
        <br/>
        <div class="retail-stats retail-engagement">
          <div class="title">Total Walk-bys</div>
          <div class="value">3,150</div>
          <div class="change">+5%</div>
        </div>
      </div>
      <div class="col-sm-9">
        <div id="chart1"><img src="assets/images/dummy-images/dummy-chart-03.jpg" alt="" class="img-responsive"></div>
      </div>
    </div><!-- /.row 1 -->

    <!-- row 2 -->
    <div class="row">
      <div class="col-sm-3">
        <br/>
        <div class="retail-stats retail-engagement">
          <div class="title">Total Shoppers</div>
          <div class="value">2,245 </div>
          <div class="change">+5%</div>
        </div>
      </div>
      <div class="col-sm-9">
        <div id="chart2"><img src="assets/images/dummy-images/dummy-chart-03.jpg" alt="" class="img-responsive"></div>
        <div id="chart3"><img src="assets/images/dummy-images/dummy-chart-03.jpg" alt="" class="img-responsive"></div>
      </div>
    </div><!-- /.row 2 -->
    

    

  </div><!-- .panel -->
</div>
<!-- /.section-body -->


<!-- Select Stores Modal -->
<div class="modal fade modal-maroon" id="select-stores-modal" tabindex="-1" role="dialog" aria-labelledby="selectStoresModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="select-stores-modal-label">Stores</h4>
      </div>
      <div class="modal-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-maroon" role="tablist">
          <li class="active"><a href="#select-stores-stores" role="tab" data-toggle="tab">Stores</a></li>
          <li><a href="#select-stores-states" role="tab" data-toggle="tab">States</a></li>
          <li><a href="#select-stores-groups" role="tab" data-toggle="tab">Groups</a></li>
        </ul>
        <br/>
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="select-stores-stores">
            <table class="table table-condensed">
              <tr><td><div class="checkbox"><label><input type="checkbox"> Store</label></div></td></tr>
              <tr><td><div class="checkbox"><label><input type="checkbox"> Store</label></div></td></tr>
              <tr><td><div class="checkbox"><label><input type="checkbox"> Store</label></div></td></tr>
            </table>
          </div>
          <div class="tab-pane" id="select-stores-states">
            <table class="table table-condensed">
              <tr><td><div class="checkbox"><label><input type="checkbox"> State</label></div></td></tr>
              <tr><td><div class="checkbox"><label><input type="checkbox"> State</label></div></td></tr>
              <tr><td><div class="checkbox"><label><input type="checkbox"> State</label></div></td></tr>
            </table>
          </div>
          <div class="tab-pane" id="select-stores-groups">
            <table class="table table-condensed">
              <tr><td><div class="checkbox"><label><input type="checkbox"> Group</label></div></td></tr>
              <tr><td><div class="checkbox"><label><input type="checkbox"> Group</label></div></td></tr>
              <tr><td><div class="checkbox"><label><input type="checkbox"> Group</label></div></td></tr>
            </table>
          </div>
        </div>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default">Select All</button>
        <button type="button" class="btn btn-sm btn-default">Clear All</button>
        <button type="button" class="btn btn-sm btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>