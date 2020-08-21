<?php

namespace frontend\resource;

use common\models\Post as ModelsPost;


class Post extends ModelsPost{

    public function fields()
    {
        return ['id', 'title', 'body'];
    }

    public function extraFields()
    {                                                                                           
        return ['comments', 'created_at', 'updated_at', 'updated_by'];
    }


    /**
     * This method aroginally are in common\models\Post
     * But, is necessary override here because i need change the behavior
     * of how fields of comment is retrived en post endpoint
     */
    public function getComments()
    {
        return $this->hasMany(Comment::class, ['post_id' => 'id']);
        // Comment::class, ['post_id' => 'id']
    }
}