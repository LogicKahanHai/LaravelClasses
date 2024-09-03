<div>
    @isset($customers)
        @if (count($customers)>=1)
            <h1>Customers are availabe: {{count($customers)}}</h1>
        @else
            <h1>No Customer available</h1>
        @endif
    @endisset



    @isset($i)

        @switch($i)
            @case(1)
                <p>One</p>
                @break
            @case(2)
                <p>Two</p>
                @break
            @default
            <p>I can only count till 2.</p>
        @endswitch

    @endisset


</div>
