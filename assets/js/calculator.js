$(document).ready(function()
{
  $('#tp').change(function()
  {
    if ($('#tp').val() == 2)
    {
      $('#PTwoP').show();
      $('#ATwoC').show();
      $('#MTransfer').hide();
      $('#Cout').hide();
    }
    else if($('#tp').val() == 1)
    {
      $('#MTransfer').show();
      $('#Cout').show();
      $('#PTwoP').hide();
      $('#ATwoC').hide();
    }
  });

  $('.MMContentWrapper').submit(function(event)
  {
    event.preventDefault();
    Playsfx();
    $('.loading_screen').fadeIn();
    var mobile_network = $('#mn').val();
    var transaction_type = $('#tt').val();
    var transaction_point = $('#tp').val();
    var amount = $('#amnt').val();
    var submit_calc = $('#submit').val();
    $('.calc_detail').load('engine/database/db',
    {
      mobile_network:mobile_network,
      transaction_type:transaction_type,
      transaction_point:transaction_point,
      amount:amount,
      submit_calc:submit_calc
    });
  });
});
