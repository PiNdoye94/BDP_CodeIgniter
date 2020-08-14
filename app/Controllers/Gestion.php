<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\SalarieModel;
use App\Models\CourantModel;
 
class Gestion extends Controller
{
 
    public function index()
    {    
        $model = new UserModel();
 
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('users', $data);
    }    
 
    public function gestionclients()
    {    
        return view('gestionclients');
    }
 
    public function edit($id = null)
    {
      
     $model = new UserModel();
 
     $data['user'] = $model->where('id', $id)->first();
 
     return view('public/index.php/edit-user', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new UserModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
 
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('public/index.php/users') );
    }
 
    public function delete($id = null)
    {
 
     $model = new UserModel();
 
     $data['user'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('public/index.php/users') );
    }
}