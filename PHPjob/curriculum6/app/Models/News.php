<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    // 以下を追記
   protected $guarded = ['id'];


   public static $rules = [
       'title' => 'required',
       'body' => 'required',
   ];

   // Newsモデルに関連付けを行う
   public function histories()
   {
     return $this->hasMany('App\Models\History');
   }
}
