@extends('home.layout.app')
@section('title','home')
@section('content')
    <section class="container mx-auto px-4 py-4 ">
        <div class="mb-4">
            <h1 class="text-3xl font-semibold">Latest Blogs</h1>
        </div>
         <ul  class=" flex flex-col     divide-y divide-gray-500">
             @foreach($post as $post)
             <a href="">
             <li class=" py-4">
                 <h6 class=" font-semibold text-gray-600 ">{{$post->date}}</h6>
                 <h1 class=" font-normal text-xl">{{$post->title}}</h1>
                 <p class="">{{$post->short_Description}}</p>
                </li>
                </a>
                @endforeach
          </ul>
    </section>
@endsection