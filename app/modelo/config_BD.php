<?php
class Database
{
    //Esta función permite la conexión al SGBD: Postgres.
    //host = tipo de conexión local - 'localhost'.
    //dbname = nombre de la base de datos.
    //port = El puerto que usa postgres.
    //postgres = nombre de usuario (solo para fines académicos=postgres).
    //'' = contraseña del postgres (solo para fines académicos).

    public static function Conectar()
    {
        $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=practica', 'postgres', '');
        //Filtrando posibles errores de conexión.
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

}
