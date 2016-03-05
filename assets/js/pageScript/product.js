$('#BtnRateG').on('click', function(){
	$('#rateG').append(
		'<div class="row">' +
                     '<div class="col-md-2 col-md-offset-3">' +
                        '<h5><label>'+$('#inputPieceRateG').val()+'</label></h5>'+
                     '</div>' +
                     '<div class="col-md-1">' +
                        '<h5><label>'+$('#inputBahtRateG').val()+'</label></h5>' +
                     '</div>' +
                     '<div class="col-md-1">' +
                        '<h5><label>bath/piece</label></h5>'+
                     '</div>' +
                     '<div class="col-md-1 col-md-offset-1">' +
                        '<button id="btnRemoveRate" class="btn btn-sm glyphicon glyphicon-remove"></button>' +
                     '</div>' +
                  '</div>'
	);
$('#inputPieceRateG').val("");
$('#inputBahtRateG').val("");
});
$('#BtnRateM').on('click', function(){
   $('#rateM').append(
      '<div class="row">' +
                     '<div class="col-md-2 col-md-offset-3">' +
                        '<h5><label>'+$('#inputPieceRateM').val()+'</label></h5>'+
                     '</div>' +
                     '<div class="col-md-1">' +
                        '<h5><label>'+$('#inputBahtRateM').val()+'</label></h5>' +
                     '</div>' +
                     '<div class="col-md-1">' +
                        '<h5><label>bath/piece</label></h5>'+
                     '</div>' +
                     '<div class="col-md-1 col-md-offset-1">' +
                        '<button id="btnRemoveRate" class="btn btn-sm glyphicon glyphicon-remove"></button>' +
                     '</div>' +
                  '</div>'
   );
$('#inputPieceRateM').val("");
$('#inputBahtRateM').val("");
});

$('body').on('click', '#btnRemoveRate', function() {
    $(this).parent().parent().remove();
});

