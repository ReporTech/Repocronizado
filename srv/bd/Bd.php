<?php

class Bd
{

 private static ?PDO $pdo = null;

 static function pdo(): PDO
 {
  if (self::$pdo === null) {
   self::$pdo = new PDO(
    // cadena de conexión
    "sqlite:sincronizacion.db",
    // usuario
    null,
    // contraseña
    null,
    // Opciones: pdos no persistentes y lanza excepciones.
    [PDO::ATTR_PERSISTENT => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
   );

self::$pdo->exec(
  'CREATE TABLE IF NOT EXISTS PLAYERAS (
    PLA_ID TEXT NOT NULL,
    PLA_MARCA TEXT NOT NULL,
    PLA_TALLA TEXT NOT NULL,
    PLA_COLOR TEXT NOT NULL,
    PLA_MODIFICACION INTEGER NOT NULL,
    PLA_ELIMINADO INTEGER NOT NULL,
    CONSTRAINT PLA_PK PRIMARY KEY(PLA_ID),
    CONSTRAINT PLA_ID_NV CHECK(LENGTH(PLA_ID) > 0),
    CONSTRAINT PLA_MARCA_NV CHECK(LENGTH(PLA_MARCA) > 0),
    CONSTRAINT PLA_TALLA_NV CHECK(LENGTH(PLA_TALLA) > 0),
    CONSTRAINT PLA_COLOR_NV CHECK(LENGTH(PLA_COLOR) > 0)
  )'
);


  }

  return self::$pdo;
 }
}
