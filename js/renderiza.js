import { exportaAHtml } from "../lib/js/exportaAHtml.js"
import { htmlentities } from "../lib/js/htmlentities.js"

/**
 * @param {HTMLUListElement} lista
 * @param {import("./modelo/PLAYERA.js").PLAYERA[]} playeras
 */
export function renderiza(lista, playeras) {
 let render = ""
 for (const playera of playeras) {
  if (playera.PLA_ID === undefined)
   throw new Error(`Falta PLA_ID de ${playera.PLA_MARCA}.`)
  const marca = htmlentities(playera.PLA_MARCA)
  const searchParams = new URLSearchParams([["id", playera.PLA_ID]])
  const params = htmlentities(searchParams.toString())
  render += /* html */ `
    <li>
      <p><a href="modifica.html?${params}">${marca}</a></p>
    </li>`
 }
 lista.innerHTML = render
}

exportaAHtml(renderiza)
