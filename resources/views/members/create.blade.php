@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full mb-10">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    Register for membership
                </header>
                    @if ($errors->any())
                    <div class="alert alert-danger text-red-500 text-xs italic mt-4">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                    @endif
                    <form 
                    class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8"
                    action="/membership" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-wrap">
                            <label class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Name</label>
                            <input 
                                type="text" 
                                class="form-input w-full block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                                name="name"
                                placeholder="Please enter your name..">
        
                            <label class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Contact Number</label>
                            <input 
                                type="text" 
                                class="form-input w-full block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                                name="contact"
                                placeholder="xxx-xxxxxxx">
        
                            <label class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Email Address</label>
                            <input 
                                type="email" 
                                class="form-input w-full block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                                name="email"
                                id="email"
                                placeholder="Please enter your email address..">
        
                            <label class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Please upload your Identity Card.
                                <span class="sr-only">Upload IC</span>
                                <input 
                                    type="file" 
                                    accept="image/png"
                                    class="block w-full p-2 mb-10 text-sm text-slate-500
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-full file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-violet-50 file:text-violet-700
                                    hover:file:bg-violet-100
                                    "
                                    name="copy_of_IC"/>
                            </label>
                            
                            
        
                            <label class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Please select a package</label>
                            
                            <select class="form-input w-full block shadow-5xl mb-10 p-2 w-80" name="package" id="package">
                                <option>--</option>
                                <option value="A">Package A</option>
                                <option value="B">Package B</option>
                                <option value="C">Package C</option>
                            </select>
        
                            <button 
                            type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4 mb-10">
                            Register</button>
        
                        </div>
                    </form>
            </section>
        </div>
    </div>
</main>
@endsection