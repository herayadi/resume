 <header id="header" class="header dark-background d-flex flex-column justify-content-center">
     <i class="header-toggle d-xl-none bi bi-list"></i>

     <div class="header-container d-flex flex-column align-items-center">
         <nav id="navmenu" class="navmenu">
             <ul>
                 <li>
                     <a href="#" class="active"><i class="bi bi-house navicon"></i>Home</a>
                 </li>
                 <li>
                     <a href="#about"><i class="bi bi-person navicon"></i> About</a>
                 </li>
                 <li>
                     <a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a>
                 </li>
                 <li>
                     <a href="#skills"><i class="bi bi-hdd-stack navicon"></i> Skills</a>
                 </li>
                 {{-- <li>
                     <a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a>
                 </li> --}}

                 {{-- <li>
                     <a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a>
                 </li> --}}

                 <li>
                     <a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a>
                 </li>
             </ul>
         </nav>

         <div class="social-links text-center">
             @foreach ($sosmeds as $sosmed)
                 @php
                     $sosmedType = $sosmed->type === 'email' ? 'mailto:' . $sosmed->href : $sosmed->href;
                 @endphp

                 <a href="{{ $sosmedType }}"><i class="{{ $sosmed->icon }}"></i></a>
             @endforeach

             {{-- <a href="https://github.com/herayadi"><i class="bi bi-github"></i></a> --}}
             {{-- <a href="mailto:herirahmatsuryadi@gmail.com" class="envelope"><i class="bi bi-envelope"></i></a>
             <a href="https://www.linkedin.com/in/heri-rahmat-suryadi" class="linkedin"><i
                     class="bi bi-linkedin"></i></a> --}}
         </div>
     </div>
 </header>
