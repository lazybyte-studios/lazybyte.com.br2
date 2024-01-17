let aberto = 1;

function esconde()
{

    let ele = document.querySelector('#menuLateral');

   if( aberto == 1 )
   {
        ele.setAttribute("style", "width: 6.5rem;");
        aberto = 0;
   }
   else
   {
        ele.setAttribute("style", "width: 14rem;");
        aberto = 1;
   }

}    
    