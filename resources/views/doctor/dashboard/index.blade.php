<x-master>

    <x-slot:title>
        Doctor Dashboard
    </x-slot>

    <div>
        <h1>Doctor Dashboard</h1>

        <div class="row">
            <div class="col-md-6">
                Doctor name: {{ $doctor->name }}
            </div>
            <div class="col-md-6">
                Hospital name: {{ $hospital->name }}
            </div>
        </div>

        <div class="row p-1">
            <div class="d-flex justify-content-center">
                <div class="card">
                    <img width="" class="card-img-top" src="https://source.unsplash.com/random/500x200/?healthcare,medical assistant" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Practitioner</h4>
                        <p class="card-text">Top practitioners</p>

                        <ul class="list-group list-group-flush">
                            @foreach ($topPractitioners as $practitioner)
                                <li class="list-group-item"><a href="{{ route('practitioners.show', $practitioner->id) }}">{{ $practitioner->name }}</a></li>
                            @endforeach
                        </ul>

                        <br>

                        <a href="{{ route('practitioners.create') }}" class="card-link">Create practitioner</a>
                        <a href="{{ route('practitioners.index') }}" class="card-link">See all</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-master>
