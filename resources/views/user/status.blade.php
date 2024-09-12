<div>
    <h1>User Status List</h1>
    @forelse ($users as $user)
        @if ($user['status'] == 'active')
            <li> {{ $user['name'] }} - <span style="color: green"><b>Active</b></span>
            </li>
        @else
            <li> {{ $user['name'] }} - <span style="color: red"><i>Inactive</i></span>
            </li>
        @endif
    @empty
    @endforelse


    @endif
</div>
