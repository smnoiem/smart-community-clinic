<x-master>

    <x-slot:title>
        Clinics
    </x-slot>

    <div class="ml-5 p-5">

        <h1>Clinics</h1>

        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Clinic Name</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clinics as $clinic)
                        <tr class="">
                            <td scope="row">{{ $clinic->id }}</td>
                            <td>{{ $clinic->name }}</td>
                            <td>{{ $clinic->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $clinics->links('pagination::bootstrap-5') }}

    </div>

</x-master>
