<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
 
        <title>Restaurant</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
      
        </head>
    <body class="antialiased">
      <h1>イタリアのおいしいレストラン</h1>
          <div class='posts'>
              @foreach ($posts as $post)
           <div class='post'>
               <h2 class='restaurant'>{{$post->restaurant}}</h2>
               <p class='body'>{{ $post->body }}</p>
           </div>
              @endforeach
          </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
