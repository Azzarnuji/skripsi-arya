<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $sendData = [
            'dataMeta'=>$this->anyHelpers->createMeta()->getMeta(),
            'daftarRental'=>$this->AdtModel->where('status','non')->findAll(),
            'highlight'=>$this->AdtModel->where('status','highlight')->first(),
            'reviews'=>$this->Reviews->findAll()
        ];
        return view('home/index',$sendData);
    }
    public function about(){
        $sendData = [
            'dataMeta'=>$this->anyHelpers->createMeta('about')->getMeta()
        ]; 
        return view('home/about',$sendData);

    }
    public function rental($id = null){
        if ($id != null){
            $sendData = [
                'dataMeta'=>$this->anyHelpers->createMeta('rental',$id)->getMeta(),
                'id'=>$id,
                'rental'=>$this->AdtModel->where('idMobil',$id)->first()
            ];
            if ($sendData['rental'] == null){
                return redirect()->to('/');
            }else{

                return view('home/detail',$sendData);
            }
        }else{
            $sendData = [
                'dataMeta'=>$this->anyHelpers->createMeta('rental')->getMeta(),
                'highlight'=>$this->AdtModel->where('status','highlight')->first(),
                'daftarRental'=>$this->AdtModel->where('status','non')->findAll()
                
            ];
            return view('home/car-list',$sendData);
        }
    }

}
