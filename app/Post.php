<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function tag()
    {
    	return $this->belongsToMany('\App\Tag');//多对多的关系，一个文章有多个标签，一个标签也可以有多篇文章表示这个表与标签表的关系
    }

    /**
     * post和cate是属于关系   cate和post是一对多的关系
     */
    public function cate()
    {
    	return $this->belongsTo('\App\Cate');//一对一的关系
    }

    public function user()
    {
        return $this->belongsTo('\App\User');//一对一的关系
    }
}
