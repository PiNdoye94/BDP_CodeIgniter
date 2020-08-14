<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class CourantModel extends Model
{
    protected $table = 'comptecourant';
    
 
    protected $allowedFields = ['numero_compte', 'cle_rib', 'numero_agence', 'date_ouverture', 'solde', 'salaire', 'nom_employeur', 'rs_employeur', 'id_employeur', 'adresse_employeur', 'agios', 'idClientSalarie'];
}
										