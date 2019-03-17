<?php
declare(strict_types=1);

namespace App\DataProvider;

interface LikeRepositoryInterface
{
    public function switch(int $postId, int $userId, string $createdAt) : int;
}