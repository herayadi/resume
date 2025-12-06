    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="background-elements">
            <div class="bg-circle circle-1"></div>
            <div class="bg-circle circle-2"></div>
        </div>

        <div class="hero-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <div class="hero-text">
                            <h1><span class="accent-text">Hi</span></h1>
                            <h2>I am {{ $user->name }}</h2>
                            <p class="lead">
                                I'm a
                                <span class="typed" data-typed-items="{{ $user->role }}"></span>
                            </p>
                            <p class="description">
                                Driving performance and scalability with clean integration, smart automation, and solid
                                architecture.
                            </p>

                            <div class="hero-actions">
                                <a href="#resume" class="btn btn-primary">View My Work</a>
                                <a href="#contact" class="btn btn-outline">Get In Touch</a>
                            </div>

                            <div class="social-links">
                                @foreach ($sosmeds as $sosmed)
                                    <a href="{{ $sosmed->href }}"><i class="{{ $sosmed->icon }}"></i></a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                        <div class="hero-visual">
                            <div class="profile-container">
                                <div class="profile-background"></div>
                                <img src="assets/img/profile/{{ $user->pict }}" alt="{{ $user->pict }}"
                                    class="profile-image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->
