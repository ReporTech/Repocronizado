import { validaPlayera as validaPlayeraIndividual } from "./validaPla.js"

/**
 * @param {any} objetos
 * @returns {import("./PLAYERA.js").PLAYERA[]}
 */
export function validaPlayera(objetos) {
  if (!Array.isArray(objetos))
    throw new Error("No se recibió un arreglo.")

  /**
   * @type {import("./PLAYERA.js").PLAYERA[]}
   */
  const arreglo = []
  for (const objeto of objetos) {
    arreglo.push(validaPlayeraIndividual(objeto))
  }
  return arreglo
}
