import { bdEjecuta } from "../../lib/js/bdEjecuta.js"
import { creaIdCliente } from "../../lib/js/creaIdCliente.js"
import { ALMACEN_PLAYERA, Bd } from "./Bd.js"
import { validaMarca } from "../modelo/validaMarca.js"
import { exportaAHtml } from "../../lib/js/exportaAHtml.js"

/**
 * @param {import("../modelo/PLAYERA.js").PLAYERA} modelo
 */
export async function playeraAgrega(modelo) {
 validaMarca(modelo.PLA_MARCA)
 modelo.PLA_MODIFICACION = Date.now()
 modelo.PLA_ELIMINADO = 0
 // Genera id único en internet.
 modelo.PLA_ID = creaIdCliente(Date.now().toString())
 return bdEjecuta(Bd, [ALMACEN_PLAYERA], transaccion => {
  const almacenPlayera = transaccion.objectStore(ALMACEN_PLAYERA)
  almacenPlayera.add(modelo)
 })
}

exportaAHtml(playeraAgrega)
