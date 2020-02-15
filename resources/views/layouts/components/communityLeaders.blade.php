<table class="ambassador-listing mb-5">
    <thead>
        <tr>
        <th>{{ $location }}</th>
        <th></th>
        <th>
            {{ $numOfAmbo }}
            @if($numOfAmbo == 1)
            Ambassador
            @else
            Ambassadors
            @endif
        </th>
        </tr>
    </thead>
    <tbody>
    @foreach ($ambassadors as $ambassador)
    
    <tr>
        <td data-column="First Name" class="name">
            {{$ambassador->full_name}}
            <span>{{$ambassador->professional_title}} | {{$ambassador->company}}</span>
        </td>
        <td data-column="Location" class="location">
            {{$ambassador->city}}
        </td>
        <td data-column="Profile" class="view-profile">
            <a href="{{$ambassador->social_media}}" target="_blank" rel="noopener">View Profile</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

