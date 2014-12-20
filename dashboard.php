<div class="section-heading">
  <header>
    <h1>Dashboard <!-- <small><a href="#">The Red Bean Bag</a>, KL</small> -->
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
    <div class="table-responsive">
      <table class="table tablesorter table-metrics">
        <thead>
          <th>Stores</th>
          <th>Walk-bys</th>
          <th>Shoppers</th>
          <th>Total Sales</th>
          <th>Retention Rate</th>
        </thead>
        <tfoot>
          <tr>
            <td>Cumulative Average</td>
            <td>
              <span class="value">16,367</span>
              <span class="change down">-15,000 (-xx%)</span>
            </td>
            <td>
              <span class="value">15</span>
              <span class="change down">-13 (-xx%)</span>
            </td>
            <td>
              <span class="value">RM 10,000</span>
              <span class="change up">+RM 5,000 (+xx%)</span>
            </td>
            <td>
              <span class="value">20%</span>
              <span class="change down">-14% (-xx%)</span>
            </td>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>
              <span class="store">Ippudo Subang (Long name test)</span><br/>
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
              <span class="value">RM 5,000</span>
              <span class="change up">+RM3,000 (+xx%)</span>
            </td>
            <td class="up">
              <span class="value">30%</span>
              <span class="change up">+4% (+xx%)</span>
            </td>
          </tr>
          <!-- row -->
          <tr>
            <td>
              <span class="store">Ippudo Pavillion</span><br/>
            </td>
            <td class="down">
              <span class="value">0</span>
              <span class="change down">-6 (-xx%)</span>
            </td>
            <td class="down">
              <span class="value">0</span>
              <span class="change down">-0 (-xx%)</span>
            </td>
            <td class="down">
              <span class="value">0</span>
              <span class="change down">-4.3 (-xx%)</span>
            </td>
            <td class="down">
              <span class="value">0</span>
              <span class="change down">-6% (-xx%)</span>
            </td>
          </tr>
          <!-- row -->
          <tr>
            <td>
              <span class="store">Ippudo Gardens</span><br/>
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
              <span class="value">RM 3,000</span>
              <span class="change up">+RM 500 (+xx%)</span>
            </td>
            <td>
              <span class="value">15%</span>
              <span class="change down">-6% (-xx%)</span>
            </td>
          </tr>
          <!-- row -->
          <tr>
            <td>
              <span class="store">Ippudo KLCC</span><br/>
            </td>
            <td>
              <span class="value">3000</span>
              <span class="change down">+500 (+xx%)</span>
            </td>
            <td class="up">
              <span class="value">540</span>
              <span class="change up">+190 (+xx%)</span>
            </td>
            <td class="up">
              <span class="value">RM 7,740</span>
              <span class="change up">+RM 300 (+xx%)</span>
            </td>
            <td>
              <span class="value">12%</span>
              <span class="change down">-10% (-xx%)</span>
            </td>
          </tr>
          <!-- row -->
        </tbody>
      </table>
    </div>
  </div>
  <!-- /row 1 -->                
</div>
<!-- /.section-body -->


<!-- Select Stores Modal -->
<div class="modal fade modal-blue" id="select-stores-modal" tabindex="-1" role="dialog" aria-labelledby="selectStoresModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="select-stores-modal-label">Select Stores</h4>
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