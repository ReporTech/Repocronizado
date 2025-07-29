<?php

require_once __DIR__ . "/../../lib/php/BAD_REQUEST.php";
require_once __DIR__ . "/../../lib/php/validaJson.php";
require_once __DIR__ . "/../../lib/php/ProblemDetails.php";
require_once __DIR__ . "/TABLA_PLAYERAS.php";

function validaPlayera($objeto)
{
 $objeto = validaJson($objeto);

 if (!isset($objeto->PLA_ID) || !is_string($objeto->PLA_ID))
  throw new ProblemDetails(
   status: BAD_REQUEST,
   title: "El id debe ser texto.",
   type: "/error/idincorrecto.html",
  );

 if (!isset($objeto->PLA_MARCA) || !is_string($objeto->PLA_MARCA))
  throw new ProblemDetails(
   status: BAD_REQUEST,
   title: "El nombre debe ser texto.",
   type: "/error/nombreincorrecto.html",
  );

 if (!isset($objeto->PLA_TALLA) || !is_string($objeto->PLA_TALLA))
  throw new ProblemDetails(
   status: BAD_REQUEST,
   title: "La asignatura debe ser texto.",
   type: "/error/asignaturaincorrecta.html",
  );

 if (!isset($objeto->PLA_COLOR) || !is_string($objeto->PLA_COLOR))
  throw new ProblemDetails(
   status: BAD_REQUEST,
   title: "El turno debe ser texto.",
   type: "/error/turnoincorrecto.html",
  );

 if (!isset($objeto->PLA_MODIFICACION)  || !is_int($objeto->PLA_MODIFICACION))
  throw new ProblemDetails(
   status: BAD_REQUEST,
   title: "La modificacion debe ser número.",
   type: "/error/modificacionincorrecta.html",
  );

 if (!isset($objeto->PLA_ELIMINADO) || !is_int($objeto->PLA_ELIMINADO))
  throw new ProblemDetails(
   status: BAD_REQUEST,
   title: "El campo eliminado debe ser entero.",
   type: "/error/eliminadoincorrecto.html",
  );

 return [
  PLA_ID => $objeto->PLA_ID,
  PLA_MARCA => $objeto->PLA_MARCA,
  PLA_TALLA => $objeto->PLA_TALLA,
  PLA_COLOR => $objeto->PLA_COLOR,
  PLA_MODIFICACION => $objeto->PLA_MODIFICACION,
  PLA_ELIMINADO => $objeto->PLA_ELIMINADO
 ];
}
