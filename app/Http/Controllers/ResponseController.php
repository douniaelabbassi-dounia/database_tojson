<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Response;

class ResponseController extends Controller
{
    public function index()
    {
        // Récupère toutes les entrées de la table 'responses'
        $responses = Response::all();

        // Convertit les données en JSON
        $jsonData = $responses->toJson(JSON_PRETTY_PRINT);

        // Retourne la vue avec les données JSON
        return view('responses.index', compact('jsonData'));
    }
}
