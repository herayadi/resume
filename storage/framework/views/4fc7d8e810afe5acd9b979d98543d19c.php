  <!-- About Section -->
  <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
              <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                  <div class="profile-card">
                      <div class="profile-header">
                          <div class="profile-image">
                              <img src="assets/img/profile/heri.jpg" alt="Profile Heri" class="img-fluid" />
                          </div>
                          <div class="profile-badge">
                              <i class="bi bi-check-circle-fill"></i>
                          </div>
                      </div>

                      <div class="profile-content">
                          <h3><?php echo e($user->name); ?></h3>
                          <?php $__currentLoopData = explode(',', $user->role); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <p class="profession"><?php echo e(trim($role)); ?></p>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          

                          <div class="contact-links">
                              <?php $__currentLoopData = $sosmeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sosmed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php
                                      $sosmedType =
                                          $sosmed->type === 'email' ? 'mailto:' . $sosmed->href : $sosmed->href;
                                  ?>

                                  <a href="<?php echo e($sosmedType); ?>" class="contact-item">
                                      <i class="<?php echo e($sosmed->icon); ?>"></i>
                                      <?php echo e($sosmed->label); ?>

                                  </a>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                              <a href="<?php echo e($user->map); ?>" class="contact-item">
                                  <i class="bi bi-geo-alt"></i>
                                  <?php echo e($user->city); ?>

                              </a>
                          </div>

                      </div>
                  </div>
              </div>

              <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
                  <div class="about-content">
                      <div class="section-header">
                          <span class="badge-text">Get to Know Me</span>
                          <h2>Optimizing Business Workflows with High-Performance Middleware Solutions</h2>
                      </div>

                      <div class="description">
                          <p>
                              Middleware Developer with a proven ability to design and integrate APIs, manage enterprise
                              service bus (ESB) systems, and streamline complex workflows. Specialized in webMethods,
                              supported by industry certifications and practical expertise in enterprise integration.
                              Adept at building API-driven solutions, executing data migration strategies, and enhancing
                              overall system performance.
                          </p>

                      </div>

                      <div class="details-grid">
                          <div class="detail-row">
                              <div class="detail-item">
                                  <span class="detail-label">Specialization</span>
                                  <span class="detail-value">Webmethods Developer &amp; API Developer</span>
                              </div>
                              <div class="detail-item">
                                  <span class="detail-label">Experience Level</span>
                                  <span class="detail-value">Middle Professional</span>
                              </div>
                          </div>
                          <div class="detail-row">
                              <div class="detail-item">
                                  <span class="detail-label">Education</span>
                                  <span class="detail-value">Physics, UNM</span>
                              </div>
                              <div class="detail-item">
                                  <span class="detail-label">Languages</span>
                                  <span class="detail-value">Bahasa Indonesia, English</span>
                              </div>
                          </div>
                      </div>

                      <div class="cta-section">
                          <a href="#" class="btn btn-primary">
                              <i class="bi bi-download"></i>
                              Download Resume
                          </a>
                          <a href="#contact" class="btn btn-outline">
                              <i class="bi bi-chat-dots"></i>
                              Let's Talk
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- /About Section -->
<?php /**PATH E:\resume\resources\views/components/section/about.blade.php ENDPATH**/ ?>