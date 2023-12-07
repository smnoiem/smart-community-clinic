<x-master>

    <x-slot:title>
        Appoint Clinic to hospital
    </x-slot>

    <div class="ml-5 p-5">

        <h1>Appoint Clinic to hospital</h1>

        <div class="w-75 ml-5">

            <h3>Clinic</h3>
            <p>Name: {{ $clinic->name }}</p>
            <p>Address: {{ $clinic->email }}</p>

            <form action="{{ route('admin.clinic.appoint', $clinic->id) }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">

                    <div class="mb-3">
                        <label for="hospital" class="form-label">Hospital</label>
                        <select
                            class="form-select form-select-lg"
                            name="hospital"
                            id="hospital"
                        >
                            <option selected>Select one</option>

                            @foreach ($hospitals as $hospital)
                                <option value="{{ $hospital->id }}" {{ $clinic->hospital?->id == $hospital->id ? "selected" : "" }}>
                                    {{ $hospital->name }} - {{ $hospital->address }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Save
                </button>



            </form>
        </div>
    </div>

</x-master>
