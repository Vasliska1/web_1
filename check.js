var inputs = document.getElementsByName('chooseR');
					for(var i = 0; i < inputs.length; i++) inputs[i].onchange = checkboxHandler;
						
						function checkboxHandler(e) {
							for(var i = 0; i < inputs.length; i++)
								if(inputs[i].checked && inputs[i] !== this) inputs[i].checked=false;
						}

function validate(form){

	
	var fail = "";
	var Y= form.enterY.value;
	var X = document.getElementsByName('chooseX')
	var R = form.chooseR.value;
	var chooseYTitle = form.querySelector('.chooseYTitle')
	var chooseRTitle = form.querySelector('.chooseRTitle')
	var chooseXTitle = form.querySelector('.chooseXTitle')


for (var i=0, length = X.length; i<length; i++) {
		if (X[i].checked) {
			var XValue = (X[i].id)
			break
		}
	}

	if (!XValue) {
		chooseXTitle.style.color='red';
		chooseXTitle.style.fontWeight = 'bold'
		
		fail=fail + '<br>' + "Выберите значение X";
		}

	if (Y<-5 ||Y>5) {
		fail = fail + '<br>'+ "Значение Y должно быть от -5 до 5!!";
		chooseYTitle.style.color='red';
		chooseYTitle.style.fontWeight = 'bold'
		
	} 
	if (Y==null || Y=="") {
		fail = fail + '<br>' + "Впишите Y!!";
		chooseYTitle.style.color='red';
		chooseYTitle.style.fontWeight = 'bold'
		

	}

	
	var RValue = "";
	for (i = 0; i < document.getElementsByName('chooseR').length; i++) {
		if (document.getElementsByName('chooseR')[i].checked) {

			RValue = document.getElementsByName('chooseR')[i].value;        
		}        
	}
	if (RValue == "") {

		chooseRTitle.style.color='red';
		chooseRTitle.style.fontWeight = 'bold'
		fail = fail + '<br>' +"Значение R должно быть выбрано.";
	} 

	if (fail){

		var element = document.getElementById('message');
		element.innerHTML=fail;
		return false;
	}
	else {
		return true;
	}

}

if(typeof window.history.pushState == 'function') {
	window.history.pushState({}, "Hide", "https://se.ifmo.ru/~s285612/index.php");
}	