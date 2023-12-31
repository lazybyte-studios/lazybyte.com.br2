// envio de dados com Ajax e promise (aguarda a execução com certeza antes de executar o then)
function executa()
{
	const promise1 = new Promise(function( resolve, reject )
	{
		const xhr = new XMLHttpRequest();

		xhr.onload = function(){
			resolve( this.response );
		}

		xhr.open("POST", "https://mwarsys.epizy.com/processaDados.php");
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		let dados = "dados=1&processa=Vai se fuder";
		xhr.send(dados);

		xhr.onerror = function(){
			reject( new Error( "Erro de rede" ));
		}
	})

	const promise2 = new Promise(function( resolve )
	{
		setTimeout(function(){
			resolve("Deu porra");
		}, 3000);
	})


	Promise.all([ promise1, promise2 ]).then( values => teste( values ));
}

function teste( values )
{
	alert( values );
}