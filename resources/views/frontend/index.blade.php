<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pondok Pesantren Nurul Iman</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="font-sans bg-gradient-to-r from-green-400 to-blue-900">
    <!-- Navbar -->
    <nav class="bg-transparent text-white py-6 w-full z-50">
        <div class="container mx-auto px-4 sm:px-8 flex justify-between items-center">
            <a href="#" class="text-3xl font-semibold text-green-700">Nurul Iman</a>
            <ul class="flex space-x-6">
                <li>
                    <a href="#about" class="hover:text-green-500 transition">About</a>
                </li>
                <li>
                    <a href="#posts" class="hover:text-green-500 transition">Post</a>
                </li>
                <li>
                    <a href="#events" class="hover:text-green-500 transition">Events</a>
                </li>
                <li>
                    <a href="#gallery" class="hover:text-green-500 transition">Gallery</a>
                </li>
                <li>
                    <a href="#alumni" class="hover:text-green-500 transition">Alumni</a>
                </li>
                <li>
                    <a href="#contact" class="hover:text-green-500 transition">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="h-screen bg-cover bg-center flex items-center justify-center text-white text-center px-4 sm:px-8"
        style="background-image: url('https://www.example.com/hero-image.jpg')">
        <div class="bg-opacity-50 p-8 sm:p-12 rounded-lg">
            <h1 class="text-4xl sm:text-6xl font-bold leading-tight mb-4">
                Selamat Datang di Pondok Pesantren Nurul Iman
            </h1>
            <p class="text-lg sm:text-2xl mb-8">
                Menjadi generasi yang berkualitas, cerdas, dan berakhlak mulia.
            </p>
            <a href="#about"
                class="bg-green-500 px-8 py-3 rounded-full text-lg font-semibold hover:bg-green-600 transition">Kenali
                Kami</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about"
        class="py-16 bg-gradient-to-r from-green-100 via-green-300 to-blue-300 text-center px-4 sm:px-8">
        <h2 class="text-4xl font-bold text-green-700 mb-8">Tentang Kami</h2>

        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Deskripsi tentang Pondok Pesantren -->
            <div
                class="flex flex-col justify-center text-left p-6 bg-white rounded-xl shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                <p class="text-lg text-gray-700 mb-6">
                    Pondok Pesantren Nurul Iman adalah lembaga pendidikan yang berfokus
                    pada pengembangan ilmu agama dan umum dengan mengedepankan akhlak
                    mulia. Kami berkomitmen untuk menciptakan generasi muda yang cerdas,
                    berakhlak, dan siap menghadapi tantangan masa depan.
                </p>
            </div>

            <!-- Visi dan Misi -->
            <div class="flex flex-col justify-center space-y-6">
                <div
                    class="p-6 bg-white rounded-xl shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-2xl font-semibold text-green-700 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-700 mr-3" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c4.418 0 8 3.582 8 8s-3.582 8-8 8-8-3.582-8-8 3.582-8 8-8zM12 4a8 8 0 10.001 16.001A8 8 0 0012 4z" />
                        </svg>
                        Visi
                    </h3>
                    <p class="text-lg text-gray-700">
                        Mewujudkan generasi muda yang cerdas, beriman, dan bertaqwa kepada
                        Allah SWT. Kami berfokus pada pengembangan ilmu agama yang
                        seimbang dengan ilmu pengetahuan umum untuk membentuk santri yang
                        unggul di berbagai bidang.
                    </p>
                </div>

                <div
                    class="p-6 bg-white rounded-xl shadow-lg transform hover:scale-105 transition duration-300 ease-in-out">
                    <h3 class="text-2xl font-semibold text-green-700 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-700 mr-3" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5h18M3 10h18M3 15h18M3 20h18" />
                        </svg>
                        Misi
                    </h3>
                    <ul class="text-lg text-gray-700 space-y-2">
                        <li>1. Meningkatkan kualitas pendidikan agama dan umum.</li>
                        <li>2. Membentuk karakter yang baik pada setiap santri.</li>
                        <li>3. Menjalin hubungan yang baik dengan masyarakat.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section id="posts"
        class="py-16 bg-gradient-to-r from-green-100 via-green-200 to-blue-300 text-center px-4 sm:px-8">
        <h2 class="text-4xl font-bold text-green-700 mb-8">Berita Terbaru</h2>

        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Post 1 -->
            @foreach ($posts as $post)
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ $post->picture_upload ? asset('storage/' . $post->picture_upload) : 'https://via.placeholder.com/500' }}"
                        alt="Post Image" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-green-700 mb-4">
                            {{ $post->headline }}
                        </h3>
                        <p class="text-gray-700 mb-4">
                            {{ Str::limit($post->content, 150) }}
                        </p>
                        <a href="#" class="text-green-500 hover:underline">Baca Selengkapnya</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section id="events"
        class="py-16 bg-gradient-to-r from-green-100 via-green-200 to-blue-300 text-center px-4 sm:px-8">
        <h2 class="text-4xl font-bold text-green-700 mb-8">Upcoming Events</h2>

        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            @foreach ($upcomingEvents as $event)
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300 ease-in-out">
                    <img src="{{ Storage::url($event->picture_upload) }}" alt="Event Image"
                        class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-green-700 mb-4">{{ $event->headline }}</h3>
                        <p class="text-gray-700 mb-4">
                            {{ $event->event_description }}
                        </p>
                        <!-- You can adjust the date dynamically if you have it in your event model -->
                        <p class="text-gray-600 text-sm">
                            <strong>{{ \Carbon\Carbon::parse($event->date)->format('d F Y') }}</strong>
                        </p>
                        <a href="#" class="text-green-500 hover:underline mt-4 inline-block">Learn More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <!-- Gallery Section -->
    <section id="gallery"
        class="py-16 bg-gradient-to-r from-green-100 via-green-200 to-blue-300 text-center px-4 sm:px-8">
        <h2 class="text-4xl font-bold text-green-700 mb-8">Galeri Kami</h2>

        <!-- Gallery Metro Grid -->
        <div class="container mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-0">
            <!-- Metro Tile 1 -->
            @foreach ($galleries as $gallery)
                <div class="relative group">
                    <img src="{{ Storage::url($gallery->picture_upload) }}" alt="Gallery Image"
                        class="w-full h-full object-cover transform transition duration-300 group-hover:scale-105" />
                    <div
                        class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <span class="text-white text-lg font-semibold">{{ $gallery->headline }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <!-- Alumni Kami Section -->
    <section id="alumni"
        class="py-16 bg-gradient-to-r from-green-100 via-green-200 to-blue-300 text-center px-4 sm:px-8">
        <h2 class="text-4xl font-bold text-green-700 mb-8">Alumni Kami</h2>

        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Alumni Card 1 -->
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                <img src="https://via.placeholder.com/300x300" alt="Alumni Image" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-green-700">Nama Alumni 1</h3>
                    <p class="text-gray-600 mt-2">
                        Lulusan dari program studi Tafsiran Al-Qur'an, kini bekerja
                        sebagai dosen di universitas terkemuka.
                    </p>
                </div>
            </div>

            <!-- Alumni Card 2 -->
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                <img src="https://via.placeholder.com/300x300" alt="Alumni Image" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-green-700">Nama Alumni 2</h3>
                    <p class="text-gray-600 mt-2">
                        Lulusan dari jurusan Ekonomi Islam, bekerja sebagai manajer di
                        perusahaan internasional.
                    </p>
                </div>
            </div>

            <!-- Alumni Card 3 -->
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                <img src="https://via.placeholder.com/300x300" alt="Alumni Image" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-green-700">Nama Alumni 3</h3>
                    <p class="text-gray-600 mt-2">
                        Lulusan jurusan Pendidikan Agama, kini aktif mengajar di
                        sekolah-sekolah di seluruh Indonesia.
                    </p>
                </div>
            </div>

            <!-- Alumni Card 4 -->
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                <img src="https://via.placeholder.com/300x300" alt="Alumni Image" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-green-700">Nama Alumni 4</h3>
                    <p class="text-gray-600 mt-2">
                        Menggeluti dunia kewirausahaan, sekarang memiliki bisnis yang
                        berkembang pesat di bidang pendidikan.
                    </p>
                </div>
            </div>

            <!-- Alumni Card 5 -->
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                <img src="https://via.placeholder.com/300x300" alt="Alumni Image" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-green-700">Nama Alumni 5</h3>
                    <p class="text-gray-600 mt-2">
                        Bekerja di bidang teknologi, mengembangkan aplikasi berbasis
                        Islami untuk membantu umat.
                    </p>
                </div>
            </div>

            <!-- Alumni Card 6 -->
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                <img src="https://via.placeholder.com/300x300" alt="Alumni Image" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-green-700">Nama Alumni 6</h3>
                    <p class="text-gray-600 mt-2">
                        Lulusan dari jurusan Ilmu Komunikasi, kini menjadi jurnalis di
                        media ternama.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Get in Touch Section -->
    <section id="get-in-touch" class="py-16 bg-gradient-to-r from-green-800 via-green-900 to-blue-700 px-4 sm:px-8">
        <h2 class="text-4xl font-bold text-white text-center mb-12">
            Hubungi Kami
        </h2>

        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Left Column: Contact Form -->
            <div class="bg-white p-8 rounded-lg shadow-xl">
                <h3 class="text-2xl font-semibold text-green-700 mb-6">
                    Kirim Pesan
                </h3>
                <form action="#" method="POST">
                    <!-- Name Field -->
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" id="name" name="name"
                            class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                            placeholder="Masukkan Nama Anda" required />
                    </div>

                    <!-- Email Field -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email"
                            class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                            placeholder="Masukkan Email Anda" required />
                    </div>

                    <!-- Message Field -->
                    <div class="mb-6">
                        <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                        <textarea id="message" name="message" rows="4"
                            class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                            placeholder="Tulis pesan Anda" required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-green-700 text-white py-3 rounded-lg hover:bg-green-600 transition duration-300">
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- Right Column: Contact Details -->
            <div class="bg-white p-8 rounded-lg shadow-xl">
                <h3 class="text-2xl font-semibold text-green-700 mb-6">
                    Detail Kontak
                </h3>
                <ul class="space-y-6">
                    <!-- Phone -->
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-phone-alt text-green-700 mr-4"></i>
                        <span>+62 812 3456 7890</span>
                    </li>

                    <!-- Email -->
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-envelope text-green-700 mr-4"></i>
                        <span>contact@nuruliman.com</span>
                    </li>

                    <!-- Address -->
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-map-marker-alt text-green-700 mr-4"></i>
                        <span>Jl. Raya No. 123, Kota XYZ, Indonesia</span>
                    </li>

                    <!-- City -->
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-city text-green-700 mr-4"></i>
                        <span>Kota XYZ, Indonesia</span>
                    </li>

                    <!-- Postal Code -->
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-mail-bulk text-green-700 mr-4"></i>
                        <span>12345</span>
                    </li>

                    <!-- Social Media -->
                    <li class="flex items-center text-gray-700 space-x-6">
                        <a href="#" class="text-gray-700 hover:text-green-700">
                            <i class="fab fa-facebook-square text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-700 hover:text-green-700">
                            <i class="fab fa-twitter-square text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-700 hover:text-green-700">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gradient-to-r from-green-800 via-green-900 to-blue-700 text-white py-12">
        <div class="container mx-auto text-center">
            <!-- Footer Navigation Links -->
            <div class="mb-8">
                <ul class="flex justify-center space-x-8">
                    <li>
                        <a href="#about" class="hover:text-green-400 transition duration-300">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="#get-in-touch" class="hover:text-green-400 transition duration-300">Hubungi Kami</a>
                    </li>
                    <li>
                        <a href="#events" class="hover:text-green-400 transition duration-300">Event</a>
                    </li>
                    <li>
                        <a href="#gallery" class="hover:text-green-400 transition duration-300">Galeri</a>
                    </li>
                </ul>
            </div>

            <!-- Social Media Icons -->
            <div class="mb-8">
                <a href="#" class="text-white hover:text-green-400 mx-4 text-3xl transition duration-300">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="#" class="text-white hover:text-green-400 mx-4 text-3xl transition duration-300">
                    <i class="fab fa-twitter-square"></i>
                </a>
                <a href="#" class="text-white hover:text-green-400 mx-4 text-3xl transition duration-300">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-white hover:text-green-400 mx-4 text-3xl transition duration-300">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>

            <!-- Copyright Section -->
            <div>
                <p class="text-sm">
                    &copy; 2025 Pondok Pesantren Nurul Iman. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>
