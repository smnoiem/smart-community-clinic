<x-master>

    <x-slot:title>
        Hospitals
    </x-slot>

    <div class="ml-5 p-5">

        <h1>Hospitals</h1>

        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Hospital Name</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hospitals as $hospital)
                        <tr class="">
                            <td scope="row">{{ $hospital->id }}</td>
                            <td>{{ $hospital->name }}</td>
                            <td>{{ $hospital->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $hospitals->links('pagination::bootstrap-5') }}

    </div>

</x-master>
