<?php

require_once __DIR__ . "/../lib/php/selectFirst.php";
require_once __DIR__ . "/bd/Bd.php";
require_once __DIR__ . "/modelo/TABLA_PLAYERAS.php";

/**
 * @return false | array{
 *   PLA_ID: string,
 *   PLA_MARCA: string,
 *   PLA_TALLA: string,
 *   PLA_COLOR: string,
 *   PLA_MODIFICACION: int,
 *   PLA_ELIMINADO: int
 *  }
 */
function playeraBusca(string $id): false|array
{
 return selectFirst(
  pdo: Bd::pdo(),
  from: 'PLAYERAS',
  where: [PLA_ID => $id]
 );
}
