<!-- 
namespace App\Http\Controllers;

use App\Models\Administrateur;
use Illuminate\Http\Request;
use App\Http\Controllers\User;

class AdministrateurController extends Controller
{
    // Afficher la liste des administrateurs
    public function index()
    {
        $admininistrateurs = Administrateur::all();
        return view('administrateur.index', compact('administrateurs'));
    }

    // Afficher le formulaire de création d'un administrateur
    public function create()
    {
        return view('administrateur.create');
    }

    // Enregistrer un nouvel administrateur
    public function store(Request $request)
    {
        // Validation des données $request->validate(...);

        // Créer un nouvel utilisateur
        $user = User::create([
            'NomUser' => $request->NomUser,
            'Prenom' => $request->Prenom,
            'Email' => $request->Email,
            'Mot_de_passe' => bcrypt($request->Mot_de_passe),
        ]);

        // Créer un nouvel administrateur lié à l'utilisateur
        $administrateur = Administrateur::create([
            'IDUser' => $user->IDUser,
            'Role' => $request->Role,
        ]);

        return redirect()->route('administrateur.index');
    }

    // Afficher le formulaire pour modifier un administrateur
    public function edit($id)
    {
        $admin = Administrateur::findOrFail($id);
        return view('administrateur.edit', compact('administrateur'));
    }

    // Mettre à jour les informations d'un administrateur
    public function update(Request $request, $id)
    {
        // Validation des données $request->validate(...);

        $administrateur = Administrateur::findOrFail($id);

        // Mettre à jour l'utilisateur associé
        $administrateur->user->update([
            'NomUser' => $request->NomUser,
            'Prenom' => $request->Prenom,
            'Email' => $request->Email,
        ]);

        // Mettre à jour les détails de l'administrateur
        $administrateur->update([
            'Role' => $request->Role,
        ]);

        return redirect()->route('admin.index');
    }

    // Supprimer un administrateur
    public function destroy($id)
    {
        $administrateur = Administrateur::findOrFail($id);
        $administrateur->delete();

        return redirect()->route('admin.index');
    }
} -->