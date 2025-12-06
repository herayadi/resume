     <!-- Resume Section -->
     <section id="resume" class="resume section">
         <!-- Section Title -->
         <div class="container section-title" data-aos="fade-up">
             <h2>Resume</h2>
             <p>
                 Experienced Middleware & Integration Specialist with a strong foundation in enterprise architecture and
                 API development. Proven track record in implementing scalable solutions using webMethods, optimizing
                 ESB systems, and automating complex business processes. Skilled in cross-functional collaboration,
                 agile delivery, and driving digital transformation across industries.
             </p>
         </div>
         <!-- End Section Title -->

         <div class="container" data-aos="fade-up" data-aos-delay="100">
             <div class="row gy-4">
                 <!-- Left column with summary and contact -->
                 <div class="col-lg-4">
                     <div class="resume-side" data-aos="fade-right" data-aos-delay="100">
                         <div class="profile-img mb-5">
                             <img src="assets/img/profile/heri.jpg" alt="Profile Heri Rahmat"
                                 class="img-fluid rounded" />
                         </div>

                         <h3>Professional Summary</h3>
                         <p>
                             Results-oriented Middleware Developer with deep expertise in webMethods and enterprise
                             integration. Passionate about crafting robust, scalable systems that enhance performance
                             and streamline operations. Adept at designing APIs, managing ESB environments, and
                             executing seamless data migrations to support business agility and growth.
                         </p>

                         {{-- Contact Information --}}
                         <h3 class="mt-4">Contact Information</h3>
                         <ul class="contact-info list-unstyled">
                             <li>
                                 <a href="{{ $user->map }}"> <i class="bi bi-geo-alt"></i>
                                     {{ $user->city }}</a>
                             </li>
                             @foreach ($sosmeds as $sosmed)
                                 @php
                                     $sosmedType =
                                         $sosmed->type === 'email' ? 'mailto:' . $sosmed->href : $sosmed->href;
                                 @endphp

                                 <li>
                                     <a href="{{ $sosmedType }}"> <i class="{{ $sosmed->icon }}"></i>
                                         {{ $sosmed->label }}
                                     </a>
                                 </li>
                             @endforeach
                         </ul>

                         {{-- Technical Skills --}}
                         <div class="skills-animation mt-4">
                             <h3>Technical Skills</h3>
                             <div class="skill-item">
                                 <div class="d-flex justify-content-between">
                                     <span>Web Development</span>
                                     <span>95%</span>
                                 </div>
                                 <div class="progress">
                                     <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                 </div>
                             </div>

                             <div class="skill-item">
                                 <div class="d-flex justify-content-between">
                                     <span>UI/UX Design</span>
                                     <span>85%</span>
                                 </div>
                                 <div class="progress">
                                     <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                 </div>
                             </div>

                             <div class="skill-item">
                                 <div class="d-flex justify-content-between">
                                     <span>Cloud Architecture</span>
                                     <span>90%</span>
                                 </div>
                                 <div class="progress">
                                     <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                 </div>
                             </div>

                             <div class="skill-item">
                                 <div class="d-flex justify-content-between">
                                     <span>Project Management</span>
                                     <span>80%</span>
                                 </div>
                                 <div class="progress">
                                     <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Right column with experience and education -->
                 <div class="col-lg-8 ps-4 ps-lg-5">
                     <!-- Experience Section -->
                     <div class="resume-section" data-aos="fade-up">
                         <h3>
                             <i class="bi bi-briefcase me-2"></i>Professional Experience
                         </h3>


                         {{-- BSI --}}
                         @foreach ($experiences as $exp)
                             <div class="resume-item">
                                 <h4>{{ $exp->title }}</h4>
                                 <h5>{{ $exp->startMonthYear }} – {{ $exp->endMonthYear }}</h5>
                                 <p class="company"><em>
                                         @if ($exp->client->name === $exp->client->company->name)
                                             <i class="bi bi-building"></i> {{ $exp->client->company->name }}
                                         @else
                                             <i class="bi bi-building"></i>
                                             {{ $exp->client->name }} <strong>(Client)</strong> |
                                             {{ $exp->client->company->name }}
                                         @endif
                                     </em>
                                 </p>

                                 <ul>
                                     @foreach (explode('.', trim($exp->description)) as $line)
                                         @if (trim($line))
                                             <li>{{ trim($line) }}</li>
                                         @endif
                                     @endforeach
                                 </ul>
                             </div>
                         @endforeach
                     </div>

                     <!-- Education Section -->
                     <div class="resume-section" data-aos="fade-up" data-aos-delay="100">
                         <h3><i class="bi bi-mortarboard me-2"></i>Education</h3>

                         <div class="resume-item">
                             <h4>Bachelor of Science in Physics</h4>
                             <h5>2015 - 2020</h5>
                             <p class="company"><i class="bi bi-building"></i>State University of Makassar (UNM)
                             </p>
                             <p>
                                 GPA: 3.52
                             </p>
                         </div>
                     </div>

                     <!-- Certifications Section -->
                     <div class="resume-section" data-aos="fade-up" data-aos-delay="200">
                         <h3><i class="bi bi-award me-2"></i>Certifications</h3>

                         <div class="resume-item">
                             <h4>Software AG Certified webMethods Integration Professional</h4>
                             <h5>2022 - 2025</h5>
                         </div>

                         <div class="resume-item">
                             <h4>Software AG Certified webMethods API Management Professional</h4>
                             <h5>2023 - 2026</h5>
                         </div>
                         <div class="resume-item">
                             <h4>Software AG Certified webMethods Integration Associate</h4>
                             <h5>2022</h5>
                         </div>
                         <div class="resume-item">
                             <h4>Software AG Certified webMethods API Management Associate</h4>
                             <h5>2023</h5>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- /Resume Section -->
