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
                <div class="flex justify-between items-center px-8">
                    <h1 class="text-3xl font-bold">Home Page</h1>
                    <a href="{{route('posts.create')}}" class="px-6 py-2 bg-black text-white hover:bg-black/50 rounded-xl">Create</a>
                </div>



               <div class="mt-4 p-8 bg-black/5 rounded-2xl flex flex-wrap gap-8 ">

                    @foreach($posts as $item)
                        <div class="bg-black/10 inline-block px-6 py-4 rounded-2xl w-64">
                            <h2 class="text-2xl font-semibold text-gray-700">{{$item->title}}</h2>
                            <p class="mt-8">{{$item->description}}</p>
                            <p class="mt-8">{{$item->content}}</p>
                            <a href="{{route('posts.edit', ['post'=>$item->id])}}" class="px-6 py-2 bg-black text-white hover:bg-black/50 rounded-xl">Edit</a>
                        </div>
                    @endforeach
               </div>

            </section>
        </main>


</body>
</html>
