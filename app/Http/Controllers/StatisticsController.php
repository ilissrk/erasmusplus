namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StatisticsController extends Controller
{
    public function index()
    {
        // Récupérer les données de la base de données
        $approvedMobilities = DB::table('mobs')->get();
        $realizedMobilities = DB::table('mobs')->get();

        // Vous pouvez aussi récupérer des données agrégées pour les graphiques
        $mobilitiesStats = DB::table('mobs')
                            ->select(DB::raw('YEAR(year) as year'), DB::raw('count(*) as total'))
                            ->groupBy('year')
                            ->get();

        // Passer les données à la vue
        return view('statistics', [
            'approvedMobilities' => $approvedMobilities,
            'realizedMobilities' => $realizedMobilities,
            'mobilitiesStats' => $mobilitiesStats
        ]);
    }
}
