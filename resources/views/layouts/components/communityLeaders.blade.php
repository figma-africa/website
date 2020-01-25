<table>
    <thead>
        <tr>
        <th>{{ $location }}</th>
        <th></th>
        <th></th>
        <th>{{ $numOfAmbo }}</th>
        </tr>
    </thead>
    <tbody>
    {{-- @for ($i = 0; $i < 4; $i++) --}}
    {{-- <tr>
        <td data-column="First Name">{{$ambassador->full_name}}
            <span>Product Designer, Flutterwave</span>
        </td>
        <td></td>
        <td data-column="Location">Lagos</td>
        <td data-column="Profile"><a href="#">View Profile</a></td>
    </tr>
    @endfor --}}
    @foreach ($ambassadors as $ambassador)
    <tr>
        <td data-column="First Name">{{$ambassador->full_name}}
        <span>{{$ambassador->professional_title}} | {{$ambassador->company}}</span>
        </td>
        <td></td>
    <td data-column="Location">{{$ambassador->city}}</td>
        <td data-column="Profile"><a href="#">View Profile</a></td>
    </tr>
    @endforeach
    </tbody>
</table>