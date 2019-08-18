<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Models\Notice;
use App\Models\Resident;
use App\Models\Vehicle;
use App\Models\Classified;
use App\Models\Apartment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'residentsCount' => $this->residentsCount(),
            'vehiclesCount' => $this->vehiclesCount(),
            'residentsLatest' => $this->getLatestResidents(),
            'lettersCount' => $this->lettersCount(),
            'noticesLatest' => $this->getLatestNotices(),
            'classifieds' => $this->getLatestClassifieds()
        ]);
    }

    public function residentsCount()
    {
        $owners = Apartment::where('condition_id', 3)->count();
        $residents = Resident::all()->count();
        return $owners + $residents;
    }

    public function vehiclesCount()
    {
        return Vehicle::all()->count();
    }

    public function lettersCount()
    {
        return Letter::where('status', '=', 'portaria')->count();
    }

    public function getLatestResidents()
    {
        return Resident::orderBy('created_at', 'desc')->limit(8)->get();
    }

    public function getLatestNotices()
    {
        return Notice::orderBy('created_at', 'desc')->limit(8)->get();
    }

    public function getLatestClassifieds()
    {
        return Classified::orderBy('created_at', 'desc')->limit(8)->get();
    }
}
