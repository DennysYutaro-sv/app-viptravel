<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TourController extends Controller
{

    public function index()
    {
        $tours = Tour::get(['id', 'destiny','name','relevant']);
        return view('admin.tour.index',compact('tours'));
    }

    public function create()
    {
        //
        return view('admin.tour.create');
    }

    public function store(Request $request)
    {
        //Validar datos del tour
        $rules = [
            'destiny' => 'required|string',
            'name' => 'required|string|min:3|unique:tours,name',
            'unit_price' => 'required',
            'duration' => 'required',
            'type' => 'required',
            'size' => 'required',
            'language' => 'required',
            'description' => 'required|max:165',
            'itinerary' => 'required',
            'include' => 'required',
            'recomendation' => 'required',
            'prices' => 'required',
            'relevant' => 'required',
            'main_img' => 'required|image|max:1024',
            'img_1' => 'required|image|max:1024',
            'img_2' => 'required|image|max:1024',
            'img_3' => 'required|image|max:1024'

        ];
        $messages = [
            'destiny.required' => 'El destino del tour es requerido.',
            'destiny.string' => 'El nombre del destino debe contener caracteres válidos.',
            'name.required' => 'El nombre del tour es obligatorio.',
            'name.string' => 'El nombre del tour debe contener caracteres válidos.',
            'name.min' => 'La longitud del nombre del tour es muy corta.',
            'name.unique' => 'El nombre de este tour ya existe en la base de datos.',
            'unit_price.required' => 'El precio del tour en la portada es obligatorio.',
            'duration.required' => 'La duración del tour es obligatoria.',
            'type.required' => 'El tipo del tour es requerido.',
            'size.required' => 'El tamaño de grupo es requerido.',
            'language.required' => 'El lenguaje del tour es obligatorio.',
            'description.required' => 'La vista general del tour es obligatorio.',
            'description.max' => 'La vista general solo debe contener maximo 165 caracteres.',
            'itinerary.required' => 'El itinerariol del tour es obligatorio.',
            'include.required' => 'Que incluye el tour es obligatorio.',
            'recomendation.required' => 'Las recomendaciones del tour es obligatorio.',
            'prices.required' => 'Los precios del tour es obligatorio.',
            'relevant.required' => 'El dato si es relevante el tour es obligatorio.',
            'main_img.required' => 'La imagen de portada es obligatorio.',
            'main_img.image' => 'El tipo de archivo de la imagen de portada es incorrecto.',
            'main_img.max' => 'La imagen de portada pesa demasiado, solo debe pesar 1MB max.',
            'img_1.required' => 'La imagen nro.1 es obligatorio.',
            'img_1.image' => 'El tipo de archivo de la imagen nro.1 es incorrecto.',
            'img_1.max' => 'La imagen nro.1 pesa demasiado, solo debe pesar 1MB max.',
            'img_2.required' => 'La imagen nro.2 es obligatorio.',
            'img_2.image' => 'El tipo de archivo de la imagen imagen nro.2 es incorrecto.',
            'img_2.max' => 'La imagen imagen nro.2 pesa demasiado, solo debe pesar 1MB max.',
            'img_3.required' => 'La imagen nro.3 es obligatorio.',
            'img_3.image' => 'El tipo de archivo de la imagen nro.3 es incorrecto.',
            'img_3.max' => 'La imagen nro.3 pesa demasiado,solo debe pesar 1MB max.',
        ];
        //Save a Tour
        $validator = Validator::make($request->all(), $rules, $messages);
        if ( !$validator->fails() )
        {
            $tour = Tour::create([
                'destiny' => $request->get('destiny'),
                'name' => $request->get('name'),
                'slug' => Str::slug($request->get('name')),
                'unit_price' => $request->get('unit_price'),
                'duration' => $request->get('duration'),
                'type' => $request->get('type'),
                'size' => $request->get('size'),
                'language' => $request->get('language'),
                'description' => $request->get('description'),
                'itinerary' => $request->get('itinerary'),
                'include' => $request->get('include'),
                'recomendation' => $request->get('recomendation'),
                'prices' => $request->get('prices'),
                'relevant' => $request->get('relevant')
            ]);

            // TODO: Tratamiento de un archivo de forma tradicional
            if (!$request->file('main_img')) {
                $tour->main_img = '/intranet/assets/img/tours/no-image.png';
            } else {
                $path = public_path().'/intranet/assets/img/tours/front/';
                $extension = $request->file('main_img')->getClientOriginalExtension();
                $filename = $tour->id . '.' . $extension;
                $request->file('main_img')->move($path, $filename);
                $tour->main_img = $filename;
            }
            // TODO: Tratamiento de un archivo de forma tradicional
            if (!$request->file('img_1')) {
                $tour->img_1 = '/intranet/assets/img/tours/no-image.png';
            } else {
                $path = public_path().'/intranet/assets/img/tours/one/';
                $extension = $request->file('img_1')->getClientOriginalExtension();
                $filename = $tour->id . '.' . $extension;
                $request->file('img_1')->move($path, $filename);
                $tour->img_1 = $filename;
            }
            if (!$request->file('img_2')) {
                $tour->img_2 = '/intranet/assets/img/tours/no-image.png';
            } else {
                $path = public_path().'/intranet/assets/img/tours/two/';
                $extension = $request->file('img_2')->getClientOriginalExtension();
                $filename = $tour->id . '.' . $extension;
                $request->file('img_2')->move($path, $filename);
                $tour->img_2 = $filename;
            }
            if (!$request->file('img_3')) {
                $tour->img_3 = '/intranet/assets/img/tours/no-image.png';
            } else {
                $path = public_path().'/intranet/assets/img/tours/three/';
                $extension = $request->file('img_3')->getClientOriginalExtension();
                $filename = $tour->id . '.' . $extension;
                $request->file('img_3')->move($path, $filename);
                $tour->img_3 = $filename;
            }
            $tour->save();
        }
        return response()->json($validator->messages(), 200);
    }

    public function edit( $id )
    {
        //
        $tour = Tour::find($id);
        return view('admin.tour.edit', compact('tour'));
    }

    public function update(Request $request)
    {
        //Validar datos del tour
        $rules = [
            'destiny' => 'required|string',
            'name' => 'required|string|min:3',
            'unit_price' => 'required',
            'duration' => 'required',
            'type' => 'required',
            'size' => 'required',
            'language' => 'required',
            'description' => 'required',
            'itinerary' => 'required',
            'include' => 'required',
            'recomendation' => 'required',
            'prices' => 'required',
            'relevant' => 'required',
            'main_img' => 'image|max:1024',
            'img_1' => 'image|max:1024',
            'img_2' => 'image|max:1024',
            'img_3' => 'image|max:1024'

        ];
        $messages = [
            'destiny.required' => 'El destino del tour es requerido.',
            'destiny.string' => 'El nombre del destino debe contener caracteres válidos.',
            'name.required' => 'El nombre del tour es obligatorio.',
            'name.string' => 'El nombre del tour debe contener caracteres válidos.',
            'name.min' => 'La longitud del nombre del tour es muy corta.',
            'unit_price.required' => 'El precio del tour en la portada es obligatorio.',
            'duration.required' => 'La duración del tour es obligatoria.',
            'type.required' => 'El tipo del tour es requerido.',
            'size.required' => 'El tamaño de grupo es requerido.',
            'language.required' => 'El lenguaje del tour es obligatorio.',
            'description.required' => 'La vista general del tour es obligatorio.',
            'itinerary.required' => 'El itinerariol del tour es obligatorio.',
            'include.required' => 'Que incluye el tour es obligatorio.',
            'recomendation.required' => 'Las recomendaciones del tour es obligatorio.',
            'prices.required' => 'Los precios del tour es obligatorio.',
            'relevant.required' => 'El dato si es relevante el tour es obligatorio.',
            'main_img.image' => 'El tipo de archivo de la imagen de portada es incorrecto.',
            'main_img.max' => 'La imagen de portada pesa demasiado, solo debe pesar 1MB max.',
            'img_1.image' => 'El tipo de archivo de la imagen nro.1 es incorrecto.',
            'img_1.max' => 'La imagen nro.1 pesa demasiado, solo debe pesar 1MB max.',
            'img_2.image' => 'El tipo de archivo de la imagen imagen nro.2 es incorrecto.',
            'img_2.max' => 'La imagen imagen nro.2 pesa demasiado, solo debe pesar 1MB max.',
            'img_3.image' => 'El tipo de archivo de la imagen nro.3 es incorrecto.',
            'img_3.max' => 'La imagen nro.3 pesa demasiado,solo debe pesar 1MB max.',
        ];
        //update a Tour
        $validator = Validator::make($request->all(), $rules, $messages);
        if ( !$validator->fails() )
        {
            $tour = Tour::find($request->get('id'));
            $tour->destiny = $request->get('destiny');
            $tour->name = $request->get('name');
            $tour->unit_price = $request->get('unit_price');
            $tour->duration = $request->get('duration');
            $tour->type = $request->get('type');
            $tour->size = $request->get('size');
            $tour->language = $request->get('language');
            $tour->description = $request->get('description');
            $tour->itinerary = $request->get('itinerary');
            $tour->include = $request->get('include');
            $tour->recomendation = $request->get('recomendation');
            $tour->prices = $request->get('prices');
            $tour->relevant = $request->get('relevant');

            // TODO: Tratamiento de un archivo de forma tradicional
            if (!$request->file('main_img')) {
                if ($tour->main_img == 'no-image.png' || $tour->main_img == null) {
                    $tour->main_img = 'no-image.png';
                }
            } else {
                $path = public_path().'/intranet/assets/img/tours/front/';
                $extension = $request->file('main_img')->getClientOriginalExtension();
                $filename = $tour->id . '.' . $extension;
                $request->file('main_img')->move($path, $filename);
                $tour->main_img = $filename;
            }
            // TODO: Tratamiento de un archivo de forma tradicional
            if (!$request->file('img_1')) {
                if ($tour->img_1 == 'no-image.png' || $tour->img_1 == null) {
                    $tour->img_1 = 'no-image.png';
                }
            } else {
                $path = public_path().'/intranet/assets/img/tours/one/';
                $extension = $request->file('img_1')->getClientOriginalExtension();
                $filename = $tour->id . '.' . $extension;
                $request->file('img_1')->move($path, $filename);
                $tour->img_1 = $filename;
            }
            // TODO: Tratamiento de un archivo de forma tradicional
            if (!$request->file('img_2')) {
                if ($tour->img_2 == 'no-image.png' || $tour->img_2 == null) {
                    $tour->img_2 = 'no-image.png';
                }
            } else {
                $path = public_path().'/intranet/assets/img/tours/two/';
                $extension = $request->file('img_2')->getClientOriginalExtension();
                $filename = $tour->id . '.' . $extension;
                $request->file('img_2')->move($path, $filename);
                $tour->img_2 = $filename;
            }
            // TODO: Tratamiento de un archivo de forma tradicional
            if (!$request->file('img_3')) {
                if ($tour->img_3 == 'no-image.png' || $tour->img_3 == null) {
                    $tour->img_3 = 'no-image.png';
                }
            } else {
                $path = public_path().'/intranet/assets/img/tours/three/';
                $extension = $request->file('img_3')->getClientOriginalExtension();
                $filename = $tour->id . '.' . $extension;
                $request->file('img_3')->move($path, $filename);
                $tour->img_3 = $filename;
            }
            $tour->save();
        }
        return response()->json($validator->messages(), 200);
    }

    public function delete( $id )
    {
        //
        $tour = Tour::find($id);
        return view('admin.tour.delete', compact('tour'));
    }

    public function destroy(Request $request)
    {
        //
        $rules = [
            'id' => 'required|exists:tours,id',
        ];

        $messages = [
            'id.required' => 'No se ha recibido el identificador del tour.',
            'id.exists' => 'El tour no existe en la base de datos.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $tour = Tour::find($request->get('id'));

            $tour->delete();
        }

        return response()->json($validator->messages(), 200);
    }
    public function trashed()
    {
        $tours = Tour::onlyTrashed()->get();
        return view('admin.tour.trashed', compact('tours'));
    }
    public function recover( $id )
    {
        //
        $tour = Tour::onlyTrashed()->find($id);
        return view('admin.tour.restore', compact('tour'));
    }
    public function restore( Request $request )
    {
        $rules = [
            'id' => 'required|exists:tours,id',
        ];

        $messages = [
            'id.required' => 'No se ha recibido el identificador del tour.',
            'id.exists' => 'El tour no existe en la base de datos.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ( !$validator->fails() )
        {
            $tour = Tour::onlyTrashed()->where('id', $request->get('id'))
                            ->restore();
        }

        return response()->json($validator->messages(), 200);
    }
}
