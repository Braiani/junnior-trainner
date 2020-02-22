<?php

namespace App\Widgets;

use App\Repositories\CommentRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Str;
use Illuminate\View\View;
use TCG\Voyager\Widgets\BaseDimmer;

class CommentsWidget extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

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
            'button' => [
                'text' => __('voyager::dimmer.comment_link_text'),
                'link' => route('voyager.comments.index'),
            ],
            'image' => "https://source.unsplash.com/collection/4819637/1920x1080/",
        ]));
    }
}
