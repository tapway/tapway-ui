<script src="assets/javascripts/jquery-1.11.0.min.js"></script>
<script src="assets/javascripts/bootstrap.min.js"></script>
<script src="assets/javascripts/bootstrap-filestyle.min.js"></script>
<script src="assets/javascripts/flowtype.js"></script>
<script src="assets/javascripts/moment.js"></script>
<script src="assets/javascripts/daterangepicker.js"></script>
<script src="assets/javascripts/jquery.tablesorter.min.js"></script>
<script src="assets/javascripts/jquery.metadata.js"></script>
<script src="assets/javascripts/jquery.blockUI.js"></script>
<script src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="assets/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>
<script src="assets/bootstrap3-wysiwyg/bootstrap3-wysihtml5.all.min.js"></script>
<script src="assets/javascripts/holder.js"></script>
<script src="assets/javascripts/scripts.js"></script>
<script>
$(function() {

  /* Activate side-nav. Only for the mockup. Probably not needed for actual app */
  var realPath = window.location.pathname+window.location.search;
  $('.side-nav .nav li a, .side-nav-mobile .nav li a').each(function(){
    if ( realPath === ($(this).attr('href')) ) {
      $(this).parents('li').addClass("active");
    }
  });
  

  /* Daterangepicker */ 
  //defaults
  var dateFormat = 'D MMM YYYY';  

  //pick a value for report range
  var liveNowText = '<i class="fa fa-play"></i> <b>Live Now</b>&nbsp;&nbsp;' + moment().format(dateFormat);
  $('#reportrange .btn span').html(liveNowText).parents('.btn').addClass('btn-danger') ;
  $('#reportrange').daterangepicker(
    {
      applyClass: 'btn-black',
      locale: {
        applyLabel: 'Submit'
      },
      ranges: {
         '<i class="fa fa-play"></i> Live Now': [moment()],
         'Last 7 Days': [moment().subtract(6, 'days'), moment()],
         'Last 30 Days': [moment().subtract(29, 'days'), moment()],
         'Last 180 Days': [moment().subtract(179, 'days'), moment()],
         'Last 360 Days': [moment().subtract(359, 'days'), moment()]
      },
       // startDate: moment(),
       // endDate: moment()
    },
    function(start, end) {
      if (start.format(dateFormat) === moment().format(dateFormat) ) {  //only for today i.e. 'Live Now'
        $('#reportrange .btn span').html(liveNowText).parents('.btn').addClass('btn-danger') ;
      } else { //all other dates
        $('#reportrange .btn span').text(start.format(dateFormat) + ' - ' + end.format(dateFormat)).parents('.btn').removeClass('btn-danger');
      }
    }
  );

  /* Bootstrap Select */
  //generic
  $(".selectpicker").selectpicker();


});
</script>