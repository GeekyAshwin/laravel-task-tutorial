<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <h2>City list</h2>
    <table>
        <thead>
        <th>City Name</th>
        <th>Total Customers</th>
        </thead>
        <tbody>
        @foreach($cities as $city => $totalCustomers)
            @if($totalCustomers > 3)
                <tr>
                    <td>{{ $city }}</td>
                    <td>{{ $totalCustomers  }}</td>
                </tr>
            @endif
            <br>
        @endforeach
        </tbody>
    </table>
</div>
