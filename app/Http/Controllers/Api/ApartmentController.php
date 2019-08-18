<?php

namespace App\Http\Controllers\Api;

use App\Apartment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApartmentController extends Controller
{
    private $apartment;

    public function __construct(Apartment $apartment)
    {
        $this->apartment = $apartment;
    }


    public function index()
    {
        return $this->apartment->all();
    }
}
