<?php

namespace frontend\resource;

use common\models\Comment as ModelsComment;

class Comment extends ModelsComment{

    public function fields(){
        return ['id', 'title', 'body', 'post_id'];
    }

    public function extraFields()
    {
        return ['post'];
    }

    /**
     * Override here because need chage de behavior of this method
     */
    public function getPost()
    {
        return $this->hasOne(Post::class, ['id' => 'post_id']);
    }
}