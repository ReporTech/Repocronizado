import { bdEjecuta } from "../../lib/js/bdEjecuta.js"
import { ALMACEN_PLAYERA, Bd } from "./Bd.js"

/**
 * Borra el contenido del almacén ALUMNO y guarda nuevos alumnos.
 * @param {import("../modelo/PLAYERA.js").PLAYERA[]} nuevosPlayeras
 */
export async function playeraReemplaza(nuevosPlayeras) {
 return bdEjecuta(Bd, [ALMACEN_PLAYERA], transaccion => {
  const almacenPlayera = transaccion.objectStore(ALMACEN_PLAYERA)
  almacenPlayera.clear()
  for (const objeto of nuevosPlayeras) {
   almacenPlayera.add(objeto)
  }
 })
}
