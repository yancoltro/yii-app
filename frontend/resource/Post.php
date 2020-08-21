<?php

namespace frontend\resource;

use common\models\Post as ModelsPost;

class Post extends ModelsPost{

    public function fields()
    {
        return ['id', 'title', 'body', 'created_at'];
    }
}