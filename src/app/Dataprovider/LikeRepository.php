<?php
declare(strict_types=1);

namespace App\DataProvider;

use App\DataProvider\Eloquent\Like;

class LikeRepository implements LikeRepositoryInterface
{
    private $like;

    public function __construct(Like $like)
    {
        $this->like = $like;
    }

    public function switch(int $postId, int $userId, string $createdAt) : int
    {
        return \DB::transaction(
            function () use ($postId, $userId, $createdAt) {
                $count = Like::where('post_id', $postId)
                    ->where('user_id', $userId)
                    ->count();

                if ($count == 0) {
                    Like::create([
                        'post_id' => $postId,
                        'user_id' => $userId,
                        'created_at' => $createdAt,
                    ]);
                    return 1;
                }

                Like::where('post_id', $postId)
                    ->where('user_id', $userId)
                    ->delete();
                return 0;
            }
        );
    }
}