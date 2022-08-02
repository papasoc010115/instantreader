<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    public function store_user(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => [
                'required', 
                'string',
                function ($attribute, $value, $fail) {
                    $secretKey = '6LdtbighAAAAADoucnrN8PJGBVAJgQx27_0XXXA8';
                    $response = $value;
                    $userIP = $_SERVER['REMOTE_ADDR'];
                    
                    // sends a request to google to verify if captcha response is correct
                    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
                    $response = \file_get_contents($url);
                    $response = json_decode($response);
                }]
        ]);

        // if captcha is successful, redirect to home page
        return redirect()->route('home');
    }

    public function store_ora(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => [
                'required', 
                'string',
                function ($attribute, $value, $fail) {
                    $secretKey = '6LdtbighAAAAADoucnrN8PJGBVAJgQx27_0XXXA8';
                    $response = $value;
                    $userIP = $_SERVER['REMOTE_ADDR'];
                    
                    // sends a request to google to verify if captcha response is correct
                    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
                    $response = \file_get_contents($url);
                    $response = json_decode($response);
                }]
        ]);

        // if captcha is successful, redirect to home page
        return redirect()->route('home');
    }

    public function store_application(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => [
                'required', 
                'string',
                function ($attribute, $value, $fail) {
                    $secretKey = '6LdtbighAAAAADoucnrN8PJGBVAJgQx27_0XXXA8';
                    $response = $value;
                    $userIP = $_SERVER['REMOTE_ADDR'];
                    
                    // sends a request to google to verify if captcha response is correct
                    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
                    $response = \file_get_contents($url);
                    $response = json_decode($response);
                }]
        ]);

        // if captcha is successful, redirect to home page
        return redirect()->route('home');
    }

    public function store_consultation(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => [
                'required', 
                'string',
                function ($attribute, $value, $fail) {
                    $secretKey = '6LdtbighAAAAADoucnrN8PJGBVAJgQx27_0XXXA8';
                    $response = $value;
                    $userIP = $_SERVER['REMOTE_ADDR'];
                    
                    // sends a request to google to verify if captcha response is correct
                    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
                    $response = \file_get_contents($url);
                    $response = json_decode($response);
                }]
        ]);

        // if captcha is successful, redirect to home page
        return redirect()->route('home');
    }

    public function store_orientation(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => [
                'required', 
                'string',
                function ($attribute, $value, $fail) {
                    $secretKey = '6LdtbighAAAAADoucnrN8PJGBVAJgQx27_0XXXA8';
                    $response = $value;
                    $userIP = $_SERVER['REMOTE_ADDR'];
                    
                    // sends a request to google to verify if captcha response is correct
                    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
                    $response = \file_get_contents($url);
                    $response = json_decode($response);
                }]
        ]);

        // if captcha is successful, redirect to home page
        return redirect()->route('learn-more.reading-assessment');
    }

    public function store_founder(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => [
                'required', 
                'string',
                function ($attribute, $value, $fail) {
                    $secretKey = '6LdtbighAAAAADoucnrN8PJGBVAJgQx27_0XXXA8';
                    $response = $value;
                    $userIP = $_SERVER['REMOTE_ADDR'];
                    
                    // sends a request to google to verify if captcha response is correct
                    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
                    $response = \file_get_contents($url);
                    $response = json_decode($response);
                }]
        ]);

        // if captcha is successful, redirect to home page
        return redirect()->route('home');
    }
}
