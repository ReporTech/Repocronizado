<?php

require_once __DIR__ . "/../lib/php/validaNombre.php";
require_once __DIR__ . "/../lib/php/update.php";
require_once __DIR__ . "/bd/Bd.php";
require_once __DIR__ . "/modelo/TABLA_PLAYERAS.php";
require_once __DIR__ . "/modelo/validaId.php";

/**
 * @param array{
 *   PLA_ID: string,
 *   PLA_MARCA: string,
 *   PLA_TALLA: string,
 *   PLA_COLOR: string,
 *   PLA_MODIFICACION: int,
 *   PLA_ELIMINADO: int
 *  } $modelo
 */
function alumnoModifica(array $modelo)
{
 validaId($modelo[PLA_ID]);
 validaNombre($modelo[PLA_MARCA]);
 // Valida asignatura y turno si tienes esas funciones
 update(
  pdo: Bd::pdo(),
  table: 'PLAYERAS',
  set: $modelo,
  where: [PLA_ID => $modelo[PLA_ID]]
 );
}
