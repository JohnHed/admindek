<?php

namespace Dashboards\Admindex\Http\ViewComposers;

use Illuminate\View\View;
use Dashboards\Admindex\Admindex;

class IrisComposer
{
    /**
     * @var AdminLte
     */
    private $admin;

    public function __construct(
        Admindex $admin
    ) {
        $this->admin = $admin;
    }

    public function compose(View $view)
    {
        $view->with('admin', $this->admin);
    }
}
