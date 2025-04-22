@php
$name = 'khan';
$email = 'hello@example.com';
$age = 25;
$students = ['apple', 'banana', 'orange', 'grape'];
// associativeArray
$associativeArray = [
    'name' => 'khan',
    'email' => 'hello@example.com',
    'age' => 25];

echo'<h1>hello world!</h1>';
@endphp
<h1>{{ $name }}</h1>

{{-- ancher tag for resource student controller --}}

{!! '<h1>_____________If condition___________________</h1>' !!}
{{-- controll statement --}}
@if($name == 'tALHA' or $name == 'khan')
    <h1>ALLOWED</h1>
@elseif($name == 'Ali')
    <h1>ALLOWED</h1>
    @elseif($name == 'ahmad')
    <h1>ALLOWED</h1>
@else
    <h1>NOT ALLOWED</h1>
@endif
{!! '<h1>_____________switch statement___________________</h1>' !!}
{{-- switch statement  --}}
@switch($name)
    @case('khan')
        <h1>ALLOWED</h1>
        @break
    @case('Ali')
        <h1>ALLOWED</h1>
        @break
    @case('ahmad')
        <h1>ALLOWED</h1>
        @break
    @default
        <h1>NOT ALLOWED</h1>
@endswitch
{{-- foreach  --}}
@foreach ($students as $student)
    <h1>{{ $student }}</h1>
@endforeach
{{-- ancher tag for resource student controller --}}
{!! '<h1>________________________________</h1>' !!}
