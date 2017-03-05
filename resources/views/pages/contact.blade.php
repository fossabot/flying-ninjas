@extends('layout.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Contact us!</h1>
        </div>
    </div>
    <div class="row">
        <form class="col s12">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s6">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email" data-error="Enter a valid email" data-success="Valid!">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <select id="inquiry">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">General Inquiry</option>
                        <option value="2">Reporting a Griefer/Hacker</option>
                        <option value="3">Game Server Issues</option>
                        <option value="4">Website Issues</option>
                        <option value="5">Suggestions</option>
                    </select>
                    <label for="inquiry">What is your inquiry about?</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="message" class="materialize-textarea" data-length="500"></textarea>
                    <label for="message">Message</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button id="sendContactForm" class="btn waves-effect waves-light blue darken-1" type="button"
                            name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection