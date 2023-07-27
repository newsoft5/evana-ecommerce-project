<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- fontawesome css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}">

    @vite(["resources/scss/app.scss", "resources/css/app.css", "resources/js/app.js"])
    <title>@yield("title", "My Title")</title>
  </head>
  <body class="position-relative">

    {{-- header start --}}
        @include("includes.header")
    {{-- header finish --}}

    @yield("content")

    {{-- newsletter start --}}
        @include("includes.newsletter")
    {{-- newsletter finish --}}

    {{-- footer start --}}
        @include("includes.footer")
    {{-- footer finish --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    @yield("scripts")

    <script type="text/javascript">
        $().ready(() => {
            $("#menuBar").click(() => {
                $(".nav-menu2").addClass("active")
            })

            $("#closeMenu").click(() => {
                $(".nav-menu2").removeClass("active")
            })
        })
    </script>


  </body>
</html>
