<div class="container py-16 md:py-20" id="contact">
    <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
        Here's a contact form
    </h2>
    <h4 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
        Have Any Questions?
    </h4>
    <div class="mx-auto w-full pt-5 text-center sm:w-2/3 lg:pt-6">
        <p class="font-body text-grey-10">
            Punya pertanyaan, ide project, atau ingin berkolaborasi? Kirim pesan
            melalui form di bawah ini. Saya akan membalas secepatnya.
        </p>
    </div>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="mx-auto mt-6 w-full rounded-lg border-l-4 border-green-500 bg-green-50 p-4 text-left text-green-800 sm:w-3/4">
            <i class="bx bx-check-circle mr-2"></i>
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST" class="mx-auto w-full pt-10 sm:w-3/4">
        @csrf

        {{-- Honeypot (anti-spam) --}}
        <div style="display:none;">
            <input type="text" name="website" tabindex="-1" autocomplete="off">
        </div>

        <div class="flex flex-col md:flex-row">
            <div class="mr-3 w-full md:w-1/2 lg:mr-5">
                <input
                    class="w-full rounded border-grey-50 px-4 py-3 font-body text-black focus:border-primary focus:outline-none"
                    placeholder="Name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                />
                @error('name')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-6 w-full md:mt-0 md:ml-3 md:w-1/2 lg:ml-5">
                <input
                    class="w-full rounded border-grey-50 px-4 py-3 font-body text-black focus:border-primary focus:outline-none"
                    placeholder="Email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                />
                @error('email')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <textarea
            class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black focus:border-primary focus:outline-none md:mt-8"
            placeholder="Message"
            name="message"
            cols="30"
            rows="10"
            required
        >{{ old('message') }}</textarea>
        @error('message')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror

        {{-- Tombol Send --}}
        <button
            type="submit"
            class="mt-6 flex items-center justify-center rounded bg-primary px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20"
        >
            Send
            <i class="bx bx-chevron-right relative -right-2 text-3xl"></i>
        </button>
    </form>

    {{-- Info kontak --}}
    <div class="flex flex-col pt-16 lg:flex-row">
        <div class="w-full border-l-2 border-t-2 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3">
            <div class="flex items-center">
                <i class="bx bx-phone text-2xl text-grey-40"></i>
                <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
                    My Phone
                </p>
            </div>
            <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                (+62) 812 3456 7890
            </p>
        </div>
        <div class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2">
            <div class="flex items-center">
                <i class="bx bx-envelope text-2xl text-grey-40"></i>
                <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
                    My Email
                </p>
            </div>
            <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                email@domain.com
            </p>
        </div>
        <div class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2">
            <div class="flex items-center">
                <i class="bx bx-map text-2xl text-grey-40"></i>
                <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
                    My Address
                </p>
            </div>
            <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                Bekasi, Jawa Barat, Indonesia
            </p>
        </div>
    </div>
</div>