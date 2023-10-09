<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Contracts\Service\Attribute\Required;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();

        foreach($projects as $key => $project){
            $projects[$key]['short_description'] = $this->truncate($project['description'],150);
        }

        //compact lo vado ad utilizzare per poter abbreviare la forma di ['projects'=> $projects]
        return view('admin.projects.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->first();
        return view('admin.projects.show', compact('project'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(StoreProjectRequest $request)
    {

        $data = $request->validated();

        $data['language'] = explode(',', $data['language']);


        $counter = 0;

        do{
            $slug = Str::slug($data['title']) . ($counter > 0 ? '-' . $counter : '');
    
            $alreadyExists = Project::where('slug', $slug)->first();

            $counter++;

        }while($alreadyExists);

        $data['slug'] = $slug;
        // dd($slug);


        $project = Project::create($data);
                                                //Il ::create($data) lo vado ad utilizzare al posto di 
                                                //$project = new Project();
                                                //$project->fill($data);
                                                //$project->save()

        return redirect()->route('admin.projects.show', $project->slug);
    }

    public function edit($slug){
        $project = Project::where('slug', $slug)->firstOrFail();
        return view('admin.projects.edit', compact('project'));
    }

    public function update(StoreProjectRequest $request, $slug){
        $project = Project::where('slug', $slug)->firstOrFail();

        $data = $request->validated();

        $data['language'] = explode(',', $data['language']);

        $project->update($data);

        return redirect()->route('admin.projects.show', $project->slug);
    }

    public function destroy($slug){
        $project = Project::where('slug', $slug)->firstOrFail();
        
        $project->delete();
        return redirect()->route('admin.projects.index');
    }


    private function truncate($text, $chars = 25) {
        if (strlen($text) <= $chars) {
            return $text;
        }
        $text = $text . " ";
        $text = substr($text, 0, $chars);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . "...";
        return $text;
    }

}
