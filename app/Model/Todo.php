<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    //
    // guarded 를 하면 다 들어간다.
    protected $fillable = ['title', 'content'];
//    protected $guarded = [];

    // 기본은 id
    // 라우트 키 이름을 가져온다.
    // 라우트 키가 아이디가 아니라 '해당' 필드 로 변경된다.
//     public function getRouteKeyName()
//     {
//         return 'title';
//     }



}
