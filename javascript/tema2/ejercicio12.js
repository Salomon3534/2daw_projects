/*
 * Tema 2 · Fundamentos y particularidades de JavaScript
 * Ejercicio 12 · || frente a ??
 */

// Caso 1: cantidad = 0
const cantidad = 0;

const a = cantidad || 10;
const b = cantidad ?? 10;

console.log("cantidad:", cantidad);
console.log("cantidad || 10:", a);
console.log("cantidad ?? 10:", b);