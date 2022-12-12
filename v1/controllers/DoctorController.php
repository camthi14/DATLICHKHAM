<?php

namespace app\controllers;

use app\Models\Doctor;

class DoctorController{
    public function index() {
        render_view('home', [
            'doctors' => Doctor::all()
        ]);
    } 

    // public function showAddDoctor()
    // {
    //     $data = [
    //         'title' => 'Thêm bác sĩ',
    //         'error' => session_get_flash('error'),
    //         'post_url' => '/doctors',
    //         'doctors' => new Doctor()
    //     ];

    //     render_view('edit', $data);
    // }
    
}
