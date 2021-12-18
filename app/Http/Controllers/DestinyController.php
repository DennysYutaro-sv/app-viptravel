<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactTour;
use App\Mail\ContactTourAdmi;

use App\Tour;
use App\Reserve;
use Illuminate\Support\Facades\DB;

class DestinyController extends Controller
{
    //
    public function cusco()
    {
        $tours = Tour::get(['id', 'destiny','name','description','main_img','unit_price','slug'])->where('destiny', 'CUSCO')->all();
        return view('public.destinies.cusco',compact('tours'));
    }
    public function machupicchu()
    {
        $tours = Tour::get(['id', 'destiny','name','description','main_img','unit_price','slug'])->where('destiny', 'MACHUPICCHU')->all();
        return view('public.destinies.machupicchu',compact('tours'));
    }
    public function lima()
    {
        $tours = Tour::get(['id', 'destiny','name','description','main_img','unit_price','slug'])->where('destiny', 'LIMA')->all();
        return view('public.destinies.lima',compact('tours'));
    }
    public function arequipa()
    {
        $tours = Tour::get(['id', 'destiny','name','description','main_img','unit_price','slug'])->where('destiny', 'AREQUIPA')->all();
        return view('public.destinies.arequipa',compact('tours'));
    }
    public function puno()
    {
        $tours = Tour::get(['id', 'destiny','name','description','main_img','unit_price','slug'])->where('destiny', 'PUNO')->all();
        return view('public.destinies.puno',compact('tours'));
    }
    public function ica()
    {
        $tours = Tour::get(['id', 'destiny','name','description','main_img','unit_price','slug'])->where('destiny', 'ICA-NAZCA')->all();
        return view('public.destinies.ica',compact('tours'));
    }
    public function inicio()
    {
        $tours = Tour::get(['id', 'destiny','name','description','main_img','unit_price','slug','relevant'])->where('relevant', '1')->all();
        return view('public.welcome',compact('tours'));
    }
    public function showTours( Tour $tour )
    {
        //
        //$tour = Tour::where('slug', $slug)->first();
        return view('public.tour.showtour', compact('tour'));
    }
    public function store(Request $request)
    {
        // TODO: Manera #1: Validaciones internas en el controller
        $rules = [
            'tour' => 'required',
            'name' => 'required|string|min:4',
            'email' => 'required|string|email',
            'phone' => 'required|string|min:6',
            'arrive' => 'required',
            'departure' => 'required',
            'adults' => 'required',
            'children' => 'required',
            'nationality' => 'required',
            'authorize' => 'required'
        ];

        $messages = [
            'tour.required' => 'Por favor elija el tour a consultar.',
            'name.required' => 'Su nombre es necesario, por favor verifique.',
            'name.string' => 'El nombre debe contener caracteres válidos.',
            'name.min' => 'El nombre debe contener mínimo 4 caracteres.',
            'email.required' => 'Su email es necesario, por favor verifique.',
            'email.string' => 'Su email debe contener caracteres válidos.',
            'email.email' => 'Su email no tiene formato de email adecuado.',
            'phone.required' => 'Su nro telefonico o celular es necesario, por favor verifique.',
            'phone.string' => 'Su nro telefonico o celular debe contener caracteres válidos.',
            'phone.min' => 'Su nro telefonico o celular debe contener mínimo 6 caracteres.',
            'arrive.required' => 'Su fecha de llegada es requerida.',
            'departure.required' => 'Su fecha de salida es requerida.',
            'adults.required' => 'La cantidad de adultos es requerido.',
            'children.required' => 'La cantidad de niños es requerido.',
            'nationality.required' => 'Por favor, seleccione su nacionalidad.',
            'authorize.required' => 'Es necesario que nos autorize el uso de sus datos para poder contactarlo y resolver sus dudas.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $reserve = Reserve::create([
                'tour' => $request->get('tour'),
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'arrive' => $request->get('arrive'),
                'departure' => $request->get('departure'),
                'adults' => $request->get('adults'),
                'children' => $request->get('children'),
                'nationality' => $request->get('nationality'),
                'receive' => $request->get('receive'),
                'authorize' => $request->get('authorize'),
                'additional' => $request->get('additional'),
            ]);
            $data = array(
                'tour' => $request->get('tour'),
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'arrive' => $request->get('arrive'),
                'departure' => $request->get('departure'),
                'adults' => $request->get('adults'),
                'children' => $request->get('children'),
                'nationality' => $request->get('nationality'),
                'additional' => $request->get('additional'),
                'date'      =>  $reserve->created_at,
                );
            //Envia notificacion al cliente
            Mail::to($reserve->email)->send(new ContactTour($data));
            Mail::to("viptravelcusco@gmail.com")->send(new ContactTourAdmi($data));
        }

        return response()->json($validator->messages(), 200);
    }

}
