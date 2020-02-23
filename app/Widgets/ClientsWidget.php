<?php

namespace App\Widgets;

use App\Repositories\ClientRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;
use TCG\Voyager\Widgets\BaseDimmer;

class ClientsWidget extends BaseDimmer
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
     * @param ClientRepository $clientRepository
     * @return Factory|View
     */
    public function run(ClientRepository $clientRepository)
    {
        $count = count($clientRepository->all());
        $string = $count > 1 ? __('voyager::dimmer.clients') : __('voyager::dimmer.client');

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-group',
            'title' => "{$count} {$string}",
            'text' => __('voyager::dimmer.client_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.client_link_text'),
                'link' => route('voyager.clients.index'),
            ],
            'image' => "https://source.unsplash.com/collection/8353395/1920x1080/",
        ]));
    }

    public function shouldBeDisplayed()
    {
        return Auth::user()->hasRole('admin');
    }


}
