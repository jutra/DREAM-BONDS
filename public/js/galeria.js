var body = $('body');
var imgs = $('.galeria_img');


$('.galeria_img').click(function(e){
  var img = e.target.src;
  var modal = '<div id="modal" class="modal"><img src="'+ img + '" alt="" class="modal_img"><div class="modal_boton" id="modal_boton">X</div></div>';
  $('body').append(modal);
  $('#modal_boton').click(function(){
    $('#modal').remove();
  })
})
