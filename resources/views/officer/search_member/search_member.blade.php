@extends('dashboard')
@extends('sidebar')
@section('title', 'Dashboard')
@section('content')

    <div class="card m-3">
        <div class="card-body">
            <div class="card-text">
                <h2 class="mb-4">Member Information Form</h2>
                <!-- Form -->
                <form>
                    <!-- ID Card Number -->
                    <div class="mb-3">
                        <label for="idCardNumber" class="form-label">ID Card Number</label>
                        <input type="text" class="form-control" id="idCardNumber" name="idCardNumber" required>
                    </div>

                    <!-- Member Number -->
                    <div class="mb-3">
                        <label for="memberNumber" class="form-label">Member Number</label>
                        <input type="text" class="form-control" id="memberNumber" name="memberNumber" required>
                    </div>

                    <!-- First Name -->
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>

                    <!-- Last Name -->
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection