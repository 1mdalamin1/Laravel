<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    
    <div class="shadow-md border-2 border-gray-300 py-2 bg-white mt-28">
        <div class="container mx-auto">
            <ul class="flex items-center">
                <li><a class="text-base text-red-800" href="<?php echo e(route('home')); ?>">Property</a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li>Properties</li>
            </ul>
        </div>
    </div>


    <!-- Title & Share -->
    <div class="bg-white py-8">
        <div class="container mx-auto">
            <h2 class="text-3xl text-gray-600">Properties
                <?php if(request('type') == '0'): ?>
                    - Land
                <?php elseif(request('type') == 1): ?>
                    - Apartment
                <?php elseif(request('type') == 2): ?>
                    - Villa
                <?php endif; ?>
            </h2>
        </div>
    </div>



    <!-- Content -->
    <div class="container mx-auto py-10">
        <div class="md:flex justify-between">

            
            <div class="md:w-9/12">
                <div class="flex flex-wrap -mx-3">
                    

                <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('components.single-property-card', ['property'=> $property], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                
                <?php echo e($properties->links()); ?>


            </div>



            
            <div class="md:w-3/12 md:ml-6 mt-10 md:mt-0 vertical-search-form">
                <?php echo $__env->make('components.property-search-form', ['locations' => $locations], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>


        </div>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH E:\0namica\htdocs\Laravel\civanoglu\resources\views/property/index.blade.php ENDPATH**/ ?>