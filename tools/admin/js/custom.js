$(document).ready(function() {
    $('.datatable').DataTable();
} );
$(document).on('submit','.database_operations',function(){
	var url=$(this).attr('action');
	var data=$(this).serialize();
	$.post(url,data,function(fb){
		var resp=$.parseJSON(fb);
		if(resp.status=='true')
		{
			alert(resp.message);
			setTimeout(function(){
				window.location.href=resp.reload;
			},2000);
		}
		else
		{
			alert(resp.message);
		}
	});
	return false;
});