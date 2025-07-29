import { bdEjecuta } from "../../lib/js/bdEjecuta.js"
import { exportaAHtml } from "../../lib/js/exportaAHtml.js"
import { validaId } from "../modelo/validaId.js"
import { validaMarca } from "../modelo/validaMarca.js"
import { ALMACEN_PLAYERA, Bd } from "./Bd.js"
import { playeraBusca } from "./playeraBusca.js"

/**
 * @param { import("../modelo/PLAYERA.js").ALUMNO } modelo
 */
export async function alumnoModifica(modelo) {
 validaMarca(modelo.PLA_MARCA)
 if (modelo.PLA_ID === undefined)
  throw new Error(`Falta PLA_ID de ${modelo.PLA_MARCA}.`)
 validaId(modelo.PLA_ID)
 const anterior = await playeraBusca(modelo.PLA_ID)
 if (anterior !== undefined) {
  modelo.PLA_MODIFICACION = Date.now()
  modelo.PLA_ELIMINADO = 0
  return bdEjecuta(Bd, [ALMACEN_PLAYERA], transaccion => {
   const almacenPlayera = transaccion.objectStore(ALMACEN_PLAYERA)
   almacenPlayera.put(modelo)
  })
 }
}

exportaAHtml(playeraModifica)
