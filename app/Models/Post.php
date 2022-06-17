<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected function Excerpt(): Attribute
    {
        return Attribute::make(
            get: fn () => substr($this->content, 0, 50),
        );
    }

    protected function PublishedAt(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->created_at->diffForHumans(),
        );
    }
}
