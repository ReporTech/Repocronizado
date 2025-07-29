import { exportaAHtml } from "../lib/js/exportaAHtml.js"
import { htmlentities } from "../lib/js/htmlentities.js"

/**
 * @param {HTMLUListElement} lista
 * @param {import("./modelo/ALUMNO.js").ALUMNO[]} alumnos
 */
export function renderiza(lista, alumnos) {
 let render = ""
 for (const alumno of alumnos) {
  if (alumno.ALU_ID === undefined)
   throw new Error(`Falta ALU_ID de ${alumno.ALU_NOMBRE}.`)
  const nombre = htmlentities(alumno.ALU_NOMBRE)
  const searchParams = new URLSearchParams([["id", alumno.ALU_ID]])
  const params = htmlentities(searchParams.toString())
  render += /* html */ `
    <li>
      <p><a href="modifica.html?${params}">${nombre}</a></p>
    </li>`
 }
 lista.innerHTML = render
}

exportaAHtml(renderiza)
