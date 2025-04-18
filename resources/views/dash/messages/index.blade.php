@extends('layouts.dash')

@section('title', 'messages.index')

@section('content')

<div class="dash_container">
    <div class="form_container">
        <h1>{{ __('messages.Messages') }}</h1>
   <table class="table">
       <thead>
           <tr>
               <th>{{ __('messages.Id') }}</th>
               <th>{{ __('messages.Name') }}</th>
               <th>{{ __('messages.Email') }}</th>
               <th>{{ __('messages.Message') }}</th>
               <th>{{ __('messages.Created_at') }}</th>
               <th>{{ __('messages.Updated_at') }}</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($messages as $message)
           <tr>
               <td>{{ $message->id }}</td>
               <td>{{ $message->name }}</td>
               <td>{{ $message->email }}</td>
               <td>{{ $message->message }}</td>
               <td>{{ $message->created_at }}</td>
               <td>{{ $message->updated_at }}</td>
           </tr>
           @endforeach
       </tbody>
      
   </table>
   {{ $messages->links() }}
    </div>
</div>
@endsection







