<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GeneralController extends Controller
{
    public function generalsettings(){
        $general = General::getPage(); 
        return view("backend.general.edit", compact('general'));
    }

    public function generalsettings_action(Request $request) {
        $request->validate([
            'title' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required|string|max:100',
            'meta_keywords' => 'required',
            'home_img' => 'sometimes|mimes:jpg,png,webp|max:10000',
            'catalogue_pdf' => 'mimes:pdf',
            'about_description' => 'requi red',
            'about_vission' => 'required',
            'about_mission' => 'required',
            'contact_email' => 'required|email',
            'contact_phone' => 'required',
            'contact_ig' => 'required',
            'contact_linkedin' => 'required',
            'contact_tiktok' => 'required',
            'contact_location' => 'required',
        ]);
    
        $maxMetaLength = 100;
    
        // Fetch the single existing general instance
        $general = General::first();
        
        if (!$general) {
            // If no record exists, create a new one
            $general = new General();
        }
    
        $general->title = trim($request->title);
        $general->meta_title = trim($request->meta_title);
        $general->meta_description = trim(Str::limit($request->meta_description, $maxMetaLength));
        $general->meta_keywords = trim($request->meta_keywords);
        $general->about_description = trim($request->about_description);
        $general->about_vission = trim($request->about_vission);
        $general->about_mission = trim($request->about_mission);
        $general->contact_email = trim($request->contact_email);
        $general->contact_phone = trim($request->contact_phone);
        $general->contact_ig = trim($request->contact_ig);
        $general->contact_linkedin = trim($request->contact_linkedin);
        $general->contact_tiktok = trim($request->contact_tiktok);
        $general->contact_location = trim($request->contact_location);
    
        if ($request->hasFile('home_img')) {
            if (!empty($general->home_img)) {
                unlink('upload/general/' . $general->home_img);
            }
            $ext = $request->file('home_img')->getClientOriginalExtension();
            $file = $request->file('home_img');
            $filename = 'home_img_' . time() . '.' . $ext;
            $file->move('upload/general', $filename);
    
            $general->home_img = $filename;
        }
    
        if ($request->hasFile('catalogue_pdf')) {
            if (!empty($general->catalouge)) {
                unlink('upload/general/' . $general->catalouge);
            }
            $ext = $request->file('catalogue_pdf')->getClientOriginalExtension();
            $file = $request->file('catalogue_pdf');
            $filename = 'catalogue_' . time() . '.' . $ext;
            $file->move('upload/general', $filename);
    
            $general->catalouge = $filename;
        }
    
        $general->save();
    
        return redirect("dashboard/general-settings/edit")->with("success", "General settings updated successfully.");
    }
    
}

