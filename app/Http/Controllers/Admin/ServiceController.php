<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as ImageManager;

use App\ProjectType;

/*
|--------------------------------------------------------------------------
| Admin ServiceController Class.
|
| Description:
| This controller is responsible to show the admin services page, create &
| add new services to the database, update existing service as well as
| deleting them.
|--------------------------------------------------------------------------
*/ 
class ServiceController extends Controller
{
    // Show the Admin Services page.
    public function index()
    {
        $project_types = ProjectType::all();

        return view('admin/services', compact('project_types'));
    }

    // Store new service (ProjectType) and adds them to the database.
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'ilustration_file' => 'required|mimes:jpeg,jpg,png,svg',
            'type' => 'required|max:20',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/admin/service#add-service')->withErrors($validator)->withInput();
        }

        $project_type = new ProjectType;
        $project_type->type = $input['type'];
        $project_type->description = $input['description'];
        $project_type->ilustration_file = $this->storeImage($request->file('ilustration_file'), 'ilustrations/', 'ilustration');
        $project_type->save();

        return redirect()->route('admin.service.index')->with('success', 'A new Service has been added to the database!');
    }

    // Helper function to store images for the service.
    private function storeImage($image, $foldername, $image_type){
        $ext = strtolower($image->getClientOriginalExtension());
        $destinationPath = 'storage/images/'.$foldername;

        if (!File::isDirectory($destinationPath)){
            File::makeDirectory($destinationPath, 0777, true, true);
        }

        while(true){
            $newName = $image_type.'_'.rand(100000,PHP_INT_MAX).'.'.$ext;
            if (!file_exists($destinationPath.$newName)){
                break;
            }
        }

        if ($ext == 'jpg' || $ext == 'jpeg') {
            $img_created = ImageManager::make($image->getRealpath());
            $img_created->orientate();
            $img_created->save($destinationPath.$newName, 75);
        } else {
            $image->move($destinationPath, $newName);
        }

        return $destinationPath.$newName;
    }

    // Updates a chosen service (based on id). 
    public function update(Request $request, $id)
    {
        $input = $request->all();

        Validator::make($input, [
            'ilustration_file' => 'mimes:jpeg,jpg,png,svg',
            'type' => 'required|max:20',
            'description' => 'required'
        ])->validate();

        $project_type = ProjectType::findorfail($id);
        $project_type->type = $input['type'];
        $project_type->description = $input['description'];

        if ($request->has('ilustration_file')) {
            unlink($project_type->ilustration_file);
            $project_type->ilustration_file = $this->storeImage($request->file('ilustration_file'), 'ilustrations/', 'ilustration');
        }

        $project_type->save();

        return redirect()->route('admin.service.index')->with('success', 'Service has been updated!');
    }

    // Delete the service by id.
    public function destroy($id)
    {
        $project_type = ProjectType::findorfail($id);
        
        unlink($project_type->ilustration_file);
        $project_type->delete();

        return redirect()->route('admin.service.index')->with('success', 'Service has been deleted!');
    }
}
