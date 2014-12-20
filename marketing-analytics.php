<div class="section-heading">
  <header>
    <h1>Marketing Analytics <br/><small>Store Name</small>
    </h1>  
    <?php include '_primary-nav.php'; ?>
  </header>
  <?php include '_secondary-nav.php'; ?>
</div>
<!-- /.section-heading -->


<!-- .section-body -->
<div class="section-body">
  <!-- row 1 -->
  <div class="panel panel-dashboard">
    <div class="alert alert-yellow"><strong>Lemonade Buy One Free One Deal</strong></div>
    <div class="table-responsive">
      <table class="table tablesorter table-metrics">
        <thead>
          <th>Marketing Campaign</th>
          <th>Walk-bys</th>
          <th>Shoppers</th>
          <th>Dwell Time</th>
          <th>Total Sales</th>
        </thead>
        <tbody>
          <tr>
            <td>
              <span class="store">Lemonade Buy 1 Free 1 Deal</span><br/>
            </td>
            <td class="up">
              <span class="value">7740</span>
              <span class="change down">-132% (-xx%)</span>
            </td>
            <td>
              <span class="value">169</span>
              <span class="change up">+5% (+xx%)</span>
            </td>
            <td>
              <span class="value">55 mins</span>
              <span class="change up">+5 (+xx%)</span>
            </td>
            <td>
              <span class="value">RM 5,000</span>
              <span class="change up">+RM3,000 (+xx%)</span>
            </td>
          </tr>
          <!-- row -->
          <tr>
            <td>
              <span class="store">Lunch Set Promo</span><br/>
            </td>
            <td class="down">
              <span class="value">0</span>
              <span class="change down">-6 (-xx%)</span>
            </td>
            <td class="down">
              <span class="value">0</span>
              <span class="change down">-0 (-xx%)</span>
            </td>
            <td>
              <span class="value">55 mins</span>
              <span class="change up">+5 (+xx%)</span>
            </td>
            <td>
              <span class="value">RM 5,000</span>
              <span class="change up">+RM3,000 (+xx%)</span>
            </td>
          </tr>
          <!-- row -->
          <tr>
            <td>
              <span class="store">Dinner Set Promo</span><br/>
            </td>
            <td>
              <span class="value">3275</span>
              <span class="change down">-380 (-xx%)</span>
            </td>
            <td>
              <span class="value">134</span>
              <span class="change down">-43 (-xx%)</span>
            </td>
            <td>
              <span class="value">55 mins</span>
              <span class="change up">+5 (+xx%)</span>
            </td>
            <td>
              <span class="value">RM 5,000</span>
              <span class="change up">+RM3,000 (+xx%)</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- /row 1 -->                
</div>
<!-- /.section-body -->



<!-- Select Stores Modal -->
<div class="modal fade modal-orange" id="select-stores-modal" tabindex="-1" role="dialog" aria-labelledby="selectStoresModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="select-stores-modal-label">Stores</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">            
            <select class="form-control selectpicker" data-style="btn-default">
              <option>Store #1</option>
              <option>Store #2</option>
              <option>Store #3</option>
              <option>Store #4</option>              
            </select>             
          </div>
        </form>
        <!-- Nav tabs -->
        <!-- <ul class="nav nav-tabs nav-blue" role="tablist">
          <li class="active"><a href="#select-stores-stores" role="tab" data-toggle="tab">Stores</a></li>
          <li><a href="#select-stores-states" role="tab" data-toggle="tab">States</a></li>
          <li><a href="#select-stores-groups" role="tab" data-toggle="tab">Groups</a></li>
        </ul>
        <br/> -->
        <!-- Tab panes -->
        <!-- <div class="tab-content">
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
        </div>  -->      
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default">Select All</button>
        <button type="button" class="btn btn-default">Clear All</button> -->
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>