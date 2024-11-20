<form action="{{ route('addresses.update', $address) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Address Line -->
    <div>
        <label for="address_line">Address Line</label>
        <input type="text" name="address_line" id="address_line" value="{{ old('address_line', $address->address_line) }}" required>
    </div>

    <!-- City -->
    <div>
        <label for="city">City</label>
        <input type="text" name="city" id="city" value="{{ old('city', $address->city) }}" required>
    </div>

    <!-- State -->
    <div>
        <label for="state">State</label>
        <input type="text" name="state" id="state" value="{{ old('state', $address->state) }}" required>
    </div>

    <!-- Zip Code -->
    <div>
        <label for="zip_code">Zip Code</label>
        <input type="text" name="zip_code" id="zip_code" value="{{ old('zip_code', $address->zip_code) }}" required>
    </div>

    <!-- Country -->
    <div>
        <label for="country">Country</label>
        <input type="text" name="country" id="country" value="{{ old('country', $address->country) }}" required>
    </div>

    <!-- Phone -->
    <div>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone', $address->phone) }}">
    </div>

    <!-- Full Address -->
    <div>
        <label for="address">Full Address</label>
        <input type="text" name="address" id="address" value="{{ old('address', $address->address) }}">
    </div>

    <button type="submit">Update Address</button>
</form>
