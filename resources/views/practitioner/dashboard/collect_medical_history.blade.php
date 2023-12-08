<x-master>

    <x-slot:title>
        Collect medical data
    </x-slot>

    <div class="d-flex justify-content-center mt-5">
        <div class="w-50">

            <p>Patient: {{ $visit->patient_name }}</p>
            <p>age: {{ $visit->age }}</p>

            <h5>Symptoms: </h5>
            <ul>
                @foreach ($visit->medicalHistories as $medicalHistory)
                <li>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Type: {{ $medicalHistory->symptom_type }}</p>
                        </div>
                        <div class="col-md-6">
                            <p>Description: {{ $medicalHistory->symptom_value }}</p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="w-50">
            <form class="" method="POST" action="{{ route('practitioner.store_medical_history', $visit->id) }}">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="" class="form-label">Symptom Type</label>
                    <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelpId"
                        placeholder="enter type">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Symptom Value</label>
                    <input type="text" class="form-control" name="value" id="value" aria-describedby="valueHelpId"
                        placeholder="enter value">
                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4">Save History</button>

            </form>
            <a
                name=""
                id=""
                class="btn btn-warning"
                href="{{ route('consultation.create', $visit->id) }}"
                role="button"
                >Consult a doctor</a
            >
        </div>
    </div>
</x-master>
