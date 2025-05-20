@extends('layouts.layout')
@section('content')


<div class="w-[400px] mx-auto mt-24 mb-16 p-8 bg-white border border-gray-300 rounded-lg shadow-md">
    <h1 class="text-center text-xl font-bold mb-5">Log In</h1>

    <form class="flex flex-col">
        <label for="email" class="mb-1 font-semibold">Your Email</label>
        <input type="email" id="email" placeholder="contohemail@gmail.com" required
            class="h-10 mb-4 px-3 border border-gray-300 rounded-md text-base focus:outline-none focus:ring-2 focus:ring-cyan-500">

        <div class="flex justify-between items-center mb-1">
            <label for="password" class="font-semibold">Password</label>
            <a href="#" class="text-black text-sm font-medium no-underline hover:underline">Forgot?</a>
        </div>
        <input type="password" id="password" placeholder="************" required
            class="h-10 mb-5 px-3 border border-gray-300 rounded-md text-base focus:outline-none focus:ring-2 focus:ring-cyan-500">

        <button type="submit"
            class="h-11 bg-white border-2 border-black rounded-md font-bold cursor-pointer hover:bg-black hover:text-white transition-colors">
            LOGIN
        </button>

        <p class="text-center mt-3 text-sm">
            Don't Have Any Account?
            <a href="signup.html" class="font-bold text-black no-underline hover:underline">Sign up</a>
        </p>
    </form>
</div>


@endsection
