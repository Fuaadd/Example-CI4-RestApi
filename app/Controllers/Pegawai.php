<?php

namespace App\Controllers;

use Codeigniter\API\ResponseTrait;

use App\Models\ModelPegawai;

class Pegawai extends BaseController
{
    use ResponseTrait;
      
    function __construct()
    {
        $this->model = new ModelPegawai(); 
    }

    public function index()
    {
      $data=$this->model->orderBy('nama','asc')->findAll();
      return $this->respond($data,200); 
    }

    public function show($id=null)
    {
        $data=$this->model->where('id',$id)->findAll();
        if($data){
            return $this->respond($data,200);
        }else
        {
            return $this->failNotFound("Data tidak ditemukan untuk id $id"); 
        }
    }

    public function create()
    {

        //$data = 
        //[
        //   'nama' => $this->request->getVar('nama'),
        //  'email' => $this->request->getVar('email'),
        //];
        //$this->model->save($data);
        
        $data=$this->request->getPost();

        if (!$this->model->save($data)){
            return $this->fail($this->model->errors());
        }
        $response = 
        [
            'status' => 201,
            'error' => null,
            'message' => 
            [
              'success' => 'Insert data pegawai berhasil'
            ]
         ] ;
         return $this->respond($response); 
    }
   
    public function update($id=null)
    {
       //$data=$this->request->getRawInput();
       //$data['id']=$id;  


       //$isExists=$this->model->where('id',$id)->findAll();
       //if(!$isExists) 
       //{
       //    return $this->failNotFound("Data tidak ditemukan untuk id $id");
       //}  
       
       //if (!$this->model->save($data)) {//jika error
       //return $this->fail($this->model->errors()); 
       //}
       //$response = [
       //    'status'  => 200,  
       //   'error'   => null,
       //    'messages' => [
       //    'success' => "Data pegawai id $id sudah di update"
        //   ]
       //];
       //return $this->respond($response);
       if(!$this->model->find($id)){
           return $this->respond(
               ['status'=>false,
               'message'=>'data tidak ditemukan !']);
       }   
        $data = 
        [
           'nama' => $this->request->getVar('nama'),
          'email' => $this->request->getVar('email'),
        ];
        if($this->model->update($id,$data)){
            return $this->respond(
                ['status'=>true,
                'message'=>'data berhasil di update !'],200);
             
        }

    }

    public function delete ($id=null)
    {
        $data = $this->model->where('id',$id)->findAll();
        if($data) {
            $this->model->delete($id);
            $response =[
                'status' => 200,
                'error'  => null,
                'message' =>[
                    'success' => 'data berhasil dihapus..!'
                ]
                ];
                return $this->respondDeleted($response); 
        }
        else{
            return $this->failNotFound('Data tidak ditemukan..!');
        }

          
    }
}
