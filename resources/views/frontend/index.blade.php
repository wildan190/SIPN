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
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-3xl font-semibold text-green-700">Nurul Iman</a>

            <!-- Hamburger Icon (Visible only on mobile) -->
            <button class="block lg:hidden text-white focus:outline-none" id="hamburger-btn">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>

            <!-- Desktop Navbar Links -->
            <ul class="lg:flex space-x-6 hidden lg:flex-row">
                <li><a href="#about" class="hover:text-green-500 transition">About</a></li>
                <li><a href="#posts" class="hover:text-green-500 transition">Post</a></li>
                <li><a href="#events" class="hover:text-green-500 transition">Events</a></li>
                <li><a href="#gallery" class="hover:text-green-500 transition">Gallery</a></li>
                <li><a href="#alumni" class="hover:text-green-500 transition">Alumni</a></li>
                <li><a href="#contact" class="hover:text-green-500 transition">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar (Hidden on larger screens, visible on mobile) -->
    <div class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden" id="sidebar-overlay"></div>

    <!-- Sidebar Links (Hidden on larger screens, appears from right) -->
    <div class="fixed inset-y-0 right-0 text-white w-64 transform translate-x-full transition-transform z-50"
        id="sidebar" style="background: linear-gradient(180deg, rgba(0, 0, 128, 0.8), rgba(0, 0, 139, 0.7));">
        <div class="flex justify-end p-4">
            <button id="close-sidebar" class="text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <ul class="flex flex-col space-y-0 p-4">
            <li><a href="#about"
                    class="block w-full hover:bg-green-600 px-6 py-3 rounded-lg border-b-2 border-green-500 transition-all">About</a>
            </li>
            <li><a href="#posts"
                    class="block w-full hover:bg-green-600 px-6 py-3 rounded-lg border-b-2 border-green-500 transition-all">Post</a>
            </li>
            <li><a href="#events"
                    class="block w-full hover:bg-green-600 px-6 py-3 rounded-lg border-b-2 border-green-500 transition-all">Events</a>
            </li>
            <li><a href="#gallery"
                    class="block w-full hover:bg-green-600 px-6 py-3 rounded-lg border-b-2 border-green-500 transition-all">Gallery</a>
            </li>
            <li><a href="#alumni"
                    class="block w-full hover:bg-green-600 px-6 py-3 rounded-lg border-b-2 border-green-500 transition-all">Alumni</a>
            </li>
            <li><a href="#contact"
                    class="block w-full hover:bg-green-600 px-6 py-3 rounded-lg border-b-2 border-green-500 transition-all">Contact</a>
            </li>
        </ul>
    </div>
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
        <h2 class="text-4xl font-bold text-green-700 mb-12">Alumni Kami</h2>

        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Alumni Card -->
            @foreach ($alumni as $alumnus)
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                    <!-- Avatar Image -->
                    <div class="flex justify-center">
                        <img src="{{ $alumnus->picture_upload ? asset('storage/' . $alumnus->picture_upload) : 'https://via.placeholder.com/150' }}"
                            alt="Alumni Image"
                            class="w-32 h-32 object-cover rounded-full border-4 border-white shadow-md mt-8 mb-4" />
                    </div>

                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold text-green-700">{{ $alumnus->name }}</h3>
                        <p class="text-gray-600 mt-2 mb-4">
                            <i class="fas fa-phone-alt text-green-700 mr-2"></i>{{ $alumnus->phone }} <br>
                            <i class="fas fa-envelope text-green-700 mr-2"></i>{{ $alumnus->email }} <br>
                            <i class="fas fa-university text-green-700 mr-2"></i>{{ $alumnus->almamater }}
                        </p>

                        <!-- Optional: Social Media or Contact Buttons -->
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="text-green-700 hover:text-green-900"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-green-700 hover:text-green-900"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="text-green-700 hover:text-green-900"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <!-- Get in Touch Section -->
    <section id="contact" class="py-16 bg-gradient-to-r from-green-800 via-green-900 to-blue-700 px-4 sm:px-8">
        <h2 class="text-4xl font-bold text-white text-center mb-12">
            Hubungi Kami
        </h2>

        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Left Column: Contact Form -->
            <div class="bg-white p-8 rounded-lg shadow-xl">
                <h3 class="text-2xl font-semibold text-green-700 mb-6">
                    Kirim Pesan
                </h3>
                <form action="{{ route('send.message') }}" method="POST">
                    @csrf
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
                        <a href="https://wa.me/62811144793" class="text-green-700 hover:text-green-900"
                            target="_blank">+62 811 144 793
                        </a>
                    </li>

                    <!-- Email -->
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-envelope text-green-700 mr-4"></i>
                        <a href="mailto:contact@nuruliman.com"
                            class="text-green-700 hover:text-green-900">contact@nuruliman.com</a>
                    </li>

                    <!-- Address -->
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-map-marker-alt text-green-700 mr-4"></i>
                        <span>Jl. Profesor Dr. Insinyur Soetami, Kp. Malangnengah, Cijoro Pasir, Rangkasbitung</span>
                    </li>

                    <!-- City -->
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-city text-green-700 mr-4"></i>
                        <span>Lebak, Banten</span>
                    </li>

                    <!-- Postal Code -->
                    <li class="flex items-center text-gray-700">
                        <i class="fas fa-mail-bulk text-green-700 mr-4"></i>
                        <span>42316</span>
                    </li>

                    <!-- Social Media -->
                    <li class="flex items-center text-gray-700 space-x-6">
                        <a href="#" class="text-gray-700 hover:text-green-700" target="_blank">
                            <i class="fab fa-facebook-square text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-700 hover:text-green-700" target="_blank">
                            <i class="fab fa-twitter-square text-2xl"></i>
                        </a>
                        <a href="https://www.instagram.com/nurulimanoffical" target="_blank"
                            class="text-gray-700 hover:text-green-700">
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
                <a href="https://www.instagram.com/nurulimanoffical"
                    class="text-white hover:text-green-400 mx-4 text-3xl transition duration-300" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://youtube.com/@nurulimangaskubgabungansan501?si=fcr6C8Idx-UrE0vx"
                    class="text-white hover:text-green-400 mx-4 text-3xl transition duration-300" target="_blank">
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

<!-- Add JavaScript to toggle the sidebar -->
<script>
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const closeSidebar = document.getElementById('close-sidebar');

    hamburgerBtn.addEventListener('click', () => {
        sidebar.classList.toggle('translate-x-full');
        sidebarOverlay.classList.toggle('hidden');
    });

    closeSidebar.addEventListener('click', () => {
        sidebar.classList.add('translate-x-full');
        sidebarOverlay.classList.add('hidden');
    });

    sidebarOverlay.addEventListener('click', () => {
        sidebar.classList.add('translate-x-full');
        sidebarOverlay.classList.add('hidden');
    });
</script>

</html>
