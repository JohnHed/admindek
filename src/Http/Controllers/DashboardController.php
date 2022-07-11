<?php

namespace Johnhed\Admindek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return redirect()->route('admindek.index');
    }
}
