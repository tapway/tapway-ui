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
    <br/>
    <!-- row 1 -->
    <div class="row">
      <div class="col-sm-3">
        <div class="retail-stats-header">
          <h3><a href="#"><img src="assets/images/icon-attraction-a.png" height="70" alt=""><br/>Attraction</a></h3>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="retail-stats retail-attraction">
          <div class="title">Total Walk-bys</div>
          <div class="value"><a href="#">3,150</a></div>
          <div class="change">+5%</div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="retail-stats retail-attraction">
          <div class="title">Total Shoppers</div>
          <div class="value">2,245 </div>
          <div class="change">+5%</div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="retail-stats retail-attraction">
          <div class="title">Storefront Conversion</div>
          <div class="value">50%</div>
          <div class="change">+5%</div>
        </div>
      </div>
    </div><!-- /.row 1 -->

    <!-- row 2 -->
    <div class="row">
      <div class="col-sm-3">
        <div class="retail-stats-header">
          <h3><img src="assets/images/icon-engagement-a.png" height="70px" alt=""><br/>Engagement</h3>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="retail-stats retail-engagement">
          <div class="title">Average Shop Time</div>
          <div class="value">25<small>min</small></div>
          <div class="change">+5%</div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="retail-stats retail-engagement">
          <div class="title">Bounce Rate</div>
          <div class="value">23%</div>
          <div class="change">+5%</div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="retail-stats retail-engagement">
          <div class="title">Engagement Rate</div>
          <div class="value">44%</div>
          <div class="change">+5%</div>
        </div>
      </div>
    </div><!-- /.row 2 -->

    <!-- row 3 -->
    <div class="row">
      <div class="col-sm-3">
        <div class="retail-stats-header">
          <h3><img src="assets/images/icon-sales-a.png" height="70" alt=""><br/>Sales</h3>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="retail-stats retail-sales">
          <div class="title">Sales Conversion</div>
          <div class="value">12%</div>
          <div class="change">+5%</div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="retail-stats retail-sales">
          <div class="title">Total Sales</div>
          <div class="value"><small>RM</small>3,350 </div>
          <div class="change">+5%</div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="retail-stats retail-sales">
          <div class="title">Avg. Transaction Value</div>
          <div class="value"><small>RM</small>1,000</div>
          <div class="change">+5%</div>
        </div>
      </div>
    </div><!-- /.row 3 -->

    <!-- row 4 -->
    <div class="row">
      <div class="col-sm-3">
        <div class="retail-stats-header no-bg">
          <h3><img src="assets/images/icon-loyalty-a.png" height="70" alt=""><br/>Loyalty</h3>          
        </div>
      </div>
      <div class="col-sm-3">
        <div class="retail-stats retail-loyalty">
          <div class="title">New Shoppers</div>
          <div class="value">450</div>
          <div class="change">+5%</div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="retail-stats retail-loyalty">
          <div class="title">Repeat Shoppers</div>
          <div class="value">200 </div>
          <div class="change">+5%</div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="retail-stats retail-loyalty">
          <div class="title">Retention Rate</div>
          <div class="value">18%</div>
          <div class="change">+5%</div>
        </div>
      </div>
    </div><!-- /.row 4 -->

    

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