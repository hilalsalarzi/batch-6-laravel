@php
$marks = 89;
$grade = '';
$name = 'ahmad';
$user = 'salim';
$day = 'friday';
@endphp
{{" && And "}}
@if($marks >= 90 && $marks <=100)
   {{ $grade = 'A'; }}

@elseif($marks >= 80 && $marks <=89)
    {{$grade = 'B';}}
@elseif($marks >= 70)
    {{ $grade = 'C'; }}
@elseif($marks >= 60)
    {{ $grade = 'C'; }}
@elseif($marks >= 50)
   {{ $grade = 'E';}}
@else
    {{ $grade = 'C'; }}
@endif
<h1>Your grade is: {{ $grade }}</h1>
{{-- ancher tag for resource student controller --}}
{!! '<h1>________________________________</h1>' !!}
{{ 'or ||' }}
@if($name == 'salman' || $name == 'khan')
    <h1>ALLOWED</h1>

@else
    <h1>NOT ALLOWED</h1>
@endif

{!! '<h1>________________________________</h1>' !!}
{{ 'not !' }}
@if($user != 'kalim')
    <h1>ALLOWED</h1>
@else
    <h1>NOT ALLOWED</h1>
@endif
{!! '<h1>________________________________</h1>' !!}

{{ 'switch statement' }}
@switch($day)
    @case('Monday')
        <h1>Today is Monday</h1>
        @break
    @case('Tuesday')
        <h1>Today is Tuesday</h1>
        @break
    @case('Wednesday')
        <h1>Today is Wednesday</h1>
        @break
  @case('friday')
        <h1>Today is friday</h1>
        @break
    @default
        <h1>Not a valid day</h1>
@endswitch
