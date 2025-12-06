  <!-- Contact Section -->
  <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
          <h2>Contact</h2>
      </div>
      <!-- End Section Title -->

      <div class="container">
          <div class="row g-4 g-lg-5">
              <div class="col-lg-5">
                  <div class="info-box">
                      <h3>Contact Info</h3>

                      <a href="<?php echo e($user->map); ?>" class="info-item">
                          <div class="icon-box">
                              <i class="bi bi-geo-alt"></i>
                          </div>
                          <div class="content">
                              <h4>Our Location</h4>
                              <p><?php echo e($user->city); ?></p>
                          </div>
                      </a>

                      <?php $__currentLoopData = $sosmeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sosmed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php
                              $labelMap = [
                                  'email' => 'Email Us',
                                  'linkedin' => 'LinkedIn',
                                  'github' => 'GitHub',
                                  'location' => 'Our Location',
                              ];

                              $sosmedType = $sosmed->type === 'email' ? 'mailto:' . $sosmed->href : $sosmed->href;
                              $label = $labelMap[strtolower($sosmed->type)] ?? $sosmed->label;
                          ?>

                          <a href="<?php echo e($sosmedType); ?>" class="info-item">
                              <div class="icon-box">
                                  <i class="<?php echo e($sosmed->icon); ?>"></i>
                              </div>
                              <div class="content">
                                  <h4><?php echo e($label); ?></h4>
                                  <p><?php echo e($sosmed->label); ?></p>
                              </div>
                          </a>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
              </div>

              <div class="col-lg-7">
                  <div class="contact-form">
                      <h3>Get In Touch</h3>
                      <p>
                          Reach out—whether it’s a project, a question, or just to say hello.
                      </p>

                      <form action="<?php echo e(route('contact.store')); ?>" method="post" class="send-email-form">
                          <?php echo csrf_field(); ?>
                          <div class="row gy-4">
                              <div class="col-md-6">
                                  <input type="text" name="name" class="form-control" placeholder="Your Name"
                                      required="" />
                              </div>

                              <div class="col-md-6">
                                  <input type="email" class="form-control" name="email" placeholder="Your Email"
                                      required="" />
                              </div>

                              <div class="col-12">
                                  <input type="text" class="form-control" name="subject" placeholder="Subject"
                                      required="" />
                              </div>

                              <div class="col-12">
                                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                              </div>

                              <div class="col-12 text-center">
                                  <div class="loading">Loading</div>
                                  <div class="error-message"></div>
                                  <div class="sent-message">
                                      Your message has been sent. Thank you!
                                  </div>

                                  <?php if(session('success')): ?>
                                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                                          <?php echo e(session('success')); ?>

                                          <button type="button" class="btn" data-bs-dismiss="alert">Send
                                              Message</button>
                                      </div>
                                  <?php endif; ?>

                                  <button type="submit" class="btn">Send Message</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- /Contact Section -->
<?php /**PATH E:\resume\resources\views/components/section/contact.blade.php ENDPATH**/ ?>