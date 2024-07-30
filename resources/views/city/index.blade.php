<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <h2>City list</h2>
    <a href="{{ route('city.pdf.download') }}">Download cities as PDF</a>
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
