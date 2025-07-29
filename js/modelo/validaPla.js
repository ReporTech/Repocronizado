/**
 * @param {any} objeto
 * @returns {import("./PLAYERA.js").PLAYERA}
 */
export function validaPlayera(objeto) {

  if (typeof objeto.PLA_ID !== "string" || objeto.PLA_ID === "")
    throw new Error("El id debe ser texto y no puede estar vacío.")

  if (typeof objeto.PLA_MARCA !== "string" || objeto.PLA_MARCA === "")
    throw new Error("La marca debe ser texto y no puede estar vacío.")

  if (typeof objeto.PLA_TALLA !== "string" || objeto.PLA_TALLA === "")
    throw new Error("La talla debe ser texto y no puede estar vacía.")

  if (typeof objeto.PLA_COLOR !== "string" || objeto.PLA_COLOR === "")
    throw new Error("El color debe ser texto y no puede estar vacío.")

  if (typeof objeto.PLA_MODIFICACION !== "number")
    throw new Error("El campo modificacion debe ser número.")

  if (typeof objeto.PLA_ELIMINADO !== "number")
    throw new Error("El campo eliminado debe ser número.")

  return objeto
}
