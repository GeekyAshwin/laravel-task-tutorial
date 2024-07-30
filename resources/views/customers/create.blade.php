<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    <h1>Customer Form</h1>
    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        @method('POST')
        <label>Enter customer name</label>
        <input type="text" placeholder="enter customer name" name="name">

        <label>Enter customer email</label>
        <input type="email" placeholder="enter customer email" name="email">

        <label>Select City</label>
        <select id="city" name="city">
            <option value="Dehradun">Dehradun</option>
            <option value="Noida">Noida</option>
            <option value="Gurgaon">Gurgaon</option>
        </select>

        <label>Select State</label>
        <select id="state" name="state">
            <option value="UP">UP</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="Rajasthan">Rajasthan</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</div>
