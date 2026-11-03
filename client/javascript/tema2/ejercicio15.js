/*
 * Tema 2 · Fundamentos y particularidades de JavaScript
 * Ejercicio 15 · Coalescencia nula, encadenamiento opcional y operador condicional
 *
 * Una aplicación recibe perfiles incompletos desde una API. Completa las
 * expresiones de la función para que nunca falle aunque falten datos.
 */

const perfiles = [
	{
		nombre: 'Ane',
		preferencias: { tema: 'oscuro' },
		estadisticas: { ejerciciosCompletados: 12 }
	},
	{
		nombre: 'Jon',
		preferencias: null,
		estadisticas: { ejerciciosCompletados: 0 }
	},
	{
		nombre: 'Miren',
		estadisticas: {}
	},
	null
];

function describirPerfil(perfil) {
	const nombre = perfil?.nombre ?? 'Usuario anónimo';
	const tema = perfil?.preferencias?.tema ?? 'claro';
	const ejercicios = perfil?.estadisticas?.ejerciciosCompletados ?? 0;
	const estado = ejercicios > 0 ? 'en progreso' : 'pendiente';

	return `${nombre}: tema ${tema}, ${ejercicios} ejercicios, estado ${estado}`;
}

perfiles.forEach((perfil) => {
	console.log(describirPerfil(perfil));
});

/*
 * Comprueba estos casos en la consola:
 * 1. Cambia `??` por `||` en `ejercicios` y observa qué ocurre con el valor 0.
 * 2. Elimina `?.` de una de las rutas y comprueba qué sucede con un perfil incompleto.
 * 3. Cambia la condición del operador `? :` para marcar como "completado" a
 *    quien tenga al menos 10 ejercicios.
 */
