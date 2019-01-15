<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function index()
    {
        $recherche = Input::get('recherche');

        if (empty($recherche)) {
            $users = User::paginate(30);
        } else {
            $users = User:: where('name', 'LIKE', '%' . $recherche . '%')
                ->orWhere('username', 'LIKE', '%' . $recherche . '%')
                ->orWhere('cltgroupe', 'LIKE', '%' . $recherche . '%')
                ->paginate(30);
        }
        return view('users.index', ['users' => $users, 'recherche' => $recherche]);
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $users = new User();
        $users->name = $request->get('name');
        $users->username = $request->get('username');
        $users->email = $request->get('email');
        $users->code_clt = $request->get('code_clt');
        $users->adr1 = $request->get('adr1');
        $users->adr2 = $request->get('adr2');
        $users->cp = $request->get('cp');
        $users->ville = $request->get('ville');
        $users->rex = $request->get('rex');
        $users->siret = $request->get('siret');
        $users->siret = $request->get('siret');
        $users->tel = $request->get('tel');
        $users->fax = $request->get('fax');
        $users->groupe = $request->get('groupe');
        $users->type = $request->get('type');
        $users->dtmaj = $request->get('dtmaj');
        $users->cltgroupe = $request->get('cltgroupe');
        $users->cltgroupe = $request->get('cltgroupe');
        $users->pagedefaut = $request->get('pagedefaut');
        $users->tri = $request->get('tri');
        $users->cdeweb = $request->get('cdeweb');
        $users->cdeweb = $request->get('cdeweb');
        $users->cdecolonne = $request->get('cdecolonne');
        $users->ie = $request->get('ie');
        $users->communaute = $request->get('communaute');
        $users->site = $request->get('site');
        $users->localite = $request->get('localite');
        $users->save();

        return view('users.index', ['users' => $users])->with('success', 'Informations mise à jours');

    }


    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.detail', compact('user', 'id'));
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user', 'id'));
    }


    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->name = $request->get('name');
        $users->username = $request->get('username');
        $users->email = $request->get('email');
        $users->code_clt = $request->get('code_clt');
        $users->adr1 = $request->get('adr1');
        $users->adr2 = $request->get('adr2');
        $users->cp = $request->get('cp');
        $users->ville = $request->get('ville');
        $users->rex = $request->get('rex');
        $users->siret = $request->get('siret');
        $users->siret = $request->get('siret');
        $users->tel = $request->get('tel');
        $users->fax = $request->get('fax');
        $users->groupe = $request->get('groupe');
        $users->type = $request->get('type');
        $users->dtmaj = $request->get('dtmaj');
        $users->cltgroupe = $request->get('cltgroupe');
        $users->cltgroupe = $request->get('cltgroupe');
        $users->pagedefaut = $request->get('pagedefaut');
        $users->tri = $request->get('tri');
        $users->cdeweb = $request->get('cdeweb');
        $users->cdeweb = $request->get('cdeweb');
        $users->cdecolonne = $request->get('cdecolonne');
        $users->ie = $request->get('ie');
        $users->communaute = $request->get('communaute');
        $users->site = $request->get('site');
        $users->localite = $request->get('localite');
        $users->save();

        return redirect('users');
    }


    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('users')->with('success', 'Utilisateur supprimé');
    }
}
