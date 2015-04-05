<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title', 'description'];

    /**
     * The creater of the topic.
     *
     * @var User
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * The followers of the topic.
     *
     * @return mixed
     */
    public function followers()
    {
        return $this->belongsToMany('App\User', 'favorite');
    }
}
