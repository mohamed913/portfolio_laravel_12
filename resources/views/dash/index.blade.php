@extends('layouts.dash')

@section('title', 'index')

@section('content')

<div class="dash_container">
    <div class="enumerated">
        <div class="enumerated_item">
            <p class="enumerated_item_title">
                {{ __('messages.Messages') }}
            </p>
            <h3>30</h3>
        </div>
      
        <div class="enumerated_item">
            <p class="enumerated_item_title">
                {{ __('messages.Messages') }}
            </p>
            <h3>3</h3>
        </div>
        <div class="enumerated_item">
            <p class="enumerated_item_title">
                {{ __('messages.Messages') }}
            </p>
            <h3>3</h3>
        </div>
    </div>
</div>
@endsection







