<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();

        //compact lo vado ad utilizzare per poter abbreviare la forma di ['projects'=> $projects]
        return view('admin.projects.index', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.show', compact('project'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'nullable|string',
            'release' => 'required|date',
            'link' => 'required|string',
            'language' => 'nullable|string',
        ]);

        $data['language'] = json_encode([$data['language']]);


        $project = Project::create($data);
                                                //Il ::create($data) lo vado ad utilizzare al posto di 
                                                //$project = new Project();
                                                //$project->fill($data);
                                                //$project->save()

        return redirect()->route('admin.projects.show', $project->id);
    }

    public function edit($id){
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, $id){
        $project = Project::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'nullable|string',
            'release' => 'required|date',
            'link' => 'required|string',
            'language' => 'nullable|string',
        ]);

        $data['language'] = json_encode([$data['language']]);

        $project->update($data);

        return redirect()->route('admin.projects.show', $project->id);
    }

    public function destroy($id){
        $project = Project::findOrFail($id);
        
        $project->delete();
        return redirect()->route('admin.projects.index');
    }

}
