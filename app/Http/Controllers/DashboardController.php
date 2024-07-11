<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view("dashboard.index", ["user" => $user]);
    }

    public function profile()
    {
        $user = Auth::user();
        return view("dashboard.profile.index", ["user" => $user]);
    }

    public function edit_profile()
    {
        $user = Auth::user();
        return view("dashboard.profile.edit.index", ["user" => $user]);
    }
    public function post_edit_profile(Request $request)
    {
        $validatedData = $request->validate([
            "profile_id" => "required",
            "full_name" => "required",
            "phone_number" => "required",
            "instagram" => "required",
            "facebook" => "required",
            "about" => "required",
        ]);
        User::find(Auth::user()->id)->update(["name" => $validatedData["full_name"]]);
        unset($validatedData["full_name"]);
        $profile = Profile::find($validatedData['profile_id']);
        unset($validatedData['profile_id']);
        $profile->update($validatedData);

        return redirect("/dashboard/profile");
    }

    public function user()
    {
        $user = Auth::user();
        $all_user = User::all();
        return view("dashboard.user.index", ["user" => $user, 'all_user' => $all_user]);
    }

    public function add_user()
    {
        $user = Auth::user();
        return view("dashboard.user.tambah.index", ["user" => $user]);
    }

    public function edit_user(User $user_edit)
    {
        $user = Auth::user();
        return view("dashboard.user.edit.index", ["user" => $user, "user_edit" => $user_edit]);
    }
    public function post_edit_user(User $user_edit, Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required",
        ]);
        $change_user = User::find($user_edit->id);
        $change_user->update($validatedData);

        return redirect("/dashboard/user");
    }

    public function post_add_user(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);
        $validatedData['is_admin'] = false;
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect("/dashboard/user");
    }

    public function delete_user($id)
    {

        $check_user = User::find($id);
        if ($check_user->is_admin) {
            return redirect("/dashboard/user");
        }
        $check_user->delete();
        return redirect("/dashboard/user");
    }

    public function resume()
    {
        $user = Auth::user();
        return view("dashboard.resume.index", ["user" => $user]);
    }

    public function add_resume()
    {
        $user = Auth::user();
        return view("dashboard.resume.tambah.index", ["user" => $user]);
    }

    public function edit_resume(Resume $resume)
    {
        $user = Auth::user();
        return view("dashboard.resume.edit.index", ["user" => $user, "resume" => $resume]);
    }
    public function post_edit_resume(Request $request, Resume $resume)
    {
        $validatedData = $request->validate([
            "posisi" => "required",
            "perusahaan" => "required",
            "tempat" => "required",
            "description" => "required",
            "tahun_mulai" => "required",
        ]);
        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['tahun_keluar'] = $request->get("tahun_keluar") ? $request->get("tahun_keluar") : null;
        $change_resume = Resume::find($resume->id);
        $change_resume->update($validatedData);

        return redirect("/dashboard/resume");
    }

    public function post_add_resume(Request $request)
    {
        $validatedData = $request->validate([
            "posisi" => "required",
            "perusahaan" => "required",
            "tempat" => "required",
            "description" => "required",
            "tahun_mulai" => "required",
        ]);
        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['tahun_keluar'] = $request->get("tahun_keluar") ? $request->get("tahun_keluar") : null;
        Resume::create($validatedData);
        return redirect("/dashboard/resume");
    }
    public function delete_add_resume($id)
    {
        Resume::find($id)->delete();
        return redirect("/dashboard/resume");
    }
}
