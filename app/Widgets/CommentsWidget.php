<?php

namespace App\Widgets;

use App\Repositories\CommentRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CommentsWidget extends BaseWidget
{

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     * @param CommentRepository $commentRepository
     * @return Factory|View
     */
    public function run(CommentRepository $commentRepository)
    {
        $count = count($commentRepository->active());
        $string = $count > 1 ? __('voyager::dimmer.comments') : __('voyager::dimmer.comment');

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-chat',
            'title' => "{$count} {$string}",
            'text' => __('voyager::dimmer.comment_text', ['count' => $count, 'string' => Str::lower($string)]),
            'image' => "https://source.unsplash.com/collection/4819637/1920x1080/",
        ]));
    }

    protected function shouldDisplayButton()
    {
        if (!Auth::user()->hasRole('admin')) {
            return;
        }
        parent::shouldDisplayButton();
    }
}
