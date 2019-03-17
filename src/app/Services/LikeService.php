<?php
declare(strict_types=1);

namespace App\Services;


use App\DataProvider\LikeRepositoryInterface;

class LikeService
{
    private $like;

    public function __construct(LikeRepositoryInterface $like)
    {
        $this->like = $like;
    }

    public function switch(int $postId, int $userId, string $createdAt) : int
    {
        return $this->like->switch($postId, $userId, $createdAt);
    }
}
