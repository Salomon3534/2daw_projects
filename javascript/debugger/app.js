const precio = 20;
const cantidad = 3;
 
document.querySelector("#calcular").addEventListener("click", () => {
  const subtotal = precio * cantidad;
  const descuento = subtotal * 0.10;
  const total = subtotal - descuento;
  document.querySelector("#resultado").textContent = total;
});
