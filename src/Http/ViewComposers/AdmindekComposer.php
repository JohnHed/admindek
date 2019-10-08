<?php

namespace Dashboards\Admindek\Http\ViewComposers;

use Illuminate\View\View;
use Dashboards\Admindek\Admindek;

class AdmindekComposer
{
    private $admindek;

    public function __construct(Admindek $admindek) {
        $this->admindek = $admindek;
    }

    public function compose(View $view)
    {
        $view->with('admindek', $this->admindek);
    }
}
