const MAXI = 1000;
let seguiDO = true;
/***********************************************************
Las variables se tienen que poner con nombres diferentes 
a los del 1er script para que no de error
************************************************************/
for (let i = 900; seguiDO == true; i++) {
  document.body.innerHTML += `<p>El valor de i es: ${i}</p>`;
  if (i >= MAXI) {
    seguiDO = false;
  }
}
