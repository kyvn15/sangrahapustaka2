@extends('layouts.layout')
@section('content')
    <div class="w-[400px] mx-auto mt-24 p-8 border border-gray-300 rounded-lg bg-white shadow-md">
        <h1 class="text-center text-xl font-bold mb-5">Sign Up</h1>

        <form class="flex flex-col">
            <label for="username" class="mb-1 font-semibold">Username</label>
            <input type="text" id="username" placeholder="vanoganteng" required
                class="h-10 mb-4 px-3 border border-gray-300 rounded-md text-base" />

            <label for="email" class="mb-1 font-semibold">Your Email</label>
            <input type="email" id="email" placeholder="contohemail@gmail.com" required
                class="h-10 mb-4 px-3 border border-gray-300 rounded-md text-base" />

            <label for="password" class="mb-1 font-semibold">Password</label>
            <input type="password" id="password" placeholder="************" required
                class="h-10 mb-4 px-3 border border-gray-300 rounded-md text-base" />

            <button type="submit"
                class="h-[45px] bg-white border-2 border-black rounded-md font-bold cursor-pointer transition-colors hover:bg-black hover:text-white mt-5">
                SIGN UP
            </button>

            <p class="text-center text-sm mt-3">
                Already Have A Account? <a href="login.html" class="font-bold text-black no-underline hover:underline">Log
                    In</a>
            </p>
        </form>
    </div>

@endsection
