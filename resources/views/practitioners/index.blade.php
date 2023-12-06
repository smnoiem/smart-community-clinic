<x-master>

    <x-slot:title>
        Practitioners
    </x-slot>

    <div class="ml-5 p-5">

        <h1>Practitioners</h1>

        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Practitioner's Name</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($practitioners as $practitioner)
                        <tr class="">
                            <td scope="row">{{ $practitioner->id }}</td>
                            <td>{{ $practitioner->name }}</td>
                            <td>{{ $practitioner->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $practitioners->links('pagination::bootstrap-5') }}

    </div>

</x-master>
