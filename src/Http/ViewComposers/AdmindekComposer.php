<?php

namespace Dashboards\Admindek\Http\ViewComposers;

use Illuminate\View\View;
use Dashboards\admindek\Admindek;

class admindekComposer
{
    private $admindek;

    public function __construct(
        admindek $admindek
    ) {
        $this->admindek = $admindek;
    }

    public function compose(View $view)
    {
        $view->with('admindek', $this->admindek);
    }
}
