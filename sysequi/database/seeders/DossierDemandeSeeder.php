<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\DossierDemande;

class DossierDemandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         //Empty the table first
         DossierDemande::truncate();

         
        //Define data
       $dossierDemandes = [
        ['numero_demande'=>'0001','date_demande'=>'2021-01-30','type_demande'=>'','montant_frais'=>'0.00','refugie_reconnu'=>'1','actiris'=>'1','vdab'=>'0','statut'=>'en cours','created_at'=>'2022-08-19','updated_at'=>'2022-08-19'],
        ['numero_demande'=>'0002','date_demande'=>'2001-11-23','type_demande'=>'','montant_frais'=>'67','refugie_reconnu'=>'0','actiris'=>'1','vdab'=>'1','statut'=>'1','created_at'=>'2001-11-23', 'updated_at'=>'2002-04-25'],
        /**['numero_demande'=>'0003','date_demande'=>'2020-01-05','type_demande'=>'','montant_frais'=>'','refugie_reconnu'=>'','actiris'=>'','vdab'=>'','statut'=>'','created_at', 'updated_at'],
        ['numero_demande'=>'0004','date_demande'=>'2016-05-10','type_demande'=>'','montant_frais'=>'','refugie_reconnu'=>'','actiris'=>'','vdab'=>'','statut'=>'','created_at', 'updated_at'],
        ['numero_demande'=>'0005','date_demande'=>'2001-12-20','type_demande'=>'','montant_frais'=>'','refugie_reconnu'=>'','actiris'=>'','vdab'=>'','statut'=>'','created_at', 'updated_at'],
        ['numero_demande'=>'0006','date_demande'=>'2004-07-22','type_demande'=>'','montant_frais'=>'','refugie_reconnu'=>'','actiris'=>'','vdab'=>'','statut'=>'','created_at', 'updated_at'],
        ['numero_demande'=>'0007','date_demande'=>'2019-03-30','type_demande'=>'','montant_frais'=>'','refugie_reconnu'=>'','actiris'=>'','vdab'=>'','statut'=>'','created_at', 'updated_at'],
        ['numero_demande'=>'0008','date_demande'=>'2019-03-30','type_demande'=>'','montant_frais'=>'','refugie_reconnu'=>'','actiris'=>'','vdab'=>'','statut'=>'','created_at', 'updated_at'],
        ['numero_demande'=>'0009','date_demande'=>'2021-03-30','type_demande'=>'','montant_frais'=>'','refugie_reconnu'=>'','actiris'=>'','vdab'=>'','statut'=>'','created_at', 'updated_at'],
        ['numero_demande'=>'0010','date_demande'=>'2005-08-18','type_demande'=>'','montant_frais'=>'','refugie_reconnu'=>'','actiris'=>'','vdab'=>'','statut'=>'','created_at', 'updated_at'],
        ['numero_demande'=>'0011','date_demande'=>'2002-02-13','type_demande'=>'','montant_frais'=>'','refugie_reconnu'=>'','actiris'=>'','vdab'=>'','statut'=>'','created_at', 'updated_at'],
        ['numero_demande'=>'0012','date_demande'=>'2021-10-07','type_demande'=>'','montant_frais'=>'','refugie_reconnu'=>'','actiris'=>'','vdab'=>'','statut'=>'','created_at', 'updated_at'],
        ['numero_demande'=>'0013','date_demande'=>'2009-04-02','type_demande'=>'','montant_frais'=>'','refugie_reconnu'=>'','actiris'=>'','vdab'=>'','statut'=>'','created_at', 'updated_at'],
   **/
    ];
    
    //Insert data in the table
    DB::table('dossier_demandes')->insert($dossierDemandes);
    }
}
