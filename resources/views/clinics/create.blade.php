<x-master>

    <x-slot:title>
        Create clinic
    </x-slot>

    <div class="ml-5 p-5">

        <h1>Create clinic</h1>

        <div class="w-75 ml-5">
            <form action="{{ route('clinics.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        placeholder="enter hospital name"
                    />
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
