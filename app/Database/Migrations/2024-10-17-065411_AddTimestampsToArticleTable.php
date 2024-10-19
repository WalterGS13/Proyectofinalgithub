<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimestampsToArticleTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn("article", [
            "created_at" => [
                "type" => "DATETIME",
                "null" => true, 
                "default" => null,
            ],
            "updated_at" => [
                "type" => "DATETIME",
                "null" => true, 
                "default" => null, 
            ],
        ]);

        
    }

    public function down()
    {
        $this->forge->dropColumn("article", "updated_at");
        $this->forge->dropColumn("article", "created_at");
    }
}
