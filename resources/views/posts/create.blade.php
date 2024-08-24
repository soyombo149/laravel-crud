<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>laravel-crud</title>
</head>
<body>
<header class="py-2 bg-gray-700 px-8">
    <div class="flex justify-between items-center">
        <div class="">
            <img class="h-8" src="{{asset('golden-star-3d_1053-79.avif')}}" alt="">
        </div>


        <nav class="text-white">
            <ul class="flex space-x-4">
                <li><a href="" class="hover:bg-gray-500 px-4 py-2 rounded-lg">Home</a></li>
                <li><a href="" class="hover:bg-gray-500 px-4 py-2 rounded-lg">About</a></li>
                <li><a href="" class="hover:bg-gray-500 px-4 py-2 rounded-lg">Contact</a></li>
            </ul>

        </nav>

        <div>
            <img class="h-8" src="{{asset('golden-star-3d_1053-79.avif')}}" alt="">
        </div>
    </div>
</header>
<main class="px-8">
    <section class="pt-8">
        <form action="{{route('posts.store')}}" method="post" class="bg-gray-100 p-6 rounded-2xl">
            @csrf

            <div class="flex flex-col mb-4">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
                @error('title')
                <span>{{$message}}</span>
                @enderror
            </div>

             <div class="flex flex-col mb-4">
                <label for="description">Description</label>
                 <textarea class="h-40" name="description" id="description" ></textarea>
                @error('description')
                   <span>{{$message}}</span>
                @enderror
             </div>

            <div class="flex flex-col mb-4">
                <label for="content">Content</label>
                <textarea class="h-40" name="content" id="content" ></textarea>
                @error('content')
                <span>{{$message}}</span>
                @enderror
            </div>
            <a href="{{route('posts.index')}}" class="px-6 py-2 bg-black text-white hover:bg-black/50 rounded-xl">Cancel</a>
            <button type="submit" class="px-6 py-2 bg-black text-white hover:bg-black/50 rounded-xl">Upload</button>



        </form>

    </section>
</main>


</body>
</html>
