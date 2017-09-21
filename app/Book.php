<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //

//    protected $guarded = ['id'] ;

    // fillable or guarded
    // insert / update で製作者の意図していない代入が発生しないようにするために存在しています。
    // fillable は代入して良いものを改めて提示する手法でホワイトリスト。
    // guarded はブラックリストで許可しないものだけを列挙する方法。
    // NOTE:
    // fillable / guarded は片方だけ設定。両方はできない。
    // 人間にとっても無駄でもある
}
