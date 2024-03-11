<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admins.dashboard');
    }

    public  function changePassword(Request $request){
        return view('admins.change_password');
    }

    public  function updatePassword(Request $request){
        // dd($request->all(), auth()->user());

        $request->validate([
            'current_password' => 'required',
            'new_password' => [
                'required',
                'string',
                'min:8',              // Minimum length
                'confirmed',          // Must match the 'new_password_confirmation' field
            ],
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'The current password is incorrect.');
        }

        $user->update(['password' => bcrypt($request->new_password)]);

        return redirect()->route('admin.dashboard')->with('success', 'Password changed successfully.');
        // return view('admins.dashboard');
    }

    public  function showProfile(Request $request){
        $user = User::findOrFail(auth()->user()->id);
        return view('admins.profile.show', compact('user'));
    }

    public  function editProfile(Request $request){
        $user = User::findOrFail(auth()->user()->id);
        return view('admins.profile.edit', compact('user'));
    }

    public  function updateProfile(Request $request){
        // return view('admins.dashboard');
        // dd($request->all());

        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'county' => 'nullable|string',
            'state' => 'nullable|string',
            'city' => 'nullable|string',
            'zipcode' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except(['_token', '_method']);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('assets/admins/profiles'), $imageName);
            // $file = $request->file('photo');
            // $fileName = time() . '_' . $file->getClientOriginalName();
            // $file->storeAs('public/assets/admins/profiles', $fileName);
            $data['photo'] = 'assets/admins/profiles/'.$imageName;
        }

        $user->update($data);

        return redirect()->route('admin.show.profile')->with('success', 'Profile updated successfully.');
    }

}
