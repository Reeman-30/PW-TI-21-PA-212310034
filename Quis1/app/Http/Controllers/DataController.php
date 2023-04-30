<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller {

    public function index() {
        $data = array();
        $students[] = array("npm" => 212310034, "nama" => "Rayyan Pratama", "kota" => "Bogor", "jenis-kelamin" => "Laki-laki");
        $students[] = array("npm" => 212310035, "nama" => "Adrian Adhari", "kota" => "Bogor", "jenis-kelamin" => "Laki-laki");
        $students[] = array("npm" => 212310040, "nama" => "Mohammad Fawaz", "kota" => "Bogor", "jenis-kelamin" => "Laki-laki");
        $students[] = array("npm" => 212310048, "nama" => "Nagasa Anandes", "kota" => "Bogor", "jenis-kelamin" => "Laki-laki");
        $students[] = array("npm" => 212310030, "nama" => "Daphne Holy", "kota" => "Bogor", "jenis-kelamin" => "Perempuan");
        $students[] = array("npm" => 212310054, "nama" => "Hera Dwi Pradita", "kota" => "Bogor", "jenis-kelamin" => "Perempuan");
        $students[] = array("npm" => 212310049, "nama" => "Melani", "kota" => "Bogor", "jenis-kelamin" => "Perempuan");
        $data['students'] = $students;

        return view('modules.dashboard')->with("data", $data);
    }

}
