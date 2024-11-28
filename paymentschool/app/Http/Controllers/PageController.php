<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PageController extends Controller
{
    public function main()
    {
        return view("main", ["key" => "main"]);
    }

    public function login()
    {
        return view("login", ["key" => "login"]);
    }

    public function dashboard()
    {
        return view("dashboard", ["key" => "dashboard"]);
    }
 
    public function datamahasiswa()
    {
        return view("datamahasiswa", ["key" => "datamahasiswa"]);
    }

    public function datatagihan()
    {
        return view("datatagihan", ["key" => "datatagihan"]);
    }


    public function daftartransaksi()
    {
        return view("daftartransaksi", ["key" => "daftartransaksi"]);
    }

    public function logtransaksi()
    {
        return view("logtransaksi", ["key" => "logtransaksi"]);
    }

    public function report()
    {
        return view("report", ["key" => "report"]);
    }

    public function dashboardadmin()
    {
        return view("dashboardadmin", ["key" => "dashboardadmin"]);
    }

    public function admininstansi()
    {
        return view("admininstansi", ["key" => "admininstansi"]);
    }

    public function daftarinstansi()
    {
        return view("daftarinstansi", ["key" => "daftarinstansi"]);
    }

   public function daftartransaksiadmin()
{

    $dummyData = collect([
        (object) ['id' => 1, 'kode_instansi' => '001', 'nama_instansi' => 'Universitas Kristen Duta Wacana'],
            (object) ['id' => 2, 'kode_instansi' => '002', 'nama_instansi' => 'Universitas Gadjah Mada'],
            (object) ['id' => 3, 'kode_instansi' => '003', 'nama_instansi' => 'Universitas Atma Jaya'],
            (object) ['id' => 4, 'kode_instansi' => '004', 'nama_instansi' => 'Universitas Santha Darma'],
            (object) ['id' => 5, 'kode_instansi' => '005', 'nama_instansi' => 'Universitas Negeri Yogyakarta'],
            (object) ['id' => 6, 'kode_instansi' => '006', 'nama_instansi' => 'Universitas Pembangunan Negeri Veteran Yogyakarta'],
    ]);

    $currentPage = request()->get('page', 1);

    $perPage = 5;

    $dataInstansi = new LengthAwarePaginator(
        $dummyData->forPage($currentPage, $perPage),
        $dummyData->count(),
        $perPage,
        $currentPage,
        ['path' => request()->url()]
    );

    return view("daftartransaksiadmin", [
        "key" => "daftartransaksiadmin",
        "dataInstansi" => $dataInstansi
    ]);
}


    public function logtransaksiadmin()
    {
        $dummyData = collect([
            (object) ['id' => 1, 'kode_instansi' => '001', 'nama_instansi' => 'Universitas Kristen Duta Wacana'],
            (object) ['id' => 2, 'kode_instansi' => '002', 'nama_instansi' => 'Universitas Gadjah Mada'],
            (object) ['id' => 3, 'kode_instansi' => '003', 'nama_instansi' => 'Universitas Atma Jaya'],
            (object) ['id' => 4, 'kode_instansi' => '004', 'nama_instansi' => 'Universitas Santha Darma'],
            (object) ['id' => 5, 'kode_instansi' => '005', 'nama_instansi' => 'Universitas Negeri Yogyakarta'],
            (object) ['id' => 6, 'kode_instansi' => '006', 'nama_instansi' => 'Universitas Pembangunan Negeri Veteran Yogyakarta'],
        ]);

        $currentPage = request()->get('page', 1);
        $perPage = 5;

        $dataInstansi = new LengthAwarePaginator(
            $dummyData->forPage($currentPage, $perPage),
            $dummyData->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );

        return view("logtransaksiadmin", [
            "key" => "logtransaksiadmin",
            "dataInstansi" => $dataInstansi
        ]);
    }

    

    






}