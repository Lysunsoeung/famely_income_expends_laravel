<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Repositories\UserRepo;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\MemberController;
use Illuminate\Http\Exceptions\HttpResponseException;

class MemberController extends Controller
{
    protected $user;

    public function __construct(UserRepo $user)
    {
        $this->middleware('teamPA', ['only' => ['store', 'edit', 'update','reset_pass'] ]);

        $this->middleware('admin', ['only' => ['destroy'] ]);

        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     */
    public function mem_index()
    {

        // variable = ModelNme::method()
        $members = Member::get();
        return view('admin.settings.member_list', compact('members'));

    }

    public function mem_create()
    {

        return view('admin.settings.create');

    }


    public function mem_store(Request $request)
    {
        $request->validate([
            'photo' => 'required|mimes:png,jpg,jpeg,gif,png|max:5048',
            'name' => 'required',
            'description' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'github' => 'required'
        ]);

        // get data from input
        // varGetFromInput=requestParameter->filedInputName
        $name = $request->name;
        $description = $request->description;
        $facebook = $request->facebook;
        $instagram = $request->instagram;
        $github = $request->github;

        // check image
        if($file = $request->hasFile('photo')) {
            $file = $request->file('photo') ;
            $fileName = $file->getClientOriginalName() ;

            // path for storage images
            $destinationPath = public_path().'/storage/uploads/members';
            $file->move($destinationPath,$fileName);
        }


        // send data to database
        // varrObj->databaseName = varGetFromInput
        $member = new Member();
        $member->photo = $fileName;
        $member->name = $name;
        $member->description = $description;
        $member->facebook = $facebook;
        $member->instagram = $instagram;
        $member->github = $github;
        $member->save();

        $notification = array(
            'message' => 'User Store Successfully',
            'alert-type' => 'success'
        );

        // return back()->with('flash_success', 'Data save successfully.');
        return Redirect()->back()->with($notification);
    }



    public function mem_edit($id) {
        $members = Member::where('id','=',$id)->first();

        return view('admin.settings.edit', compact('members'));
    }

    public function mem_update(Request $request, Member $member) {
        // Validate the request.
        $validate = $request->validate([
            'photo' => 'required|mimes:png,jpg,jpeg,gif,png|max:5048',
            'name' => 'required',
            'description' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'github' => 'required'
        ]);


        // Get the member's ID and name.
        $id = $request->id;
        $name = $request->name;
        $description = $request->description;
        $facebook = $request->facebook;
        $instagram = $request->instagram;
        $github = $request->github;

        // Generate a unique filename for the photo file.
        $fileName = time() . '-' . $request->name . '.' . $request->file('photo')->getClientOriginalExtension();

        // Save the photo file to the public/storage/uploads/members directory.
        $request->photo->move(public_path('storage/uploads/members'), $fileName);

        // Delete the existing photo file, if it exists.
        if (File::exists($request->photo)) {
            File::delete($request->photo);
        }

        // Update the member's record in the database.
        Member::where('id', '=',$id)->update([
            'photo' => $fileName,
            'name' => $name,
            'description' => $description,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'github' => $github
        ]);

        // Return a redirect response with a success message.
        $notification = array(
            'message' => 'Member Update Successfully',
            'alert-type' => 'info'
        );

        return back()->with($notification);
    }



    public function mem_show($id)
    {
        $members = Member::where('id','=',$id)->first();

        return view('admin.settings.show', compact('members'));
    }


    public function mem_destroy($id) {

        $member = Member::find($id);

        $old_image = $member->photo;

        // Delete image from storage  reference
        $image_path = public_path('storage/uploads/members/'.$old_image);
            if(file_exists($image_path)){
                unlink($image_path);
        }

        if ($member) {
            $member->forceDelete(); // Delete the member record
        }

        $notification = array(
            'message' => 'User Store Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

}
