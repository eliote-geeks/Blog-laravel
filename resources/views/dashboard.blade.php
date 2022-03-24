<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" align="center">
                <a href="{{ url('/') }}"><img src="{{asset('images/brand/logo/logo.svg')}}" alt="" class="block h-9 w-auto">
                <span> Hi <b>{{ Auth::user()->name }} </b>  welcome to your dashboard build amazing something!!</span>
            </div><br></a>
            <div class="container">
            <a href="{{ route('welcome.index') }}" class="btn-sm btn-primary">Back to Home</a><br><br>
                    <div class="flex flex-auto">
                        <div align="center" class="card">
                            <img width="300" src="{{ asset('blog/blogpost-1.jpg') }}" class="thumbnail"><br>
                            <a style="width:280px;" class="btn-sm btn-primary" href="{{ route('blog.create') }}">Create Post</a>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@if(Auth::user()->rank == 1)
                   <div align="center" class="card">
                            <img width="300" src="{{ asset('blog/blogpost-2.jpg') }}" class="thumbnail"><br>
                            <a style="width:280px;" class="btn-sm btn-info" href="{{ route('categories.create') }}">Create Category</a>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                   <div align="center" class="card">
                            <img width="300" src="{{ asset('blog/blogpost-3.jpg') }}" class="thumbnail"><br>
                            <a style="width:280px;" class="btn-sm btn-warning" href="{{ route('tags.create') }}">Create Tag</a>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                 

                   <div align="center" class="card">
                            <img width="300" src="{{ asset('blog/blogpost-4.jpg') }}" class="thumbnail"><br>
                            <a style="width:280px;" class="btn-sm btn-danger" href="{{ route('users.users') }}">Manage Users</a>
                        </div>               
@endif
                    </div>
<br><br><br>

            <div class="container">
<a href="{{ route('user.related', Auth::user()) }}">I want to Show My Related Post click there!!</a>            
@if(session()->has('message'))
    <p class="alert alert-danger">{{ session()->get('message') }}</p>
@endif

                    </div>


                </div>
        </div>
    </div>
</x-app-layout>
