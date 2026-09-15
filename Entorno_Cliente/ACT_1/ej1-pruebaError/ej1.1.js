const MAX = 10;
let seguir = true;
for (let i = 0; seguir == true; i++) {
  document.body.innerHTML += `<p>El valor de i es: ${i}</p>`;
  if (i >= MAX) {
    seguir = false;
  }
}
