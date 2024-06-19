<?php

namespace App\Models;

use CodeIgniter\Model;

class Post extends Model
{
    protected $table            = 'post';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'author_id',
        'category_id',
        'title',
        'slug',
        'content',
        'featured_image',
        'tags',
        'meta-keywords',
        'meta-description',
        'visibility'
    ];


    public function getAll()
    {
        return $this->db->table('post')
            ->join('categorypost', 'categorypost.id = post.id')
            ->get()
            ->getResultArray();
    }
}
