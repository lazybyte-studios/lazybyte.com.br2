export function login(){
    // Carrega a página de login assincronamente
    fetch('./public/pwa/login.html')
      .then(function(response) {
        return response.text();
      })
      .then(function(html) {
        var loginContainer = document.getElementById('carrega');
        loginContainer.innerHTML = html;
      })
      .then( response =>{
        //document.addEventListener('DOMContentLoaded', function() 
        //{

          // Pegar os cliques no elemento escolhido
          let elementoPai = document.querySelector(".senha"); // elemento onde está o ::before

          let botao = document.querySelector("#envia");

          // busca o pseudo-elemento before
          //let olho = window.getComputedStyle( elementoPai, "::before" );

          // colocando o disparador ao clicar no elemento ( olho )
          elementoPai.addEventListener("click", function( event ){
              
              // pegando o campo da senha
              let campo = document.querySelector(".senha input");

              // busca o elemento root no CSS
              let raiz = document.querySelector(":root");

              // colocando o clique apenas no ícone do olho
              if (event.target === elementoPai) 
              {
                  // let olho = window.getComputedStyle(root);
                  // alert(" O valor da propriedade: " + olho.getPropertyValue('--olho'));
                  // alterando o tipo do campo entre password e text
                  if( campo.type === "password" )
                  {
                      // mudamos para text para senha ficar visível
                      campo.type = "text";
                      
                      // altera o ícone do olho
                      raiz.style.setProperty( "--olho", '"\\F33F"' );
                      
                  }
                  else
                  {
                      //mudamos para password ocultando a senha
                      campo.type = "password"; 

                      raiz.style.setProperty( "--olho", '"\\F33E"' );

                  }
              }

          });

          botao.addEventListener("click", function( event )
          {

            alert("teste");

          });

        // });        
      })
      .catch(function(error) {
        console.error('Erro ao carregar a página de login:', error);
      });
}


// lógica
login();


