<?php

namespace App\Http\Controllers;

//use App\Mail\contactForm;
//use App\Mail\requestCallBack;
//use App\newsletter_subscription;
use App\Mail\contactForm;
use App\Mail\requestCallBack;
use App\newsletter_subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class pagesController extends Controller
{
    /*function index(){
        $title = "XL Outsourcing - Home";
        return view('index', ['title'=>$title]);
    }*/

    function about(){
        $identifier = "About Us";
        $title = "XL Security & Protection Services Limited - About";
        return view('about', ['title'=>$title, 'identifier' => $identifier]);
    }

    function manguarding(){
        $identifier = "Static Man-guarding";
        $title = "XL Security & Protection Services | Static Man-Guarding | Facilities Maintenance";
        return view('manguarding', ['title'=>$title, 'identifier' => $identifier]);
    }

    function armedResponse(){
        $identifier = "Armed Response";
        $title = "XL Security & Protection Services Limited | Armed Response ";
        return view('armedResponse', ['title'=>$title, 'identifier' => $identifier]);
    }

    function journeyManagement(){
        $identifier = "Journey Management";
        $title = "XL Security & Protection Services Limited | Journey Management ";
        return view('journeyManagement', ['title'=>$title, 'identifier' => $identifier]);
    }

    function cctv(){
        $identifier = "CCTV Installation and Servicing";
        $title = "XL Security & Protection Services Limited | CCTV Installation and Servicing";
        return view('cctv', ['title'=>$title, 'identifier' => $identifier]);
    }

    function investigation(){
        $identifier = "Investigation & Background Profiling";
        $title = "XL Security & Protection Services Limited | Investigation & Background Profiling ";
        return view('investigation', ['title'=>$title, 'identifier' => $identifier]);
    }

    function armedEscort(){
        $identifier = "Armed Escort";
        $title = "XL Security & Protection Services Limited | Armed Escort ";
        return view('investigation', ['title'=>$title, 'identifier' => $identifier]);
    }

    function vehicleRental(){
        $identifier = "Security Vehicles Rental Services";
        $title = "XL Security & Protection Services Limited | Security Vehicles Rental Services";
        return view('vehiclesRental', ['title'=>$title, 'identifier' => $identifier]);
    }

    function tracking(){
        $identifier = "Vehicles Tracking Services";
        $title = "XL Security & Protection Services Limited | Vehicles Tracking Services";
        return view('tracking', ['title'=>$title, 'identifier' => $identifier]);
    }

    function eventSecurity(){
        $identifier = "Event Security";
        $title = "XL Security & Protection Services Limited | ".$identifier;
        return view('tracking', ['title'=>$title, 'identifier' => $identifier]);
    }

    function contact(){
        $identifier = "Contact Us";
        $title = "XL Security & Protection Services Limited | Contact | Facilities Maintenance | Contact a Facilities Management company";
        return view('contact', ['title'=>$title, 'identifier' => $identifier]);
    }

    function advisory(){
        $identifier = "Security Advisory Services";
        $title = "XL Security & Protection Services Limited | Contact | Security Advisory Services | Security and Protection";
        return view('advisory', ['title'=>$title, 'identifier' => $identifier]);
    }

    function team(){
        $identifier = "Our Team";
        $title = "XL Security & Protection Services Limited | Team | Facilities Security company in nigeria | Security company in nigeria";
        return view('team', ['title'=>$title, 'identifier' => $identifier]);
    }



    function requestCallBack(Request $request){
//        return $request;
        try{
            Mail::to('e.esehigbemen@xlafricagroup.com')->cc(['m.nyamali@xlafricagroup.com'])->send(new requestCallBack($request->all()));
            return response()->json(['success'=>'request sent']);
        }catch (\Exception $e){
            return $e->getMessage();
        }

    }

    function subscribe($name, $email){
        try{
            $exist = newsletter_subscription::find($email);
            if($exist != null){
                return response()->json(['error'=>'You already subscribed'], 200);
            }
            if($name == null && $email == null){
                return response()->json(['error'=>'Something went wrong'], 200);
            }
            $newslatter = new newsletter_subscription();
            $newslatter->name = $name;
            $newslatter->email = $email;
            $newslatter->save();
            return response()->json(['success'=>'You have been successfully subscribed']);
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    function contactSiteOwner(Request $request){
        try{
            Mail::to('f.sanni@xlafricagroup.com')->cc(['s.williams@xlafricagroup.com', 'y.ajibade@xlafricagroup.com'])->send(new contactForm($request->all()));
            return response()->json(['success'=>'Request sent']);
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }
}
