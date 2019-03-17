<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LikeService;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{
    private $like;

    public function __construct(LikeService $like)
    {
        $this->like = $like;
    }

    public function switch(Request $request)
    {
        $this->like->switch(
            (int)$request->get('post_id'),
            (int)$request->get('user_id'),
            Carbon::now()->toDateTimeString(),
        );
        return response('', Response::HTTP_OK);
    }
}
