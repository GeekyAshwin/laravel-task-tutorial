<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function showCities()
    {
        $cities = $this->getCitiesDataWithCustomerCount();
        return view('city.index', compact('cities'));
    }

    public function getCitiesDataWithCustomerCount()
    {
        $cities = ['Dehradun', 'Noida', 'Gurgaon'];
        $cityData = [];
        foreach ($cities as $key => $city) {
            $cityData[$city] = DB::select("select count(id) from customers where city = '$city'");
        }
//        $dehradunData = DB::select("select count(id) from customers where city = 'Dehradun'");
//        $noidaData = DB::select("select count(id) from customers where city = 'Noida'");
//        $gurgaonData = DB::select("select count(id) from customers where city = 'Gurgaon'");


        $totalDehradunCustomers = collect(collect($cityData[0])->toArray()[0])->toArray()['count(id)'];
        dd($totalDehradunCustomers);
        $totalNoidaCustomers = collect(collect($noidaData)->toArray()[0])->toArray()['count(id)'];
        $totalGurgaonCustomers = collect(collect($gurgaonData)->toArray()[0])->toArray()['count(id)'];
        return [
            'Dehradun' => $totalDehradunCustomers,
            'Noida' => $totalNoidaCustomers,
            'Gurgaon' => $totalGurgaonCustomers,
        ];
    }

    public function downloadPdf()
    {
        $cities = $this->getCitiesDataWithCustomerCount();
        $pdf = Pdf::loadView('pdf.city', compact('cities'));
        return $pdf->download('city.pdf');
    }
}
