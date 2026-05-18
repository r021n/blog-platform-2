<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function index(): View
    {
        $comments = Comment::with("user", "article")->latest()->paginate(15);

        return view("admin.comments.index", compact("comments"));
    }

    public function destroy(Comment $comment): RedirectResponse
    {
        $comment->delete();
        return back()->with("success", "komentar berhasil dihapus");
    }
}
