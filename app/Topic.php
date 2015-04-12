<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['title', 'description'];

    /**
     * The creator of the topic.
     *
     * @var User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * The users favorite the topic.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function supporters()
    {
        return $this->belongsToMany('App\User', 'favorites', 'topic_id', 'user_id')->withTimestamps();
    }

    /**
     * Return the number of supporter(favorite).
     *
     * @return mixed
     */
    public function countSupporters()
    {
        return \DB::table('favorites')->where('topic_id', $this->id)->count();
    }

    /**
     * Return the comments belongs to this topic.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
