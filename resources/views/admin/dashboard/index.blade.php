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
                        <a href="{{ route('practitioners.create') }}" class="card-link">Create practitioner</a>
                        <a href="{{ route('practitioners.index') }}" class="card-link">See all</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-master>
