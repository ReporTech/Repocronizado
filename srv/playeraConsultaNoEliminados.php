<?php

require_once __DIR__ . "/../lib/php/select.php";
require_once __DIR__ . "/bd/Bd.php";
require_once __DIR__ . "/modelo/TABLA_PLAYERAS.php";

/**
 * @return array{
 *   PLA_ID: string,
 *   PLA_MARCA: string,
 *   PLA_TALLA: string,
 *   PLA_COLOR: string,
 *   PLA_MODIFICACION: int,
 *   PLA_ELIMINADO: int
 *  }[]
 */
function playeraConsultaNoEliminados()
{
 return select(
  pdo: Bd::pdo(),
  from: 'PLAYERAS',
  where: [PLA_ELIMINADO => 0],
  orderBy: PLA_MARCA
 );
}
