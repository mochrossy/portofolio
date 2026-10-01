@if(session('success'))
    <div class="mx-auto mb-6 w-full rounded-lg border-l-4 border-green-500 bg-green-50 p-4 text-green-800 sm:w-3/4">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('contact.send') }}" method="POST" class="mx-auto w-full pt-10 sm:w-3/4">
    @csrf

    <div class="flex flex-col md:flex-row">
    <div class="mr-3 w-full md:w-1/2 lg:mr-5">
        <input
            class="w-full rounded border-grey-50 px-4 py-3 font-body text-black"
            placeholder="Name"
            type="text"
            name="name"
            value="{{ old('name') }}"
        />
        @error('name')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <div class="mt-6 w-full md:mt-0 md:ml-3 md:w-1/2 lg:ml-5">
        <input
            class="w-full rounded border-grey-50 px-4 py-3 font-body text-black"
            placeholder="Email"
            type="email"
            name="email"
            value="{{ old('email') }}"
        />
        @error('email')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>
</div>
<textarea
    class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8"
    placeholder="Message"
    name="message"
    cols="30"
    rows="10"
>{{ old('message') }}</textarea>
@error('message')
    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
@enderror