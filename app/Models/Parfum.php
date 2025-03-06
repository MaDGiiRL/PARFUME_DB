<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parfum extends Model
{
    protected $fillable = ['name', 'scent', 'body', 'price', 'img'];

    public function getBody()
    {
        if (strlen($this->body) > 90) {
            return substr($this->body, 0, 90) . '...';
        } else {
            return $this->body;
        }
    }
    
}
