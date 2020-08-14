<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\SalarieModel;
use App\Models\CourantModel;
 
class Salarie extends Controller
{
 
    public function index()
    {    
        $model = new UserModel();
 
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('users', $data);
    }    
 
    public function clientsalarie()
    {    
        return view('clients/clientsalarie');
    }
 
    public function addClientSalarie()
    {  
 
        helper(['form', 'url']);
         
        $model1 = new SalarieModel();
        
 
        $data1 = [
 
            'nom' => $this->request->getVar('nom'),
            'prenom'  => $this->request->getVar('prenom'),
            'adresse' => $this->request->getVar('adresse'),
            'telephone'  => $this->request->getVar('telephone'),
            'email'  => $this->request->getVar('email'),
            'carte_identite' => $this->request->getVar('carte_identite'),
            'validite_identite'  => $this->request->getVar('validite_identite'),
            'profession' => $this->request->getVar('profession'),
            'nom_entreprise'  => $this->request->getVar('nom_entreprise'),
            'adresse_entreprise' => $this->request->getVar('adresse_entreprise'),
            ];

        $save1 = $model1->insert($data1);
            
        $model2 = new CourantModel();

        $data2 = [
 
            'idClientSalarie' => $save1,
            'numero_compte' => $this->request->getVar('numero_compte'),
            'cle_rib'  => $this->request->getVar('cle_rib'),
            'numero_agence' => $this->request->getVar('numero_agence'),
            'date_ouverture'  => $this->request->getVar('date_ouverture'),
            'solde'  => $this->request->getVar('solde'),
            'salaire' => $this->request->getVar('salaire'),
            'nom_employeur'  => $this->request->getVar('nom_employeur'),
            'rs_employeur' => $this->request->getVar('rs_employeur'),
            'id_employeur'  => $this->request->getVar('id_employeur'),
            'adresse_employeur' => $this->request->getVar('adresse_employeur'),
            'agios' => $this->request->getVar('agios'),
            ];

        // var_dump($data1);
        // die();
        $save2 = $model2->insert($data2);
 
        return redirect()->to( base_url('public/Salarie/clientsalarie') );
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