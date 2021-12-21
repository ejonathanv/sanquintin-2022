<?php
namespace App\Http\Controllers;

use App\Mail\NewMessage;
use App\Mail\NewMessageResponseToClient;
use Illuminate\Http\Request;
use Mail;
use Validator;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
    public function about()
    {
        return view('website.about');
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function services()
    {
        return view('website.services');
    }
    public function sendMessage(Request $request)
    {
        $validate = Validator::make($request->all(), $this->validationRules(), $this->validationMessages());
        try {
            $this->sendMailToClient($request);
            $this->sendMailToUs($request);
            return redirect()->back()->with('success', "¡Gracias por escribirnos! Tu mensaje ha sido enviado exitosamente.");
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Algo salió mal, por favor intenta más tarde.']);
        }
    }
    public function validationRules()
    {
        return [
            'first_name' => 'required|string',
            'last_name'  => 'required|string',
            'email'      => 'required|email',
            'message'    => 'required|string',
        ];
    }
    public function validationMessages()
    {
        return [
            'first_name.required' => 'Por favor ingresa tu nombre',
            'first_name.string'   => 'Por favor ingresa tu nombre',
            'last_name.required'  => 'Por favor ingresa tu apellido',
            'last_name.string'    => 'Por favor ingresa tu apellido',
            'email.required'      => 'Por favor ingresa tu correo electrónico',
            'email.email'         => 'El correo electrónico proporcionado no es válido',
            'message.required'    => 'Por favor escribe tu mensaje',
            'message.string'      => 'Por favor ingresa tu mensaje',
        ];
    }
    public function sendMailToUs($request)
    {
        info(env('MAIL_INFO_ACCOUNT'));
        Mail::to(env('MAIL_INFO_ACCOUNT'))->send(new NewMessage($request));
    }
    public function sendMailToClient($request)
    {
        Mail::to($request->email)->send(new NewMessageResponseToClient($request));
    }
}
