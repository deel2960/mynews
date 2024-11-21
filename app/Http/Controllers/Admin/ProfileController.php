<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');

        $this->validate($request,Profile::$rules);

        $profile = new Profiles;
        $form = $request->all();
        
        
        
        $profile->fill($form);
        $profile->save();
              
        return redirect('admin/profile/create');
    }
}
