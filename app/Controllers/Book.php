<?php

namespace App\Controllers;

class Book extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function insert()
    {
        $data = ['name' =>$this->request->getVar('name'),
                 'phone' =>$this->request->getVar('phone'),
                 'place' =>$this->request->getVar('place'),
                 'budget' =>$this->request->getVar('budget'),
                 'idea' =>$this->request->getVar('idea'),];
        $db = \Config\Database::connect();
        $builder = $db->table('booking');

        $builder->insert($data);
        return redirect()->to('success');
    
    }

}