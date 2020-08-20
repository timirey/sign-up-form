<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use TCG\Voyager\Voyager;

class SubmitController extends Controller
{
    public function process(Request $request)
    {
        $data = $request->all();
        $file = $request->file('input_cv');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $path = Storage::disk("public")->put($name, $file);

        Candidate::create([
            'name' => $data['input_name'],
            'email' => $data['input_email'],
            'message' => $data['input_message'],
            'cv' => $path
        ]);
    }
}
