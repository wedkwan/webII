<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Borrowing extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'book_id', 'borrowed_at', 'returned_at'];
    function user(){
      return $this->belongsTo(User::class);
    }
    function book(){
        return $this->belongsTo(Book::class);

    }
}
