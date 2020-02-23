<?php


namespace App\Widgets;

use TCG\Voyager\Widgets\BaseDimmer;

abstract class BaseWidget extends BaseDimmer
{
    /**
     * BaseWidget constructor.
     */
    public function __construct()
    {
        $this->shouldDisplayButton();
    }


    protected function shouldDisplayButton()
    {
        $this->config = [
            'button' => [
                'text' => __('voyager::dimmer.comment_link_text'),
                'link' => route('voyager.comments.index'),
            ],
        ];
    }
}
