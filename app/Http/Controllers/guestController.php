<?php namespace App\Http\Controllers;


use App\Models\Blog;
use Illuminate\Support\MessageBag;
use Sentinel;
use Analytics;
use View;
use Spatie\Activitylog\Models\Activity;
use Yajra\DataTables\DataTables;
use Charts;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Analytics\Period;
use File;

class guestController extends Controller
{
    public function showHome()
    {
        return view('guest.index' );
    }
}
