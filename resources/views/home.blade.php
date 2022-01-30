{{$newheading}}

<h1>Forloop</h1>
{{--Forloop--}}
@for($i=0; $i<10; $i++)
    <button>{{$i}}</button>
@endfor


{{--Foreach--}}

<h1>Foreach</h1>
<ul>
    @foreach($data as $countryName)
        <li>{{$countryName}}</li>

{{--        {{$loop->index}}--}}

{{--        {{$loop->count}}--}}
{{--        @break;--}}



{{--    --}}
{{--        @if($loop->even)--}}
{{--            <li>{{$countryName}}</li>--}}
{{--        @endif--}}

    @endforeach

</ul>



{{--Forelse--}}
<h1>Forelse</h1>
<ul>
    @forelse($data as $countryName)
        <li>{{$countryName}}</li>
    @empty
        <p>Data not found</p>
    @endforelse
</ul>


@if($loginStatus==true)
    <h1>you are login in</h1>
@elseif($loginStatus==false)
<h1>you are not login </h1>
@else
<h1>Login status not found</h1>
@endif


@php
$num1=10;
$num2=20;
$result=$num1+$num2;
echo $result;
@endphp
