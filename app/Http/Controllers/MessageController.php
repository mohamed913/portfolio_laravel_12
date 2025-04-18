<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;


class MessageController extends Controller 
{

       /**
     * Get the middleware that should be assigned to the controller.
     */
    // public static function middleware(): array
    // {
    //     return [
    //         'auth',
    //         new Middleware('log', only: ['index']),
    //         new Middleware('subscribed', except: ['store']),
    //     ];
    // }
     public function index(): \Illuminate\View\View
    {
        $messages = Message::paginate(5);
        return view('dash.messages.index', compact('messages'));
    }
    public function create(): \Illuminate\View\View
    {
        return view('front.messages.create');
    }
    public function create2(): \Illuminate\View\View
    {
        return view('front.messages.create2');
    }
    public function store(MessageRequest $request): RedirectResponse
    {
       
        
   
    // Retrieve the validated input data...
   //dd('mm');

    $validated = $request->validated();

    

        $data['name'] = htmlspecialchars(strip_tags($validated['name']), ENT_QUOTES);
        $data['email'] = htmlspecialchars(strip_tags($validated['email']), ENT_QUOTES);

        $data['message'] = htmlspecialchars(strip_tags($validated['message']), ENT_QUOTES);




        // $data['applicant_level'] = htmlspecialchars(strip_tags($validatedData['applicant_level']), ENT_QUOTES);
        Message::create($data);
        // Mail::to('mohamedgamal7872@gmail.com')->send(new NewApplicantMail('hello from alseraj'));

        return redirect()->back()->with('status', 'your data has been sent successfully our team will contact you ..');
   //   dd($validated);
 
   
    }

}
