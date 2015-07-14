function makeid()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 5; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}

$(document).on('click', '.project.thrumbnails .image', function()
{
  var id = $(this).parents('.project').attr('id');
  var modal_id = id + '_modal';

  if (!$('#' + modal_id).size())
  {
    $.ajax(
    {
      url: '/' + $('#' + id).attr('url') + '/modal.php',
      success: function (data)
      {
        $('<div></div>').appendTo('body').append(data).find('.modal').modal('show');
      },
      dataType: 'html'
    });
  }
  else
    $('#' + modal_id).modal('show');
  
})

$(document).ready(function()
{
  $('.projects .card .image').dimmer({
    on: 'hover'
  })
})