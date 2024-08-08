<?php
namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class DatabaseToJson extends Component
{
    public $jsonData;

    public function __construct()
    {
        // Récupérer les données de la base de données
        $data = DB::table('responses')->get(); // Remplacez 'your_table' par le nom de votre table
        
        // Convertir les données en JSON
        $this->jsonData = $data->toJson();
    }

    public function render()
    {
        return view('components.database-to-json');
    }
}
