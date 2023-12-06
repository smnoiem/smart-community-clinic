<x-master>

    <x-slot:title>
        Login Page
    </x-slot>

    <div class="d-flex justify-content-center mt-5">
        <div class="w-50">
            <form class="" method="POST" action="{{ route('login') }}">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId"
                        placeholder="abc@mail.com">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Secret Key</label>
                    <input type="password" class="form-control" name="secret_key" id="secret_key"
                        placeholder="enter your secret key">
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="admin" value="admin">
                        <label class="form-check-label" for="admin">
                            Admin
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="doctor" value="doctor">
                        <label class="form-check-label" for="doctor">
                            Doctor
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="practitioner" value="practitioner"
                            checked>
                        <label class="form-check-label" for="practitioner">
                            Practitioner
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

            </form>
        </div>
    </div>
</x-master>
