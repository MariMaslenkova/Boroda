function signUp() {
	var email=document.getElementById("email").value;
	if(email=="" || email==null){
		alert("Введите email");
		return;//завершение выполнения функции
	}
			var date=document.getElementById("date").value;
			if (date=="" || date==null) {
				alert("Чета не понятно когда ты родился")
				return;
			}
			var date1=new Date(date);

			var dateNow = new Date();
			if (dateNow.getFullYear()-date1.getFullYear()<18){
				alert("Мамка ругаться будет")
				return;
			}
			var city = document.getElementById("city");
			city = (city.options[city.selectedIndex]).value;

			if(city=="0"){
				alert("Уточни где живешь");
				return;
			}
			var password=document.getElementById("password").value;
			var password1=document.getElementById("password1").value;
			if (password=="" || password==null) {
				alert("А пароль?")
				return;}
				if (password !=password1){
					alert ("Пароли должны совпадать")
					return;
				}
				$.ajax({
					type:"POST", 
					url:"users.php",
					success:function(){
						location.href="account.php";
					},
					error:function(){
						alert("Произошла ошибка")
					},
					data:{
					"email":email,
					"date": date,
					"city": city,
					"password": password
				}
					});
}
