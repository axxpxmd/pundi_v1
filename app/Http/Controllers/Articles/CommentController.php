<?php

namespace App\Http\Controllers\Articles;

use Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

// Models
use App\Models\Comment;
use App\Models\Articles;
use App\Models\SubComment;

class CommentController extends Controller
{
    public function saveComment(Request $request)
    {
        $user_id    = Auth::user()->id;
        $article_id = $request->article_id;
        $comment    = $request->comment;

        $commentStore = new Comment();
        $commentStore->content    = $comment;
        $commentStore->article_id = $article_id;
        $commentStore->user_id    = $user_id;
        $commentStore->save();

        // get id article
        $article = Articles::select('id', 'title')->where('id', $article_id)->first();
        $params = str_replace(' ', '-', $article->title);

        return redirect()->route('article', $params);
    }

    public function saveSubComment(Request $request)
    {
        $user_id    = Auth::user()->id;
        $article_id = $request->article_id;
        $comment_id = $request->comment_id;
        $comment    = $request->sub_comment;

        $subCommentStore = new SubComment();
        $subCommentStore->user_id    = $user_id;
        $subCommentStore->article_id = $article_id;
        $subCommentStore->comment_id = $comment_id;
        $subCommentStore->content    = $comment;
        $subCommentStore->save();

        // get id article
        $article = Articles::select('id', 'title')->where('id', $article_id)->first();
        $params = str_replace(' ', '-', $article->title);

        return redirect()->route('article', $params);
    }
}
