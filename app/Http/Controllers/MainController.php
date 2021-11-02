<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Models\Service;
use App\Models\Settings;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    //
    public function main(Request $request)
    {
        $services = Service::all();
        $slides = Slider::all();

        return view('welcome', [
            'services' => $services,
            'slides' => $slides
        ]);
    }

    //
    public function about(Request $request)
    {
        return view('about');
    }

    public function service(Request $request)
    {
        $serviceSlug = $request->route("serviceSlug");

        if (empty($serviceSlug)) {
            return view('errors.404');
        }

        $service = Service::where('slug', $serviceSlug)->first();

        if (!isset($service)) {
            return view('errors.404');
        }

        return view('service', [
            'service' => $service,
        ]);
    }

    public function contactsView(Request $request)
    {
        return view('contacts');
    }

    public function contact(Request $request)
    {
        $email = Settings::where('id', 'b8244392-ca56-4d32-826a-2997840e20c1')->first()->company_email;

        $mailData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        Mail::to($email)->send(new ContactForm($mailData));

        return response()->json([
            'message' => 'OK'
        ], Response::HTTP_OK);
    }
}
