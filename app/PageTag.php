<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\PageTag
 *
 * @property integer $page_id
 * @property integer $tag_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\PageTag wherePageId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PageTag whereTagId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PageTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PageTag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PageTag extends Model
{
    //
}
