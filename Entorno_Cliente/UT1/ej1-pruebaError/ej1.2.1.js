const MAX = 100;
let seguir = true;
/***********************************************************
Las variables se tienen que poner con nombres diferentes 
a los del 1er script para que no de error
************************************************************/
for (let i = 1; seguir == true; i++) {
  document.body.innerHTML += `<p>El valor de i es: ${i}</p>`;
  if (i >= MAX) {
    seguir = false;
  }
}
