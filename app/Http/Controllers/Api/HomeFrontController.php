<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeFrontController extends Controller
{
    public function settings(Request $request)
    {
        $data = Setting::get();
        return msgdata($request, success(), 'تم عرض البيانات بنجاح', $data);
    }
    public function aboutUs(Request $request)
    {

        $data = AboutUs::where('id','1')->get();
        return msgdata($request, success(), 'تم عرض البيانات بنجاح', $data);
    }
    public function services(Request $request)
    {
          $data = Service::get();
        return msgdata($request, success(), 'تم عرض البيانات بنجاح', $data);
    }
    public function team(Request $request)
    {
        $data = Team::get();
        return msgdata($request, success(), 'تم عرض البيانات بنجاح', $data);
    }
    public function sliders(Request $request)
    {
          $data = Slider::get();
        return msgdata($request, success(), 'تم عرض البيانات بنجاح', $data);
    }
    public function projects(Request $request)
    {
          $data = Project::with(['Images','Category','Location'])->get();
        return msgdata($request, success(), 'تم عرض البيانات بنجاح', $data);
    }
    public function projectDetails(Request $request, $id)
    {
        $data = Project::find($id);
        if ($data) {
            $data = Project::where('id', $id)->with(['Images','Category','Location'])->first();
            return msgdata($request, success(), 'تم عرض البيانات بنجاح', $data);
        } else {
            return msg($request, '401', 'يجب اختيار المشروع صحيح');
        }
    }
}
