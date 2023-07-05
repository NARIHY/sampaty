<?php
namespace App\Models;

class Text 
{
    public function excerpt(string $content, int $limit = 750)
    {
        if(mb_strlen($content) <= $limit) {
            return $content;
        }
        $lastSpace = mb_strpos($content, ' ', $limit);
        $excerpt = mb_substr($content, 0, $lastSpace) . '...';
        $filtre = $this->filtre($excerpt);
        return $filtre;
    }

    public function miniExcerpt(string $content, int $limit = 100)
    {
        if(mb_strlen($content) <= $limit) {
            return $content;
        }
        $lastSpace = mb_strpos($content, ' ', $limit);
        $miniExcerpt = mb_substr($content, 0, $lastSpace) . '...';
        $filtre = $this->filtre($miniExcerpt);
        return $filtre;
    }
    public function filtre ($content) : ?string
    {
        $ratsy = ['fory', 'lataka','kindy', 'lelena', 'lele','kindindreniny', 'masosopory', 'msspr', 'sspr', 'kindynalika','ryleleniny'];
        $filtre = str_ireplace($ratsy, ' ', $content); 
        return nl2br($filtre);

    }

}