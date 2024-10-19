<?php 

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Articulos extends Entity
{
    public function isOwner(): bool
    {
       return $this->users_id == auth()->user()->id;
        
    }
}