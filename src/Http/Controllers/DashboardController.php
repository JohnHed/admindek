<?php

namespace Dashboards\Admindex;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return redirect()->route('admindex.index');
    }
}
