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
  <div class="panel panel-dashboard">
    <h2 class="panel-heading">Ippudo Subang</h2>
    <!-- row 1 -->
    <div class="row">
      <div class="col-sm-5 border-right">
        <h5 class="text-center"><span class="text-primary">Devices seen</span> in Current Hour</h5>
        <br/>
        <div id="chart1">
          <img src="assets/images/dummy-images/retail-analytics-engagement-chart1.jpg" class="img-responsive">
        </div>
      </div>

      <div class="col-sm-4 border-right">
        <h5 class="text-center">Total Devices Seen</h5>
        <br/>
        <div id="chart2" style="margin:0 auto; width: 66%;">
          <div class="progress">
            <div class="progress-bar progress-bar-primary" style="width: 60%"></div>
            <div class="progress-bar progress-bar-info" style="width: 40%"></div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-sm-6 text-primary"><span class="text-xlarge">5100</span> <br/><small>in Current Hour</small></div>
          <div class="col-sm-6 text-info"><span class="text-xlarge">3545</span> <br/><small>in Previous Hour</small></div>
        </div>
      </div>

      <div class="col-sm-3">
        <h5 class="text-center">Hourly Average</h5>
        <br/>
        <div class="text-center"><span class="hourly-average-box text-xxlarge">12</span></div>
      </div>
    </div><!-- /.row 1-->

    <br/>

    <!-- row 2 -->
    <div class="row">
      <div class="col-sm-2 devices-seen-chart-title">
        <p class="">Devices seen for past <span class="text-large text-primary"><b>24</b> hours</span></p>
      </div>

      <div class="col-sm-10">
        <br/>
        <div id="chart1">
          <img src="assets/images/dummy-images/retail-analytics-engagement-chart1.jpg" class="img-responsive">
        </div>
      </div>
    </div><!-- /.row 2 -->

    <!-- row 3 -->
    <div class="row">
      <div class="retail-live-stats border-left border-right">
        <div class="main-text">126</div>
        <div class="sub-text retail-walkbys">
          <p><span class="text-primary">Walk-bys</span><br/> in Current Hour </p>
        </div>
      </div>
      <div class="retail-live-stats border-right">
        <div class="main-text">31</div>
        <div class="sub-text retail-shoppers">
          <p><span class="text-primary">Shoppers</span><br/> in Current Hour </p>
        </div>
      </div>
      <div class="retail-live-stats border-right">
        <div class="main-text">10</div>
        <div class="sub-text retail-newshoppers">
          <p><span class="text-primary">New Shoppers</span><br/> in Current Hour </p>
        </div>
      </div>
      <div class="retail-live-stats border-right">
        <div class="main-text">5</div>
        <div class="sub-text retail-repeatshoppers">
          <p><span class="text-primary">Repeat Shoppers</span><br/> in Current Hour</p>
        </div>
      </div>
      <div class="retail-live-stats border-right">
        <div class="main-text">12<small>min</small></div>
        <div class="sub-text retail-avgshoptime">
          <p> <span class="text-primary">Avg. Shop Time</span><br/> in Current Hour</p>
        </div>
      </div>
    </div><!-- /.row 3 -->

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
        <button type="button" class="btn btn-default">Select All</button>
        <button type="button" class="btn btn-default">Clear All</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>