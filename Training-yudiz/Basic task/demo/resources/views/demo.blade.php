<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demo page</title>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="{{url('/welcome')}}">Home</a>

            </div>
        </div>

        <h1>Hello,{{$name ??"Guest"}} !!</h1>
        {{-- @if($name != "")
            {{"Name is not empty!... if/elseif"}}
        @elseif ($name != "ruhi")
            {{"Name matched!"}}
        @else
            {{"Name not matched !"}}

        @endif<br> --}}

        @unless ($name =="radhika")
            Name is not radhika...
            using unless

        @endunless<br>
        date_function: {{date ('d-m-y') }}<br>
        {!!$data2!!}
        printing using HTML tags: {{$data2}}
        <h3>
        @isset($name)
            Welcome {{$name}}
        @endisset
        </h3>


        @for($i=0;$i<5;$i++)
            {{$i}}
        @endfor
    </body>
</html>
