<?php

require_once __DIR__ . "/../lib/php/validaNombre.php";
require_once __DIR__ . "/../lib/php/insert.php";
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
function playeraAgrega(array $modelo)
{
 validaId($modelo[PLA_ID]);
 validaNombre($modelo[PLA_MARCA]);
 // Aquí si quieres, valida asignatura y turno con nuevas funciones
 insert(pdo: Bd::pdo(), into: 'PLAYERAS', values: $modelo);
}
