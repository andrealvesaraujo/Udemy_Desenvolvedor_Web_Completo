//alert("Oi HCode")
/*var resposta = confirm("Deseja excluir?");

console.log(resposta);


var a =10;
var b= 20;
//alert(a+b)*/
const a =10;
const b = 33;
function somar(a,b){
	return parseInt(a)+parseInt(b);	
}

//console.log(somar(2,5));

document.querySelector("#calcular").addEventListener("click",function () {
	//alert("Timão campeão")
	let valorA = document.querySelector("#valorA").value;
	let valorB = document.querySelector("#valorB").value;
	//O let permite que exista somente nesse escopo

	if(valorA.length > 0 && valorB.length >0){


	//alert(parseInt(valorA) + parseInt(valorB));
	alert(somar(valorA,valorB));
	}else{
		alert("Digite os valores para o calculo");
	}
} );