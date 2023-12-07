<x-master>

    <x-slot:title>
        Add Practitioner profile
    </x-slot>

    <div class="ml-5 p-5">

        <h1>Add practitioner profile</h1>

        <div class="w-75 ml-5">
            <form action="{{ route('practitioners.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        placeholder="enter practitioner name"
                    />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="email"
                        aria-describedby="emailHelpId"
                        placeholder="abc@mail.com"
                    />
                    <small id="emailHelpId" class="form-text text-muted d-none"
                        >Error message</small
                    >
                </div>


                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" name="address" id="address" rows="3"></textarea>
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
