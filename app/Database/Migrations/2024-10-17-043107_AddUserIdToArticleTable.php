<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserIdToArticleTable extends Migration
{
    public function up()
{
    // Agregar la columna 'users_id' a la tabla 'article'
    $this->forge->addColumn("article", [
        "users_id" => [
            "type" => "INT",
            "null" => true,  // Permitir nulos temporalmente
            "unsigned" => true,
            "constraint" => 11
        ]
    ]);

    // Seleccionar un usuario existente de la tabla 'users'
    $sql = "SELECT id FROM users LIMIT 1";
    $result = $this->db->query($sql)->getResult();

    if ($result) {
        // Asignar 'users_id' a cualquier artículo que tenga 'users_id' nulo
        $sql = "UPDATE article SET users_id = {$result[0]->id} WHERE users_id IS NULL";
        $this->db->query($sql);
    }

    // Ahora que todos los artículos tienen un 'users_id' válido, hacer la columna NOT NULL
    $this->forge->modifyColumn("article", [
        "users_id" => [
            "type" => "INT",
            "null" => false,  // Ahora no permitimos nulos
            "unsigned" => true,
            "constraint" => 11
        ]
    ]);

    // Agregar la clave foránea
    $this->forge->addForeignKey("users_id", "users", "id", "CASCADE", "CASCADE", "article_users_id_fk");
    $this->forge->processIndexes("article");
}

public function down()
{
    // Eliminar la clave foránea y la columna 'users_id'
    $this->forge->addForeignKey("users_id", "users", "id", "SET NULL", "CASCADE", "article_users_id_fk");

    $this->forge->dropColumn("article", "users_id");
}

}
