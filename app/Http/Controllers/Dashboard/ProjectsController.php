<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\ProjectDataTable;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Http\Requests\ProjectRequest;
use App\Models\Area;
use App\Models\Category;
use App\Models\Location;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends GeneralController
{
    protected $viewPath = 'project';
    protected $path = 'project';
    private $route = 'projects';
    private $image_path = 'projects';
    protected $paginate = 30;

    public function __construct(Project $model)
    {
        parent::__construct($model);
    }

    public function index(ProjectDataTable $dataTable)
    {
        return $dataTable->render('dashboard.' . $this->viewPath . '.index');
    }

    public function create()
    {
        $Location=Location::all();
        $Area=Area::all();
        $Category=Category::all();
        return view('dashboard.' . $this->viewPath . '.create',compact('Category','Area','Location'));
    }

    public function store(ProjectRequest $request)
    {
        $data = $request->all();
        if ($request->image) {
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadImage($request->file('image'), $this->image_path, null, 300);
            }
        }
        $trip = $this->model::create($data);
        return redirect()->route($this->route)->with('success', 'تم الاضافه بنجاح');
    }

    public function edit($id)
    {
        $Location=Location::get();
        $Area=Area::all();
        $Category=Category::all();
        $data = $this->model::findOrFail($id);
        return view('dashboard.' . $this->viewPath . '.edit', compact('data','Category','Area','Location'));
    }

    public function update(ProjectRequest $request, $id)
    {
        $data = $request->all();
        $item = $this->model->find($id);
        unset($data['_token']);
        if ($request->image) {
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadImage($request->file('image'), $this->image_path, $item->image, 300);
            }
        } else {
            unset($data['image']);
        }
        $this->model::where('id',$id)->update($data);
        return redirect()->route($this->route)->with('success', 'تم الاضافه بنجاح');

    }

    public function delete(Request $request, $id)
    {
        $data = $this->model::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }

}
