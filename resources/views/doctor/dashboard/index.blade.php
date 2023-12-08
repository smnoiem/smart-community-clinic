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
                <div class="col-md-6">
                    <div class="card">
                        <img width="" class="card-img-top" src="https://source.unsplash.com/random/500x200/?hospital-queue" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Consultation Ticket</h4>
                            <p class="card-text">Respond to tickets</p>

                            <h5>Tickets</h5>
                            <ul class="list-group list-group-flush">
                                @foreach ($tickets as $ticket)
                                    <li class="list-group-item">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>{{ $ticket->title }}</p>
                                                <p>Practitioner: {{ $ticket->practitioner?->name }}</p>
                                                <p>Clinic: {{ $ticket->practitioner?->clinic?->name }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('consultation', $ticket->id) }}">Consult Now</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                            <br>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img width="" class="card-img-top" src="https://source.unsplash.com/random/500x200/?healthcare,medical assistant" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Practitioner</h4>
                            <p class="card-text">Top practitioners</p>

                            <ul class="list-group list-group-flush">
                                @foreach ($topPractitioners as $practitioner)
                                    <li class="list-group-item">
                                        <a href="{{ route('practitioners.show', $practitioner->id) }}">{{ $practitioner->name }}</a>

                                        @if($practitioner->clinic)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <small>{{ $practitioner->clinic->name }}</small>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="{{ route('doctor.practitioner.appoint_form', $practitioner->id) }}">Change</a>
                                                </div>
                                            </div>
                                        @else
                                            <div class="row">
                                                <div class="col-md-6"> <small>No yet set</small> </div>
                                                <div class="col-md-6">
                                                    <a href="{{ route('doctor.practitioner.appoint_form', $practitioner->id) }}">Appoint</a>
                                                </div>
                                            </div>
                                        @endif
                                    </li>
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
