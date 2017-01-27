function change(){
	var rand = Math.floor((Math.random() * 5) + 1);
	switch (rand){
		case 1:{
			document.body.style.background =  "url('a1.gif') no-repeat center center fixed";
			break;
		}
		case 2:{
			document.body.style.background =  "url('a2.gif') no-repeat center center fixed";
			break;
		}
		case 3:{
			document.body.style.background =  "url('a3.gif') no-repeat center center fixed";
			break;
		}
		case 4:{
			document.body.style.background =  "url('a4.gif') no-repeat center center fixed";
			break;
		}
		case 5:{
			document.body.style.background =  "url('a5.gif') no-repeat center center fixed";
			break;
		}
	}
	document.body.style.backgroundSize = "cover";
}
