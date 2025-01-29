<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<!-- Alerts for success and errors -->
@if (session('success'))
    <div class="alert alert-success text-center" role="alert">
        {{ session('success') }}
    </div>
@elseif($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger text-center" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard</a>
            <div class="d-flex">
                <div class="mb-4">
                    <a href="{{ route('addUserForm') }}" class="btn btn-primary">Add New User</a>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-danger btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">


        <!-- Add User Button -->


        <!-- Table of Users -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Profile</th>
                        <th scope="col">Name</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">Age</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($accounts as $account)
                        <tr>
                            <td class="text-center">
                                @if ($account->image)
                                    <img src="{{ asset('storage/' . $account->image) }}" alt="Profile" class="rounded-circle"
                                        style="width: 80px; height: 80px; object-fit: cover;">
                                @else
                                    <p>No Profile</p>
                                @endif
                            </td>
                            <td>{{ $account->firstName . " " . $account->lastName }}</td>
                            <td>{{ $account->birthday }}</td>
                            <td>{{ $account->age }}</td>
                            <td>{{ $account->address }}</td>
                            <td>
                                <a href="{{ route('editUserForm', $account->id) }}"
                                    class="btn btn-warning btn-sm mb-2">Edit</a>
                                <form action="{{ route('deleteUser', $account->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure to delete this user?')" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>