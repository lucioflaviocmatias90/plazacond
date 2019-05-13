<?php

namespace App\Http\Controllers;

use App\Letter;
use App\Notice;
use App\Owner;
use App\Resident;
use App\Vehicle;
use App\Classified;
use App\Apartment;
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
        $owners = Apartment::where('condition', '=', 'residindo')->count();
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
