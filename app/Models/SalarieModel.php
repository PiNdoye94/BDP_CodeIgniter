<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class SalarieModel extends Model
{
    protected $table = 'clientsalarie';
    
 
    protected $allowedFields = ['nom', 'prenom', 'telephone', 'email', 'carte_identite', 'validite_identite', 'profession', 'nom_entreprise', 'adresse_entreprise'];
}