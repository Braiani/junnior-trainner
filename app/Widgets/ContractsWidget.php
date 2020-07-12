<?php

namespace App\Widgets;

use App\Repositories\ContractRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;
use TCG\Voyager\Widgets\BaseDimmer;

class ContractsWidget extends BaseDimmer
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
     * @param ContractRepository $contractRepository
     * @return Factory|View
     */
    public function run(ContractRepository $contractRepository)
    {
        $count = count($contractRepository->all());
        $string = $count > 1 ? __('voyager::dimmer.contracts') : __('voyager::dimmer.contract');

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-group',
            'title' => "{$count} {$string}",
            'text' => __('voyager::dimmer.contract_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.contract_link_text'),
                'link' => route('voyager.contracts.index'),
            ],
            'image' => "https://source.unsplash.com/collection/4648671/1920x1080/",
        ]));
    }

    public function shouldBeDisplayed()
    {
        return Auth::user()->hasRole('admin');
    }


}
