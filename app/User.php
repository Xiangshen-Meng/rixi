<?php namespace App;

use DB;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    const DEFAULT_AVATAR = 'avatar0.png';

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * All topics that user created.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function topics()
    {
        return $this->hasMany('App\Topic');
    }

    /**
     * All comments user created.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * All matomes user created.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function matomes()
    {
        return $this->hasMany('App\Matome');
    }

    /**
     * Return all the favorite topics
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function favorites()
    {
        return $this->belongsToMany('App\Topic', 'favorites', 'user_id', 'topic_id')->withTimestamps();
    }

    /**
     * Return all the comments user voted.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function votes()
    {
        return $this->belongsToMany('App\Comment', 'votes', 'user_id', 'comment_id')->withTimestamps();
    }

    /**
     * Check whether favorite topic.
     *
     * @param $topic_id
     * @return bool
     */
    public function hasFavorite($topic_id)
    {
        return DB::table('favorites')->where('user_id', $this->id)->where('topic_id', $topic_id)->first();
    }

    /**
     * Check whether favorite comment.
     *
     * @param $comment_id
     * @return mixed
     */
    public function hasVote($comment_id)
    {
        return DB::table('votes')->where('user_id', $this->id)->where('comment_id', $comment_id)->first();
    }
    /**
     * Get user avatar name, return DEFAULT_AVATAR if null
     * @return mixed|string
     */
    public function getAvatarName(){
        return $this->avatar ? $this->avatar : self::DEFAULT_AVATAR;
    }
}
