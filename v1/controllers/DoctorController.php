<?php

namespace app\controllers;

use app\Models\Doctor;
use Illuminate\Support\Facades\Redirect;

class DoctorController
{
    public function index()
    {
        render_view('home', [
            'doctors' => Doctor::all()
        ]);
    }

    public function add()
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            Doctor::create([
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'chucvu' => $_POST['chucvu'],
                'khoa' => $_POST['khoa'],
                'bangcap' => $_POST['bangcap'],
            ]);

            redirect(BASE_URL_PATH);
        }
        render_view('add_doctor');
    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            echo 'Khong tim thay id';
            exit;
        }

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $doctor->name = $_POST['name'];
            $doctor->email = $_POST['email'];
            $doctor->password = $_POST['password'];
            $doctor->chucvu = $_POST['chucvu'];
            $doctor->khoa = $_POST['khoa'];
            $doctor->bangcap = $_POST['bangcap'];
            $doctor->save();
            redirect(BASE_URL_PATH);
        }

        render_view('edit_doctor', ['doctor' => $doctor]);
    }

    public function delete($id){
        $doctor = Doctor::find($id);

        if (!$doctor) {
            echo 'Khong tim thay id';
            exit;
        }

        $doctor->delete();
        
        redirect(BASE_URL_PATH);

    }


}
