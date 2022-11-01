<?php $__env->startSection('content'); ?>


<!-- <?php if(!empty(Auth::user())): ?>
     <div class="flex bg-gray-100 border-b border-gray-300 py-4">
        <div class="container mx-auto flex justify-between">
            <div class="flex">
                <router-link class="mr-4" to='/' exact>Home</router-link>
                <router-link to='/about'>About</router-link>
            </div>
            <div class="flax">
                <router-link class="mr-4" to='/login' exact>Login</router-link>
                <router-link to='/register'>Register</router-link>
            </div>
        </div>
    </div>
<?php else: ?>

<div class="flex bg-gray-100 border-b border-gray-300 py-4">
        <div class="container mx-auto flex justify-between">
            <div class="flex">
                <router-link class="mr-4" to='/' exact>Home</router-link>
                <router-link to='/about'>About</router-link>
            </div>
            <div class="flax">
                <router-link class="mr-4" to='/login' exact>Login</router-link>
                <router-link to='/register'>Register</router-link>
            </div>
        </div>
    </div>

 <?php endif; ?> -->

 
   

<div class="min-h-full">
<?php if(Auth::check()): ?>
  <nav class="bg-gray-700">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="w-12" src="<?php echo e(asset('img/streamerlogo.png')); ?>" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

              <a href="/plan" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Manage Subscription</a>

              
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
          <a href="/logout" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Sign-Out</a>
            
            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>

            
             
            </div>
          </div>
        </div>
       
      </div>
    </div>

    
  </nav>
  <?php else: ?>
  <nav class="bg-gray-700">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="w-12" src="<?php echo e(asset('img/streamerlogo.png')); ?>" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              

             

              
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
          <a href="/login" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium mx-5">Login</a>
          <a href="/register" class="bg-blue-500 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Register</a>
          </div>
        </div>
       
      </div>
    </div>

    
  </nav>
  <?php endif; ?>
  
  <main>
    
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
        <div class="h-96">
        <router-view></router-view>
        </div>
      </div>
     
  </main>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\streamlab\resources\views/app.blade.php ENDPATH**/ ?>