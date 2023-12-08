<x-master>

    <x-slot:title>
        Practitioner Dashboard
    </x-slot>

    <div>
        <h1>Practitioner Dashboard</h1>

        <div class="row">
            <div class="col-md-6">
                <span class="text fw-bold"> Practitioner name: </span> <span> {{ $practitioner->name }} </span> <br>
                <span class="text fw-bold"> Clinic name: </span> <span> {{ $clinic->name }} </span><br>
                <span class="text fw-bold"> Hospital name: </span> <span> {{ $practitioner?->hospital->name }} </span><br>
            </div>
            <div class="col-md-6">
                @if($practitioner?->clinic && $practitioner?->hospital)
                    <a
                        name=""
                        id=""
                        class="btn btn-warning"
                        href="{{ route('practitioner.enqueue_form') }}"
                        role="button"
                        >Start seeing patients</a
                    >
                @endif
            </div>
        </div>

    </div>

</x-master>
