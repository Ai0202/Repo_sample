<?php
declare(strict_types=1);

namespace App\DataProvider;

use App\DataProvider\Eloquent\Like;

class HogeRepository implements LikeRepositoryInterface
{
    private $like;

    public function __construct(Like $like)
    {
        $this->like = $like;
    }

    public function switch(int $postId, int $userId, string $createdAt) : int
    {
        $hoge = rand(0, 100);
        echo $hoge . "\n";
        return $hoge;
    }
}