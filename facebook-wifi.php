<div class="section-heading">
  <header>
    <h1>Facebook Wifi <br/><small>Store Name</small>
    </h1>  
    <?php include '_primary-nav.php'; ?>
  </header>
  <?php include '_fbwifi-secondary-nav.php'; ?>
</div>
<!-- /.section-heading -->

<!-- .section-body -->
<div class="section-body">
  <div class="panel panel-settings">
    <div class="panel-heading">
      <i class="fa fa-wifi"></i> General Wifi 
      <div class="pull-right"><input id="toggle-general" type="checkbox" checked data-toggle="toggle" data-size="mini" data-onstyle="success" data-offstyle="info"></div>
    </div>
    <div id="body-general" class="panel-body">
      <h5 class="no-margin-bottom text-blue">Redirect URL</h5>
      <div class="row">
        <div class="col-sm-6">          
          <p>Set a URL to redirect customers to after they have successfully connected to your Wifi. Leave this blank to use default Success page.</p>
        </div>
        <div class="col-sm-6">
          <form class="form" role="form">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">http://</div>           
                <input type="url" class="form-control" id="input-url" placeholder="URL">
              </div>                
            </div>
          </form>
        </div>
      </div><!-- /.row -->      
    </div>        
  </div><!-- /.panel -->

  <div class="panel panel-settings">
    <div class="panel-heading">
      <i class="fa fa-lock"></i> Authentication
      <div class="pull-right"><input id="toggle-auth" type="checkbox" checked data-toggle="toggle" data-size="mini" data-onstyle="success" data-offstyle="info"></div>
    </div>
    <div id="body-auth" class="panel-body">
      <p>Enable authentication if you would like to provide customers with various methods to connect (Facebook, e-mail, phone number). Leavin this unchecked will
      allow everyone to connect as a guest.</p>
      <br/>

      <div class="subpanel">
        <div class="subpanel-heading">
          <h5>
            <i class="fa fa-facebook"></i> Connect with Facebook
            <div class="pull-right"><input id="toggle-fb" type="checkbox" checked data-toggle="toggle" data-size="mini" data-onstyle="success" data-offstyle="info"></div>
          </h5>
        </div>
        <div id="body-fb" class="subpanel-body">
          <p>Allow customers to connect to your Wifi by signing into their Facebook account.</p>

          <h5 class="no-margin-bottom text-blue">Facebook Check-in</h5>
          <div class="row">
            <div class="col-sm-6">
              <p>Allowing customers to check-in on Facebook will give customers the option to generate a post with a message and the location of your venue
                if you have one set. If you do no have one set, their post will only show their message.</p>
            </div>
            <div class="col-sm-6">
              <div class="checkbox"><label><input type="checkbox" >Enable Facebook check-in</label></div>
            </div>
          </div>


          <h5 class="no-margin-bottom text-blue">Check-in Message Suggestion</h5>
          <div class="row">
            <div class="col-sm-6">
              <p>Allowing customers to check-in on Facebook will give customers the option to generate a post with a message and the location of your venue
                if you have one set. If you do no have one set, their post will only show their message.</p>
            </div>
            <div class="col-sm-6">
              <div class="form"><input type="text" class="form-control" value="@The Red Beanbag"></div>
            </div>
          </div>

          <h5 class="no-margin-bottom text-blue">Facebook Like</h5>
          <div class="row">
            <div class="col-sm-6">
              <p>Allowing customers to check-in on Facebook will give customers the option to generate a post with a message and the location of your venue
                if you have one set. If you do no have one set, their post will only show their message.</p>
            </div>
            <div class="col-sm-6">
              <div class="checkbox"><label><input type="checkbox" >Enable Facebook Like Button</label></div>
            </div>
          </div>
        </div><!-- ./subpanel-body --> 
      </div><!-- /.subpanel --> 

      <div class="subpanel">
        <div class="subpanel-heading">
          <h5>
            <i class="fa fa-user"></i> Manual Registration
            <div class="pull-right"><input id="toggle-manual" type="checkbox" checked data-toggle="toggle" data-size="mini" data-onstyle="success" data-offstyle="info"></div>
          </h5>
        </div>
        <div id="body-manual" class="subpanel-body">
          <p>Allow customers to connect to your Wifi by entering their names and emails</p>

          <h5 class="no-margin-bottom text-blue">Contact Number</h5>
          <div class="row">
            <div class="col-sm-6">
              <p>Allow customers to enter their contact number.</p>
            </div>
            <div class="col-sm-6">
              <div class="checkbox"><label><input type="checkbox" >Enable Contact Number Box</label></div>
            </div>
          </div>
        </div><!-- ./subpanel-body --> 
      </div><!-- /.subpanel -->
    </div>        
  </div><!-- /.panel -->


  <div class="panel panel-settings">
    <div class="panel-heading"><i class="fa fa-star"></i> Brand </div>
    <div class="panel-body">
      <h5 class="no-margin-bottom text-blue">Logo</h5>
      <div class="row">
        <div class="col-sm-6">          
          <p>Select an image of your logo to display at the top of your splash page. If you do not select one, your venue name will be displayed.
            <small class="help-inline">
              <br/> File size: Maximum 500KB, Recommended 150KB
              <br/> Dimensions: Recommended 400px x 120px
              <br/> Note: your logo will be scaled proportionately to fit the designated area of 200px x 60px</small>
          </p>
        </div>
        <div class="col-sm-6">
          <div class="img-upload">
            <img src="holder.js/160x160/text:Upload image" class="img-thumbnail">
            <div class="btn-group-vertical">
              <a class="btn btn-gray btn-sm"><i class="fa fa-plus"></i></a>
              <a class="btn btn-gray btn-sm"><i class="fa fa-remove"></i></a>
            </div>
            <!-- Dev: use below if you want to use bootstrap-filestyle as the basis for the image upload. The one above just uses normal buttons that you can manipulate yourselves -->
            <!-- <div class="btn-group-vertical">
              <input type="file" class="filestyle" id="file-test-02"
                data-input="false" data-buttonName="btn-gray" data-iconName="glyphicon-plus" data-buttonText="" >
              <a class="btn btn-gray btn-sm clear-file" data-target="#file-test-02"><i class="glyphicon glyphicon-remove"></i></a>
            </div> -->
          </div>           
        </div>
      </div><!-- /.row --> 

      <h5 class="no-margin-bottom text-blue">Accent Color</h5>
      <div class="row">
        <div class="col-sm-6">          
          <p>This color will be used for certain text and elements. <br/>
            Tip: Try setting this to match your company's main brand color.</p>
        </div>
        <div class="col-sm-6">
          <form class="form" role="form">
            <div class="form-group">
              <div id="accent-color" class="input-group">
                <span class="input-group-addon"><i></i></span>
                <input type="text" value="#cccccc" class="form-control"/>
              </div>              
            </div>
          </form>
        </div>
      </div><!-- /.row -->

      <h5 class="no-margin-bottom text-blue">Sample Upload Field</h5>
      <div class="row">
        <div class="col-sm-6">          
          <p>This uses the bootstrap-filestyle plugin for UI. Can be used like normal file upload element.</p>
        </div>
        <div class="col-sm-6">
          <form class="form" role="form">
            <div class="form-group">
              <input type="file" class="filestyle" id="file-test-01"
                data-buttonBefore="true" data-buttonName="btn-gray" data-buttonText=" Browse" data-icon="false"/>   
                <br/>
                <a class="btn btn-gray clear-file" data-target="#file-test-01">Clear file</a>
                <a class="btn btn-blue">Submit</a>           
            </div>
            <div class="form-group">
              
            </div>
          </form>
        </div>
      </div><!-- /.row -->     
    </div>        
  </div><!-- /.panel -->

  <div class="panel panel-settings">
    <div class="panel-heading"><i class="fa fa-photo"></i> Background </div>
    <div class="panel-body">
      <h5 class="no-margin-bottom text-blue">Background Color</h5>
      <div class="row">
        <div class="col-sm-6">          
          <p>The background color of the splash page. This will be displayed underneath a background image if added.</p>
        </div>
        <div class="col-sm-6">
          <form class="form" role="form">
            <div class="form-group">
              <div id="bg-color" class="input-group">
                <span class="input-group-addon"><i></i></span>
                <input type="text" value="#cccccc" class="form-control"/>
              </div>              
            </div>
          </form>
        </div>
      </div><!-- /.row -->

      <h5 class="no-margin-bottom text-blue">Background Image</h5>
      <div class="row">
        <div class="col-sm-6">          
          <p>The background color of the splash page. This will be displayed underneath a background image if added.</p>
        </div>
        <div class="col-sm-6">
          <div class="img-upload">
            <img src="holder.js/160x160/text:Upload image" class="img-thumbnail">
            <div class="btn-group-vertical">
              <a class="btn btn-gray btn-sm"><i class="fa fa-plus"></i></a>
              <a class="btn btn-gray btn-sm"><i class="fa fa-remove"></i></a>
            </div>
            <!-- Dev: use below if you want to use bootstrap-filestyle as the basis for the image upload. The one above just uses normal buttons that you can manipulate yourselves -->
            <!-- <div class="btn-group-vertical">
              <input type="file" class="filestyle" id="file-test-02"
                data-input="false" data-buttonName="btn-gray" data-iconName="glyphicon-plus" data-buttonText="" >
              <a class="btn btn-gray btn-sm clear-file" data-target="#file-test-02"><i class="glyphicon glyphicon-remove"></i></a>
            </div> -->
          </div>   
        </div>
      </div><!-- /.row --> 

      <h5 class="no-margin-bottom text-blue">Background Type</h5>
      <div class="row">
        <div class="col-sm-6">          
          <p>Your background image will be displayed using the image's original dimensions.</p>
        </div>
        <div class="col-sm-6">
          <div class="radio no-margin">
            <label><input type="radio" name="bgType" id="bgType1" value="normal"> Normal</label>
          </div>
        </div>
      </div><!-- /.row -->
      <div class="row">
        <div class="col-sm-6">          
          <p>Your background image will be displayed using the image's original dimensions.</p>
        </div>
        <div class="col-sm-6">
          <div class="radio no-margin">
            <label><input type="radio" name="bgType" id="bgType2" value="cover"> Cover</label>
          </div>
        </div>
      </div><!-- /.row --> 
      <div class="row">
        <div class="col-sm-6">          
          <p>Your background image will be displayed using the image's original dimensions.</p>
        </div>
        <div class="col-sm-6">
          <div class="radio no-margin">
            <label><input type="radio" name="bgType" id="bgType3" value="tile"> Tile</label>
          </div>
        </div>
      </div><!-- /.row -->   

      <h5 class="no-margin-bottom text-blue">Background Position</h5>
      <div class="row">
        <div class="col-sm-6">          
          <p>Select where you would like your background image to be positioned. This will react differently based on your selected
            background type.</p>
        </div>
        <div class="col-sm-6">
          <div class="bg-selector" data-target="#bg-selector-input">
            <div class="selector-box">
              <div rel="top-left"></div>
              <div rel="top-center"></div>
              <div rel="top-right"></div>
              <div rel="middle-left"></div>
              <div rel="middle-center"></div>
              <div rel="middle-right"></div>
              <div rel="bottom-left"></div>
              <div rel="bottom-center"></div>
              <div rel="bottom-right"></div>
            </div>
          </div>
          <div>
            <input id="bg-selector-input" type="text" class="form-control">
            <small class="text-muted">To devs: this input field should probably be hidden</small>
          </div>
        </div>
      </div><!-- /.row -->        
    </div><!-- /.panel-body -->        
  </div><!-- /.panel -->

  <div class="panel panel-settings">
    <div class="panel-heading"><i class="fa fa-pencil"></i> Content</div>
    <div class="panel-body">
      <h5 class="no-margin-bottom text-blue">Title</h5>
      <div class="row">
        <div class="col-sm-6">          
          <p>Will be displayed beneath your logo/company name.</p>
        </div>
        <div class="col-sm-6">
          <div class="form">
            <div class="form-group">
              <input type="text" class="form-control" value="Free Wifi">
            </div>
          </div>
        </div>
      </div><!-- /.row --> 

      <h5 class="no-margin-bottom text-blue">Welcome Headline</h5>
      <div class="row">
        <div class="col-sm-6">          
          <p>Welcome your customers with a nice title.</p>
        </div>
        <div class="col-sm-6">
          <div class="form">
            <div class="form-group">
              <input type="text" class="form-control" value="Welcome to our Wifi Hotspot">
            </div>
          </div>
        </div>
      </div><!-- /.row --> 

      <h5 class="no-margin-bottom text-blue">Welcome Message</h5>
      <div class="row">
        <div class="col-sm-6">          
          <p>Welcome your customers with a nice message.</p>
        </div>
        <div class="col-sm-6">
          <div class="form">
            <div class="form-group">
              <textarea id="editor1" class="wysiwyg-editor form-control"></textarea>
            </div>
          </div>
        </div>
      </div><!-- /.row -->  

      <h5 class="no-margin-bottom text-blue">Success Headline</h5>
      <div class="row">
        <div class="col-sm-6">          
          <p>This message will be displaced once customers have successfully connected. This will not be displayed if you use a redirect.</p>
        </div>
        <div class="col-sm-6">
          <div class="form">
            <div class="form-group">
              <input type="text" class="form-control" value="You're connected!">
            </div>
          </div>
        </div>
      </div><!-- /.row --> 

      <h5 class="no-margin-bottom text-blue">Success Message</h5>
      <div class="row">
        <div class="col-sm-6">          
          <p>This title will be displaced once customers have successfully connected. This will not be displayed if you use a redirect.</p>
        </div>
        <div class="col-sm-6">
          <div class="form">
            <div class="form-group">              
              <textarea id="editor2" class="wysiwyg-editor form-control" ></textarea>
            </div>
          </div>
        </div>
      </div><!-- /.row -->     
    </div><!-- /.panel-body -->
  </div><!-- /.panel -->

  <div id="select-multiple-stores">
    <div>* Also apply the settings and design to: 
      <div class="btn-group dropup dropdown-multiple">
        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Select multiple stores <span class="fa fa-angle-up"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li><div class="checkbox"><label><input type="checkbox" class="select-all"> Select all</label></div></li>
          <li><div class="checkbox"><label><input type="checkbox" class="select-store"> One</label></div></li>
          <li><div class="checkbox"><label><input type="checkbox" class="select-store"> Two</label></div></li>
          <li><div class="checkbox"><label><input type="checkbox" class="select-store"> Three</label></div></li>
        </ul>
      </div>
  </div>

