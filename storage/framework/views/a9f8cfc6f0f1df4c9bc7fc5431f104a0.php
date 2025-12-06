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
                 

                 

                 <li>
                     <a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a>
                 </li>
             </ul>
         </nav>

         <div class="social-links text-center">
             <?php $__currentLoopData = $sosmeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sosmed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php
                     $sosmedType = $sosmed->type === 'email' ? 'mailto:' . $sosmed->href : $sosmed->href;
                 ?>

                 <a href="<?php echo e($sosmedType); ?>"><i class="<?php echo e($sosmed->icon); ?>"></i></a>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

             
             
         </div>
     </div>
 </header>
<?php /**PATH E:\resume\resources\views/components/header.blade.php ENDPATH**/ ?>