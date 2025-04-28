<h1>Loop </h1>
{!! '<h1>_____________________for loop______________</h1>' !!}
{{-- for loop sturcture --}}
@php
$name="";
$marks = 89;
$fruits = ['apple', 'banana', 'orange', 'grape'];
@endphp
@for($i=1; $i<=2; $i++)
<h1>hello{{ $i }}</h1>
@endfor
{{-- while loop structure  --}}
{!! '<h1>_____________________while loop______________</h1>' !!}
@while($marks<=100)
{{-- {{ dd($marks) }} --}}
{{-- <h1>hello{{ $marks }}</h1> --}}
<h1>hello{{ $marks }}</h1>
@php
$marks++;
@endphp
@endwhile
{{-- do while loop structure --}}
{!! '<h1>_____________________do while loop for HOme______________</h1>' !!}
{!! '<h1>_____________________foreach loop</h1>' !!}
@foreach($fruits as $singlefruit)
{{ $singlefruit }} <br>
@endforeach
{{-- show index number in below foreach loop  --}}
@foreach($fruits as $jar => $singlefruit)
{{ $jar }} {{ $singlefruit }} <br>
@endforeach
{!! '<h1>_____________________associative array home task  </h1>' !!}
