<?php

namespace Dashboards\Admindek;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return redirect()->route('admindek.index');
    }
}
