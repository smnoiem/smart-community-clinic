<x-master>

    <x-slot:title>
        Patient's Queue
    </x-slot>

    <div class="d-flex justify-content-center mt-5">
        <div class="w-50">

            <h5>Queue</h5>
            <ul>

                @foreach ($visits as $visit)

                    <li>

                        <div class="row">

                            <div class="col-md-8">
                                <p>SL: {{ $visit->id }}</p>
                                <p>Name: {{ $visit->name }}</p>
                                <p>Age: {{ $visit->age }}</p>
                            </div>

                            <div class="col-md-4">
                                <a
                                    name=""
                                    id=""
                                    class="btn btn-warning"
                                    href="{{ route('practitioner.collect_medical_history', $visit->id) }}"
                                    role="button"
                                >See patient</a
                    >
                            </div>

                        </div>

                    </li>

                @endforeach



            </ul>

        </div>
    </div>
</x-master>
