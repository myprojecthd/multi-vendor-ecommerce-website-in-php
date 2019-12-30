$(document).on('submit','.login_user',function(){
	var url=$(this).attr('action');
	var data=$(this).serialize();
	$.post(url,data,function(fb){
		var resp=$.parseJSON(fb);
		if(resp.status=='true')
		{
			if(resp.access==1)
			{
				window.location.href=BASE_URL+'admin';
			}
			else 
			{
				window.location.href=BASE_URL;
			}
		}
		else
		{
			alert(resp.message);
		}
	})
	return false;
});