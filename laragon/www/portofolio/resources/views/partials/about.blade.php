<div class="bg-grey-50" id="about">
    <div class="container flex flex-col items-center py-16 md:py-20 lg:flex-row">

        {{-- Kolom kiri: deskripsi --}}
        <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
            <h2 class="font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                Who am I?
            </h2>
            <h4 class="pt-6 font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                I'm Moch. Rossy Avian I., a System Administrator, DevOps and Fullstack learner
            </h4>
            <p class="pt-6 font-body leading-relaxed text-grey-20">
                Saya seorang profesional di bidang IT dengan pengalaman dalam implementasi
                infrastruktur server, mail server, dan pengembangan aplikasi web. Fokus saya
                adalah membangun solusi yang handal, aman, dan mudah dipelihara — mulai dari
                konfigurasi Linux server hingga pengembangan aplikasi dengan Laravel dan
                Filament.
            </p>

            {{-- Sosial media --}}
            <div class="flex flex-col justify-center pt-6 sm:flex-row lg:justify-start">
                <div class="flex items-center justify-center sm:justify-start">
                    <p class="font-body text-lg font-semibold uppercase text-grey-20">
                        Connect with me
                    </p>
                    <div class="hidden sm:block">
                        <i class="bx bx-chevron-right text-2xl text-primary"></i>
                    </div>
                </div>
                <div class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                    <a href="#" class="pl-4 first:pl-0">
                        <i class="bx bxl-facebook-square text-2xl text-primary hover:text-yellow"></i>
                    </a>
                    <a href="#" class="pl-4">
                        <i class="bx bxl-twitter text-2xl text-primary hover:text-yellow"></i>
                    </a>
                    <a href="#" class="pl-4">
                        <i class="bx bxl-github text-2xl text-primary hover:text-yellow"></i>
                    </a>
                    <a href="#" class="pl-4">
                        <i class="bx bxl-linkedin text-2xl text-primary hover:text-yellow"></i>
                    </a>
                    <a href="#" class="pl-4">
                        <i class="bx bxl-instagram text-2xl text-primary hover:text-yellow"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Kolom kanan: skill bars --}}
        <div class="w-full pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
            @forelse($skills as $skill)
                <div class="{{ $loop->first ? '' : 'pt-6' }}">
                    <div class="flex items-end justify-between">
                        <h4 class="font-body font-semibold uppercase text-black">
                            {{ $skill->name }}
                        </h4>
                        <h3 class="font-body text-3xl font-bold text-primary">
                            {{ $skill->level }}%
                        </h3>
                    </div>
                    <div class="mt-2 h-3 w-full rounded-full bg-lila">
                        <div class="h-3 rounded-full bg-primary" style="width: {{ $skill->level }}%"></div>
                    </div>
                </div>
            @empty
                <p class="text-center text-grey-40">
                    Belum ada skill. Tambahkan di panel admin.
                </p>
            @endforelse
        </div>

    </div>
</div>