<div class="section-heading">
  <header>
    <h1>Settings
    </h1>  
    <?php include '_primary-nav.php'; ?>
  </header>
  <?php include '_settings-secondary-nav.php'; ?>
</div>
<!-- /.section-heading -->

<!-- .section-body -->
<div class="section-body">
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-settings">
        <div class="panel-heading"><i class="fa fa-list-alt"></i> Your Account</div>
        <div class="panel-body">
          <form class="form-horizontal" role="form">
            <div style="min-height: 350px;">
              <div class="form-group">
                <label for="input-email" class="col-sm-4 control-label text-left">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="input-email" placeholder="Email">
                  <small class="help-block">&nbsp;</small>
                </div>
              </div>
              <div class="form-group">
                <label for="input-username" class="col-sm-4 control-label text-left">Username</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="input-username" placeholder="Username">
                  <small class="help-block">&nbsp;</small>
                </div>
              </div>
              <div class="form-group">
                <label for="input-password" class="col-sm-4 control-label text-left">Current Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="input-password" placeholder="">
                  <small class="help-block">(We need your current password to confirm you changes)</small>
                </div>
              </div>
              <div class="form-group">
                <label for="input-password-new" class="col-sm-4 control-label text-left">New Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="input-password-new" placeholder="">
                  <small class="help-block">(Leave blank if you don't want to change it)</small>
                </div>
              </div>
              <div class="form-group">
                <label for="input-password-confirm" class="col-sm-4 control-label text-left">Password Confirmation</label>
                <div class="col-sm-8"><input type="password" class="form-control" id="input-password-confirm" placeholder=""></div>
              </div>
            </div>
            <div class="text-right"><button type="submit" class="btn btn-green">Update</button></div>
          </form>
        </div>        
      </div>
    </div>

    <div class="col-sm-6">
      <div class="panel panel-settings">
        <div class="panel-heading"><i class="fa fa-building-o"></i> Company</div>
        <div class="panel-body">
          <form class="form-horizontal" role="form">
            <div style="min-height: 350px;">
              <div class="form-group">
                <label for="input-company" class="col-sm-4 control-label text-left">Company Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="input-company" placeholder="Company">
                  <small class="help-block">&nbsp;</small>
                </div>
              </div>
              <div class="form-group">
                <label for="input-password" class="col-sm-4 control-label text-left">Industry</label>
                <div class="col-sm-8">
                  <select class="form-control selectpicker" data-style="btn-default">
                    <option>Fashion Retail</option>
                    <option>Food &amp; Beverage</option>
                    <option>Specialty Retail</option>
                  </select>
                  <small class="help-block">&nbsp;</small>
                </div>
              </div>
              <div class="form-group">
                <label for="input-contact-name" class="col-sm-4 control-label text-left">Contact Person Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="input-contact-name" placeholder="Name">
                  <small class="help-block">&nbsp;</small>
                </div>
              </div>
              <div class="form-group">
                <label for="input-contact-number" class="col-sm-4 control-label text-left">Contact Person Number</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="input-contact-number" placeholder="Number">
                  <small class="help-block">&nbsp;</small>
                </div>
              </div>
            </div>
            <div class="text-right"><button type="submit" class="btn btn-green">Update</button></div>
          </form>
        </div>        
      </div>
    </div>
  </div><!-- /.row -->   

  <div class="panel panel-settings">
    <div class="panel-heading"><i class="fa fa-user"></i> Manage Users</div>
    <div class="panel-body">
      <table class="table">
        <thead>
          <th>Username</th>
          <th>Email</th>
          <th>Action</th>
        </thead>
        <tbody>
          <tr>
            <td>Tapway Admin</td><td>enquiry@tapway.com.my</td>
            <td><a href="#"><i class="fa fa-pencil"></i></a> &nbsp;&nbsp;<a href="#"><i class="fa fa-trash"></i></a></td>
          </tr>
          <tr>
            <td>Chee How Lim</td><td>enquiry@tapway.com.my</td>
            <td><a href="#"><i class="fa fa-pencil"></i></a> &nbsp;&nbsp;<a href="#"><i class="fa fa-trash"></i></a></td>
          </tr>
        </tbody>
      </table>
      <div class="text-right"><a class="btn btn-green" data-toggle="modal" data-target="#new-user-modal" href="#">+ Add User</a></div>
    </div>        
  </div>

  <div class="panel panel-settings">
    <div class="panel-heading"><i class="fa fa-map-marker"></i> Location</div>
    <div class="panel-body">
      <table class="table">
        <thead>
          <th>Location Name</th>
          <th class="hidden-sm hidden-xs">Node</th>
          <th class="hidden-sm hidden-xs">Last Checkin</th>
          <th>Status</th>
          <th>Group</th>
          <th>Action</th>
        </thead>
        <tbody>
          <tr>
            <td>Red Beanbag</td><td class="hidden-sm hidden-xs">ABCDEF123456</td><td class="hidden-sm hidden-xs">19:22, Tue, 26th Aug 2014</td>
            <td><span class="label label-success">Online</span></td>
            <td>
              <select class="form-control selectpicker" data-style="btn-link">
                  <option>Kuala Lumpur</option>
                  <option>Klang Valley</option>
                  <option>Premium Fashion</option>
                  <option data-divider="true"></option>
                  <option class="trig-group-modal" data-content="Add New Group &nbsp;&nbsp; <span class='fa fa-plus-circle text-green'></span>">#</option>
              </select>
              <!-- <div class="btn-group select-replacment">
                <a class="btn btn-select dropdown-toggle" data-toggle="dropdown">
                  <span class="text">Kuala Lumpur</span> <span class="fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li class="option"><a>Kuala Lumpur</a></li>
                  <li class="option"><a>Klang Valley</a></li>
                  <li class="option"><a>Premium Fashion</a></li>
                  <li class="divider"></li>
                  <li><a data-toggle="modal" data-target="#new-group-modal">Add New Group <i class="fa fa-plus"></i></a></li>
                </ul>
              </div> -->
            </td>
            <td><a href="#"><i class="fa fa-pencil"></i></a> &nbsp;&nbsp;<a href="#"><i class="fa fa-trash"></i></a></td>
          </tr>

        </tbody>
      </table>
      <div class="text-right"><a class="btn btn-green" data-toggle="modal" data-target="#new-location-modal" href="#">+ Add Location</a></div>
    </div>        
  </div>

</div>
<!-- /.section-body -->



<!-- New Group Modal -->
<div class="modal fade modal-green" id="new-group-modal" tabindex="-1" role="dialog" aria-labelledby="newGroupModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="new-group-modal-label">New Group</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="input-group" class="col-sm-3 control-label text-left">Group Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="input-group" placeholder="Name">
            </div>
          </div>
        </form>               
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</div>

<!-- New User Modal -->
<div class="modal fade modal-green" id="new-user-modal" tabindex="-1" role="dialog" aria-labelledby="newUserModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="new-user-modal-label">New User</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="input-group" class="col-sm-4 control-label text-left">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="input-group" placeholder="you@email.com">
            </div>
          </div>
          <div class="form-group">
            <label for="input-group" class="col-sm-4 control-label text-left">Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="input-group">
            </div>
          </div>
          <div class="form-group">
            <label for="input-group" class="col-sm-4 control-label text-left">Password Confirmation</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="input-group">
            </div>
          </div>
          <div class="form-group">
            <label for="input-group" class="col-sm-1 control-label text-left">Admin</label>  
            <div class="col-sm-11">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> <small class="text-muted">Tick to make this user admin</small>
                </label>
              </div>
            </div>
          </div>
          
        </form>               
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Create</button>
      </div>
    </div>
  </div>
</div>

<!-- New Location Modal -->
<div class="modal fade modal-green" id="new-location-modal" tabindex="-1" role="dialog" aria-labelledby="newLocationModal" aria-hidden="true">
  <div class="modal-dialog modal-g">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="new-location-modal-label">New/Edit Location</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="input-group" class="col-sm-3 control-label text-left">Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="input-group" placeholder="Location Name">
            </div>
          </div>
          <div class="form-group">
            <label for="input-group" class="col-sm-3 control-label text-left">Phone</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="input-group" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="input-group" class="col-sm-3 control-label text-left">Address</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="input-group" placeholder="">
            </div>
            <label for="input-group" class="col-sm-3 hidden-xs"></label>
            <div class="col-sm-4">
              <label class="control-label text-left">City</label>
              <input type="text" class="form-control" id="input-group" placeholder="">
            </div>
            <div class="col-sm-5">
              <label class="control-label text-left">Country</label>
              <input type="text" class="form-control" id="input-group" placeholder="">
            </div>
          </div>  
          <div class="form-group">
            <label for="input-group" class="col-sm-7 control-label text-left">What are your store's operating days and hours?</label>
            <div class="col-sm-5">
              <div class="checkbox">              
                <label>All days<input id="checkAlldays" type="checkbox"></label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <?php
              $selectHrs = "<option>12:00AM</option><option>1:00AM</option><option>2:00AM</option><option>3:00AM</option><option>4:00AM</option>";
            ?>
            <?php foreach (['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'] as $value): ?>
              <div class="day-wrapper">
                <div class="col-sm-3 col-sm-offset-1">
                  <div class="checkbox"><label><?=$value;?> <input class="day-checkbox" type="checkbox"></label></div>
                </div>
                <div class="day-options">
                  <label class="col-sm-1 control-label">Starts</label>
                  <div class="col-sm-3">
                    <select class="form-control selectpicker" data-style="btn-gray"><?php print $selectHrs; ?></select>
                  </div>
                  <label class="col-sm-1 control-label">Ends</label>
                  <div class="col-sm-3">
                    <select class="form-control selectpicker" data-style="btn-gray"><?php print $selectHrs; ?></select>
                  </div>          
                </div>  
              </div>  
            <?php endforeach; ?>
          </div>  
          <div class="form-group">
            <label for="input-group" class="col-sm-9 control-label text-left">What is the expected no of shoppers per day? 
              <br/><small class="text-muted">to help us calibrate RSSI</small>
            </label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="input-group" placeholder="">
            </div>
          </div>    
          <div class="form-group">
            <label for="input-group" class="col-sm-9 control-label text-left">What is the bare minimum time your shoppers may make a purchase? 
              <br/><small class="text-muted">2 mins by default</small>
            </label>
            <div class="col-sm-3">
              <div class="input-group">
                <input type="text" class="form-control" id="input-group" placeholder="">
                <span class="input-group-addon">mins</span>
              </div>
            </div>
          </div> 
          <div class="form-group">
            <label for="input-group" class="col-sm-9 control-label text-left">What is the amount of time where you consider your shopper is engaged? 
              <br/><small class="text-muted">10 mins by default</small>
            </label>
            <div class="col-sm-3">
              <div class="input-group">
                <input type="text" class="form-control" id="input-group" placeholder="">
                <span class="input-group-addon">mins</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="input-group" class="col-sm-9 control-label text-left">What is the max time you would consider a shopper? 
              <br/><small class="text-muted">3 hours default</small>
            </label>
            <div class="col-sm-3">
              <div class="input-group">
                <input type="text" class="form-control" id="input-group" placeholder="">
                <span class="input-group-addon">hours</span>
              </div>
            </div>
          </div>        
        </form>               
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Create/Update</button>
      </div>
    </div>
  </div>
</div>



<script>
$(function(){
  // Use blockUI plugin to block entire panel, based on toggle checkbox settings
  var blockUIOptions = { 
    message: null, 
    overlayCSS: { cursor: 'not-allowed', backgroundColor: '#fff', opacity: 0.6 }
  };

  function toggleElement(jqTrigger, jqTarget) {
    $(jqTrigger).change(function() {
      if (!$(this).prop('checked')) {
        $(jqTarget).block(blockUIOptions);
      } else {
        $(jqTarget).unblock();
      }
    });
  }

  //On page load, if unticked, block the corresponding day options, and start monitoring for checkbox changes
  var eleBlocked = '[class^=col-sm]'; //actual elements to be blocked by blockUI
  $('.day-wrapper').each(function(){
    var chkBox = $(this).find('.day-checkbox');
    var opts = $(this).find('.day-options');
    if(chkBox.prop('checked', false)) {
      opts.find(eleBlocked).block(blockUIOptions);
    }
    toggleElement( chkBox, opts.find(eleBlocked) );
  });


  //Tick every single day checkbox if 'alldays' checkbox is ticked, and vice versa. Also block/unblock options
  daysCheckboxes = '.day-checkbox';
  $('#checkAlldays').change(function(){
    if($(this).prop('checked')) {
      $(daysCheckboxes).prop('checked', true);
      $('.day-wrapper .day-options '+eleBlocked).unblock();
    } else {
      $(daysCheckboxes).prop('checked', false);
      $('.day-wrapper .day-options '+eleBlocked).block(blockUIOptions);
    }
  })
  //Untick 'alldays' checkbox, even if one day's checkbox is unticked
  $(daysCheckboxes).change(function(){
    if ($(daysCheckboxes).length === $(daysCheckboxes+':checked').length) {
      $('#checkAlldays').prop('checked', true);
    } else {
      $('#checkAlldays').prop('checked', false);
    }
  });  


  //Trigger new group modal
  $('.trig-group-modal').click(function(){
    $('#new-group-modal').modal('show');
  });





});
</script>