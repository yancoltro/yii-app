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
        return ['created_at', 'updated_at', 'updated_by'];
    }
}