<x-master>

    <x-slot:title>
        Appoint Practitioner to clinic
    </x-slot>

    <div class="ml-5 p-5">

        <h1>Appoint Practitioner to clinic</h1>

        <div class="w-75 ml-5">

            <h3>Practitioner</h3>
            <p>Name: {{ $practitioner->name }}</p>
            <p>Email: {{ $practitioner->email }}</p>

            <form action="{{ route('doctor.practitioner.appoint', $practitioner->id) }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">

                    <div class="mb-3">
                        <label for="clinic" class="form-label">Clinic</label>
                        <select
                            class="form-select form-select-lg"
                            name="clinic"
                            id="clinic"
                        >
                            <option selected>Select one</option>

                            @foreach ($clinics as $clinic)
                                <option value="{{ $clinic->id }}" {{ $practitioner->clinic?->id == $clinic->id ? "selected" : "" }}>
                                    {{ $clinic->name }} - {{ $clinic->address }}
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
