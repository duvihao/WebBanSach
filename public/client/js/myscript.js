$(document).ready(function(){
	$(".updatecart").click(function(){
		var rowid = $(this).attr('id');
		var qty = $(this).parent().parent().parent().find(".cart_quantity_input").val();
		var token = $("input[name='_token']").val();
		$.ajax({
			url:'capnhatgiohang/'+rowid+'/'+qty,
			type:'GET',
			cache:false,
			data:{"_token":token,"id":rowid,"qty":qty},
			success:function(data){
				if (data == "oke"){
					window.location = "giohang"
				}
			}
		});
	});
});