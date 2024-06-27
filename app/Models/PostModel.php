<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
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
            ->join('categorypost', 'categorypost.id = post.category_id')
            ->get()
            ->getResultArray();
    }

    public function recentPost()
    {
        return $this->db->table('post')
            ->where('visibility', 1)
            ->limit(6, 1)
            ->orderBy('created_at', 'desc')
            ->get()
            ->getResultArray();
    }
}
