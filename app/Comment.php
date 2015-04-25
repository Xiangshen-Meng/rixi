<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    protected $fillable = ['topic_id', 'content'];

    /**
     * Return the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Return the Topic.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function topic()
    {
        return $this->belongsTo('App\Topic');
    }

    /**
     * Return human readable time.
     *
     * @return mixed
     */
    public function humanCreatedTime()
    {
        return $this->created_at->diffForHumans();
    }

    /**
     * Return the users who voted this comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function voters()
    {
        return $this->belongsToMany('App\User', 'votes', 'comment_id', 'user_id')->withTimestamps();
    }

    /**
     * Cleanup votes of this comment.
     *
     * @return mixed
     */
    public function cleanupVote()
    {
        return \DB::table('votes')->where('comment_id', $this->id)->delete();
    }

    /**
     * Return the number of voter(vote).
     *
     * @return mixed
     */
    public function countVoters()
    {
        return \DB::table('votes')->where('comment_id', $this->id)->count();
    }

    /**
     * Return no format content.
     *
     * @return string
     */
    public function noFormatContent()
    {
        return strip_tags($this->content);
    }
}