</div>
<!-- /.section-body -->


<!-- Select Stores Modal -->
<div class="modal fade modal-blue" id="select-stores-modal" tabindex="-1" role="dialog" aria-labelledby="selectStoresModal" aria-hidden="true">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>







<script>
$(function() {
  // Use blockUI plugin to block entire panel, based on toggle checkbox settings
  function toggleElement(jqTrigger, jqTarget) {
    $(jqTrigger).change(function() {
      if (!$(this).prop('checked')) {
        $(jqTarget).block({
          message: null,
          overlayCSS: { 
            cursor: 'not-allowed',
            backgroundColor: '#fff',
            opacity: 0.7
          }
        });
      } else {
        $(jqTarget).unblock();
      }
    });
  }

  //Enabling panel toggling
  toggleElement('#toggle-general', '#body-general');
  toggleElement('#toggle-auth', '#body-auth');
  toggleElement('#toggle-fb', '#body-fb');
  toggleElement('#toggle-manual', '#body-manual');


  //Colorpicker
  $('#accent-color, #bg-color').colorpicker();


  //WYSIWYG HTML5 editor
  $('.wysiwyg-editor').wysihtml5();

  //Filestyle file upload element styler
  //Clear selected file
  $('.clear-file').click(function(){
    var target = $(this).data('target')
    $(target).filestyle('clear');
  })

  //Background selector
  $('.bg-selector').each(function(){
    var target = $(this).data('target');
    $('.selector-box > div').click(function(){
      $(this).addClass('selected').siblings().removeClass('selected');
      $(target).val( $(this).attr('rel'));
    });
  });


  /** Select multiple stores **/
  //Keep dropdown menu open when clicked for select multiple stores open
  $('.dropdown-multiple .dropdown-menu').on({
    "click":function(e){
      e.stopPropagation();
    }
  });
  //Clear all ticked stores
  var selectAll = '.dropdown-multiple .select-all';
  var selectStore = '.dropdown-multiple .select-store';
  $(selectAll).change(function(){
    if($(this).prop('checked')) {
      $(selectStore).prop('checked', true);
    } else {
      $(selectStore).prop('checked', false);
    }
  });
  //Untick 'select all' if even one store is not ticked
  $(selectStore).change(function(){
    if ($(selectStore).length === $(selectStore+':checked').length) {
      $(selectAll).prop('checked', true);
    } else {
      $(selectAll).prop('checked', false);
    }
  });

});
</script>