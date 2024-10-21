@extends('layouts.ecommerceapp')
@section('profile')
<div class="flex flex-row gap-3 justify-between w-auto mx-36">
        <div class="w-36 basis-1/4">
            <div class="h-auto bg-white flex">
                <div class="p-2"><img src="../img/profile-pic.svg" alt=""> </div>
                <div class="p-2"><span class="text-sm">Hello,</span><br>{{  Auth::user()->name }}</div>
            </div>
            <div class=" h-96 bg-white my-5">
                <h1 class="p-2 font-semibold text-xl opacity-70">Account Settings</h1>
                <h1 class="p-2 font-normal text-lg"><a href="">Profile Information</a></h1>              
            </div>
        </div>
        <div class="bg-white basis-3/4">
            <div class="p-4 opacity-75 font-semibold text-lg"><span>Personal Information</span></div>
            <div class="p-6">
                @include('profile.partials.update-profile-information-form')
                <div class="my-8">
                    <span class="opacity-70 text-lg font-semibold">Change Password</span>
                    @include('profile.partials.update-password-form')</div>
                
                @include('profile.partials.delete-user-form')
                <img src="../img/profilefooter.png" alt="">
            </div>
        </div>
    </div>    
@endsection
              
                    
                    


