function remove_user(id) {
	$.ajax({
		url:"user_db.php",

		type:"POST",

		success:function(result){
         	location.reload();
     	},

         error:function(){
         	alert("Руки кривые, смотри что наделал!");
         },

         data:{"id":id, "action":"delete"}
	});
}