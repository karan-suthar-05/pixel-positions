<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stringable;

class Job extends Model
{
    use HasFactory;

    public function tag(string $name)
    {
        $tag = Tag::firstOrCreate(['name' => $name]);
        $this->tags()->attach($tag);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function title()
    {
        // return Attribute::get(fn($value)=>Str::title($value));
    }
}
