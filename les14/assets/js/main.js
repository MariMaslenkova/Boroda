function signUp() {
	var Name=document.getElementById("Name").value;
	if(Name=="" || Name==null){
		alert("Введите имя");
		return;//завершение выполнения функции
	}

	var Sex = document.getElementById("Sex");
			Sex = (Sex.options[Sex.selectedIndex]).value;

			if(Sex=="0"){
				alert("Ну и какого же мы пола???");
				return;
		}

var Bdate=document.getElementById("Bdate").value;
			if (Bdate=="" || Bdate==null) {
				alert("Чета не понятно когда ты родился")
				return;
			}

var Fdish=document.getElementById("Fdish").value;
			if (Fdish=="" || Fdish==null) {
				alert("А блюдо написать?")
				return;
			}
			var Sale=document.getElementById("Sale").value;
			if (Sale=="" || Sale==null) {
				alert("Скидка!")
				return;
			}

				$.ajax({
					type:"POST", 
					url:"users.php",
					success:function(){
						location.href="account.php";
					},
					error:function(){
						alert("Произошла ошибка");
					},
					data:{
					"Name":Name,
					"Sex": Sex,
					"Bdate": Bdate,
					"Fdish": Fdish,
					"Sale": Sale
				}
					});
}