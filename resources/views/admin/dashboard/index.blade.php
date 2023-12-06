<x-master>

    <x-slot:title>
        Admin Dashboard
    </x-slot>

    <div>
        <h1>Admin Dashboard</h1>

        <div class="row p-1">

            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/?text=Image cap" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Hospital</h4>
                        <p class="card-text">Top hospitals</p>

                        <ul class="list-group list-group-flush">
                            @foreach ($topHospitals as $hospital)
                                <li class="list-group-item"><a href="{{ route('hospitals.show', $hospital->id) }}">{{ $hospital->name }}</a></li>
                            @endforeach
                        </ul>

                        <br>

                        <a href="{{ route('hospitals.create') }}" class="card-link">Create Hospital</a>
                        <a href="{{ route('hospitals.index') }}" class="card-link">See all</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/?text=Image cap" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Doctors</h4>
                        <p class="card-text">Doctor list</p>

                        <ul class="list-group list-group-flush">
                            @foreach ($topDoctors as $doctor)
                                <li class="list-group-item"><a href="{{ route('doctors.show', $doctor->id) }}">{{ $doctor->name }}</a></li>
                            @endforeach
                        </ul>

                        <br>

                        <a href="{{ route('doctors.create') }}" class="card-link">Add doctor</a>
                        <a href="{{ route('doctors.index') }}" class="card-link">See all</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/?text=Image cap" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Clinic</h4>
                        <p class="card-text">Top Clinics</p>

                        <ul class="list-group list-group-flush">
                            @foreach ($topClinics as $clinic)
                                <li class="list-group-item"><a href="{{ route('clinics.show', $clinic->id) }}">{{ $clinic->name }}</a></li>
                            @endforeach
                        </ul>

                        <br>

                        <a href="{{ route('clinics.create') }}" class="card-link">Create Clinic</a>
                        <a href="{{ route('clinics.index') }}" class="card-link">See all</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/?text=Image cap" alt="Card image cap">
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
