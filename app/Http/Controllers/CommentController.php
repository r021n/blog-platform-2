<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(
        StoreCommentRequest $request,
        Article $article,
    ): RedirectResponse {
        $article->comments()->create([
            "user_id" => Auth::id(),
            "parent_id" => $request->parent_id,
            "body" => $request->body,
        ]);

        return back()->with("success", "komentar berhasil ditambahkan");
    }

    public function destroy(Comment $comment): RedirectResponse
    {
        abort_unless(Auth::id() === $comment->user_id, 403);
        $comment->delete();
        return back()->with("success", "komentar berhasil dihapus");
    }
}
