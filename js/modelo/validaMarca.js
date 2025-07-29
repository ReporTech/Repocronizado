/**
 * @param {string} marca
 */
export function validaMarca(marca) {
 if (typeof marca !== "string" || marca.trim() === "")
  throw new Error("Falta el nombre.")
}

/**
 * @param {string} talla
 */
export function validaTalla(talla) {
 if (typeof talla !== "string" || talla.trim() === "")
  throw new Error("Falta la talla.")
}

/**
 * @param {string} color
 */
export function validaColor(color) {
 if (typeof color !== "string" || color.trim() === "")
  throw new Error("Falta el color.")
}
