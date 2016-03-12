<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Page
 *
 * @property integer $id
 * @property integer $user_id
 * @property boolean $active
 * @property string $title
 * @property string $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Page whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Page extends Model
{
    //
}
