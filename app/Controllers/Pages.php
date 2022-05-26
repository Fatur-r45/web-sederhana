<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $faker = \Faker\Factory::create();
        $data = [
            'titel' => 'Home | Fatur_slg',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return View('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'titel' => 'About Me'
        ];

        echo View('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'titel' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'kp. pabuaran rt/rw. 02/01 ',
                    'kota' => 'Sukabumi'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'jln. Setiabudi no. 193',
                    'kota' => 'Bandung'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
