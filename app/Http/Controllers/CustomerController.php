<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Mail\Contact;
use App\Mail\ContactAdmin;
use App\Mail\ContactTour;
use App\Mail\ContactTourAdmi;

use Illuminate\Support\Facades\Mail;

use App\Customer;
use App\Reserve;
use App\Tour;

class CustomerController extends Controller
{
    //
    public function index()
    {
        //$tours = Tour::get(['id', 'destiny','name','relevant']);
        return view('public.complements.contact');
    }
    public function show()
    {
        $customers = Customer::get(['id', 'name','email','phone','receive']);
        return view('admin.inquiries.show',compact('customers'));
    }
    public function store(Request $request)
    {
        // TODO: Manera #1: Validaciones internas en el controller
        $rules = [
            'name' => 'required|string|min:4',
            'email' => 'required|string|email',
            'phone' => 'required|string|min:4',
            'nationality' => 'required',
            'authorize' => 'required',
        ];

        $messages = [
            'name.required' => 'Su nombre es necesario, por favor verifique.',
            'name.string' => 'El nombre debe contener caracteres válidos.',
            'name.min' => 'El nombre debe contener mínimo 4 caracteres.',
            'email.required' => 'Su email es necesario, por favor verifique.',
            'email.string' => 'Su email debe contener caracteres válidos.',
            'email.email' => 'Su email no tiene formato de email adecuado.',
            'phone.required' => 'Su nro telefonico o celular es necesario, por favor verifique.',
            'phone.string' => 'Su nro telefonico o celular debe contener caracteres válidos.',
            'phone.min' => 'Su nro telefonico o celular debe contener mínimo 4 caracteres.',
            'nationality.required' => 'Su nacionalidad es necesario, por favor verifique.',
            'authorize.required' => 'Es necesario que nos autorize el uso de sus datos para poder contactarlo y resolver sus dudas.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $customer = Customer::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'nationality' => $request->get('nationality'),
                'receive' => $request->get('receive'),
                'authorize' => $request->get('authorize')
            ]);
            $data = array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'nationality' => $request->get('nationality'),
                'affair' => $request->get('affair'),
                'date'      =>  $customer->created_at,
                'message' => $request->get('message'),
                );
            //Envia notificacion al cliente
            Mail::to($customer->email)->send(new Contact($data));
            Mail::to("viptravelcusco@gmail.com")->send(new ContactAdmin($data));
        }

        return response()->json($validator->messages(), 200);
    }
    public function nosotros()
    {
        $tours = Tour::get(['name']);
        return view('public.complements.about',compact('tours'));
    }
    public function showserve()
    {
        $reserves = Reserve::get(['id', 'tour','name','phone','receive']);
        return view('admin.reserve.show',compact('reserves'));
    }
    public function storereserve(Request $request)
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
    public function seereserve( $id )
    {
        $reserve = Reserve::find($id);
        return view('admin.reserve.see', compact('reserve'));
    }
    public function blog()
    {
        $tours = Tour::get(['name']);
        return view('public.complements.blog',compact('tours'));
    }
    public function blog1()
    {
        $tours = Tour::get(['name']);
        return view('public.complements.blog-item.1',compact('tours'));
    }
    public function blog2()
    {
        $tours = Tour::get(['name']);
        return view('public.complements.blog-item.2',compact('tours'));
    }
    public function blog3()
    {
        $tours = Tour::get(['name']);
        return view('public.complements.blog-item.3',compact('tours'));
    }
}
