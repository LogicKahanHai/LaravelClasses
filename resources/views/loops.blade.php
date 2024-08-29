<!-- This file works with the Loops Controller to test the functioning of control statements in the
  .blade.php type files -->
<div>
    @if (count($users) != 0)
    <h2>With For:-</h2>
    <ul>
        {{--
            These are called blade directives. They are used to create control statements directly in the html code without
            invoking php tag again and again
        --}}
        @for ($i = 0; $i < count($users); $i++)
            <li>{{$users[$i]}}</li>
        @endfor
    </ul>
    <h2> With ForEach:- </h2>
    <ul>
        @foreach ($users as $user)
        <li> {{$user}} </li>
        @endforeach
    </ul>
    @endif
    {{--
        The For else loop, works like for each, but it also provides a case for empty array,
        so we can use that to better manage the conditions
    --}}
    <h2> With ForElse:- </h2>
    <ul>
        @forelse ($users as $user)
        <li> {{$user}} </li>
        @empty
        <p> No Users! </p>
        @endforelse
    </ul>
</div>
