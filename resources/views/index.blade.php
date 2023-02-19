@extends('layouts.default')
@section('page-content')

<section class=" max-sm:object-cover relative min-h-screen flex items-center object-fill bg-no-repeat bg-cover " style="background-image: url({{asset('img/banner-buma.jpeg')}});">
    <div class="justify-center flex w-full dark:bg-black">
        <div class="text-center bg-green-700 p-5 items-center justify-center w-full">
            <h1 class="text-5xl max-sm:text-3xl font-bold text-orange-500"> PORTAL BANK PROSEDUR</h1> 
            <span class="text-2xl max-sm:text-xl text-white">INTERNAL LEARNING CENTER-OPERATION BUMA LMO</span>
        </div>
    </div>
</section>
    
@endsection