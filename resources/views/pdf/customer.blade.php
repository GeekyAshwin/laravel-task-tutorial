<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <h2>Customer list</h2>
    <table>
        <thead>
        <th>Name</th>
        <th>Email</th>
        <th>City</th>
        <th>State</th>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->city }}</td>
                <td>{{ $customer->state }}</td>
            </tr>
            <br>
        @endforeach
        </tbody>
    </table>
</div>
