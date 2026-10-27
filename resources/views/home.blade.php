@extends('layouts.app')
@section('content')
<section class="w-full min-h-screen bg-[#0B0F17] text-white flex flex-col justify-between pt-24 pb-12 px-4">
    
    <!-- 1. GÓRNA CZĘŚĆ: Teksty i Formularz -->
    <div class="text-center max-w-2xl mx-auto space-y-6">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight leading-tight">
            adipisicing elit <br>
            quia eius ratione natus.
        </h1>
        
        <p class="text-gray-400 max-w-md mx-auto">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit quia eius ratione natus.
        </p>

        <!-- Formularz Waitlist -->
        <div class="flex flex-col sm:flex-row justify-center items-center gap-3 max-w-md mx-auto pt-2">
            <input type="email" placeholder="Enter your email" class="w-full px-4 py-3 rounded-lg bg-gray-900 border border-gray-800 text-white focus:outline-none focus:border-blue-500">
            <button class="w-full sm:w-auto bg-[#CCFF00] text-black font-semibold px-6 py-3 rounded-lg hover:bg-[#b2dd00] transition whitespace-nowrap">
                Join Waitlist
            </button>
        </div>

        <p class="text-xs text-gray-500">
            By clicking Join Waitlist you're confirming that you agree with our Terms and Conditions.
        </p>
    </div>

    <!-- 2. DOLNA CZĘŚĆ: Ilustracja (Zawsze widoczna w całości) -->
    <div class="w-full max-w-[800px] mx-auto mt-8 flex justify-center">
        <img src="{{ asset('images/hero-black.png') }}" 
             class="w-full h-auto object-contain rounded " 
             alt="Ilustracja klubu golfowego">
    </div>

</section>

@endsection