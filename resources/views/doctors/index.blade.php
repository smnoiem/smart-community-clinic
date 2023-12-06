<x-master>

    <x-slot:title>
        Doctors
    </x-slot>

    <div class="ml-5 p-5">

        <h1>Doctors</h1>

        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Doctor's Name</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctors as $doctor)
                        <tr class="">
                            <td scope="row">{{ $doctor->id }}</td>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $doctors->links('pagination::bootstrap-5') }}

    </div>

</x-master>
