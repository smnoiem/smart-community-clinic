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
    </div>
</x-master>
