<x-master>

    <x-slot:title>
        Enqueue Patients
    </x-slot>

    <div class="d-flex justify-content-center mt-5">
        <div class="w-50">
            <form class="" method="POST" action="{{ route('practitioner.enqueue') }}">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="" class="form-label">Patients name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelpId"
                        placeholder="enter name">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" id="age" aria-describedby="ageHelpId"
                        placeholder="enter age">
                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4">Enqueue Patient</button>

            </form>
        </div>

        <div class="w-50">

            <h5>Queue</h5>
            <ul>

                @foreach ($visits as $visit)

                    <li>

                        <div class="row">

                            <div class="col-md-8">
                                <p>SL: {{ $visit->id }}</p>
                                <p>Name: {{ $visit->patient_name }}</p>
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
