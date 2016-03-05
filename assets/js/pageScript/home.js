$('#approvedBtn').on('click',function(){
	$('#approveBtnOnModal').prop('disabled','ture');
});
$('#pendingBtn').on('click',function(){
	$('#approveBtnOnModal').prop('disabled','false');
});