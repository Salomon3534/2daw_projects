/*
 * Tema 2 · Fundamentos y particularidades de JavaScript
 * Ejercicio 13 · Operador ternario: cuándo ayuda y cuándo no
 */

// PARTE 1: Mayor o menor de edad

const edad = Number(prompt("Introduce tu edad"));

const mensaje = edad >= 18
    ? "Mayor de edad"
    : "Menor de edad";

console.log(mensaje);


// PARTE 2: Clasificación de una nota

const nota = Number(prompt("Introduce una nota"));


// Versión con if / else if / else

let resultadoIf;

if (nota >= 9) {
    resultadoIf = "Sobresaliente";
} else if (nota >= 7) {
    resultadoIf = "Notable";
} else if (nota >= 5) {
    resultadoIf = "Aprobado";
} else {
    resultadoIf = "Suspenso";
}

console.log("Resultado con if:", resultadoIf);


// Versión con operadores ternarios

const resultadoTernario =
    nota >= 9 ? "Sobresaliente" :
    nota >= 7 ? "Notable" :
    nota >= 5 ? "Aprobado" :
    "Suspenso";

console.log("Resultado con ternario:", resultadoTernario);


/*
 * PREGUNTA:
 *
 * ¿Cuál de las dos versiones consideras más legible?
 * ¿Por qué?
 *
 * RESPUESTA:
 *
 *
 */