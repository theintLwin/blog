<x-layout>


<x-slot name="title">
    <title>All Blogs</title>
</x-slot>
    <x-slot name="content">
        @foreach($blogs as $blog)

        <div>

            <h1><a href="/blogs/{{$blog->slug}}  ">  {{$blog->title}} </a></h1>
            <a href="/users/{{$blog->user->id}}"><h4> Author - {{$blog->user->name}}</h4></a>
            <p><a href="/categories/{{$blog->category->slug}}">{{$blog->category->name}}</a></p>
            <div>
                <p>published at -  {{$blog->created_at->diffForHumans()}}</p>
                <p>  {{$blog->intro}} </p>
            </div>

        </div>
        @endforeach
    </x-slot>
</x-layout>
