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
                <li><?php echo e($property->name); ?></li>
            </ul>
        </div>
    </div>

    <!-- Title & Share -->
    <div class="bg-white py-8">
        <div class="container mx-auto">
            <h2 class="text-3xl text-gray-600"><?php echo e($property->name); ?></h2>
            <h3 class="text-lg mt-2">Price: <span class="text-red-800">
                
                <?php echo e(number_format($property->price, 2, ',', ',' )); ?> $
            </span></h3>
        </div>
    </div>

    <!-- Content -->
    <div class="container mx-auto py-10">
        <div class="md:flex md:justify-between">

            
            <div class="md:w-9/12">
                <div id="slider" class="">
                    <div class="gallery-slider mb-4">
                        <?php $__currentLoopData = $property->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div style="background-image: url(<?php echo e($gallery->name); ?>)" class="single-gallery-item bg-cover bg-center"></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="thumbnail-slider flex">
                        <?php $__currentLoopData = $property->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-thumbnail-item w-24">
                            <div style="background-image: url(<?php echo e($gallery->name); ?>)" class="bg-cover bg-center h-full w-full"></div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                
                <div class="md:flex justify-between items-center bg-white p-4 md:p-8 mt-10 shadow-sm">
                    <h4 class="text-lg md:w-2/12 mb-3 md:mb-0">Overview</h4>
                    <div class="md:border-l-2 md:border-gray-300 md:pl-5 md:ml-5 md:w-10/12 text-base">
                        <p><?php echo e($property->overview); ?></p>
                    </div>
                </div>

                
                <div class="md:flex justify-between items-center bg-white p-4 md:p-8 mt-10 shadow-sm">
                    <h4 class="text-lg md:w-2/12 mb-3 md:mb-0">Property Features</h4>
                    <div class="md:ml-2 md:w-10/12 text-base md:flex flex-wrap md:flex-auto justify-between">
                        <div class="md:flex-1 md:border-l-2 md:border-gray-300 md:ml-3 mb-2 md:mb-0 md:pl-3 self-center">
                            <ul class="flex md:block">
                                <li class="flex text-sm mb-2 mr-4 md:mr-0">
                                    <div class="flex">
                                        <span class="text-sm">Type:</span>
                                    </div>
                                    <span class="ml-2 font-bold">
                                        <?php if($property->type == 1): ?>
                                            Apartment
                                        <?php elseif($property->type == 2): ?>
                                            Villa
                                        <?php else: ?>
                                            Land
                                        <?php endif; ?>
                                    </span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><span
                                            class="text-sm">Bedrooms:</span></div>
                                    <span class="ml-2 font-bold">
                                        <?php echo e($property->bedrooms); ?>

                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="md:flex-1 md:border-l-2 md:border-gray-300 md:ml-3 mb-2 md:mb-0 md:pl-3 self-center">
                            <ul class="flex md:block">
                                <li class="flex text-sm mb-2 mr-4 md:mr-0">
                                    <div class="flex"><span
                                            class="text-sm">Bathrooms:</span></div>
                                    <span class="ml-2 font-bold"><?php echo e($property->bathrooms); ?></span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><span
                                            class="text-sm">Location:</span></div>
                                    <span class="ml-2 font-bold"><?php echo e($property->location->name); ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="md:flex-1 md:border-l-2 md:border-gray-300 md:ml-3 mb-2 md:mb-0 md:pl-3 self-center">
                            <ul class="flex md:block">
                                <li class="flex text-sm mb-2 mr-4 md:mr-0">
                                    <div class="flex"><span
                                            class="text-sm">Living space sqm:</span></div>
                                    <span class="ml-2 font-bold">327</span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><span
                                            class="text-sm">Pool</span></div>
                                    <span class="ml-2 font-bold">
                                        <?php if($property->pool == 1): ?>
                                            Private
                                        <?php elseif($property->pool == 2): ?>
                                            Public
                                        <?php elseif($property->pool == 3): ?>
                                            Both
                                        <?php else: ?>
                                            No
                                        <?php endif; ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                
                <div class="md:flex md:justify-between items-center bg-white p-4 md:p-8 mt-10 shadow-sm">
                    <h4 class="text-lg md:w-2/12 mb-3 md:mb-0">Why buy this Property</h4>
                    <div class="md:border-l-2 md:border-gray-300 md:pl-5 md:ml-5 md:w-10/12 text-base">
                        <?php echo e($property->why_buy); ?>

                    </div>
                </div>

                
                <div class="bg-white p-4 md:p-8 mt-10 shadow-sm" id="description">

                    <h2 class="font-bold mb-5 text-xl md:text-2xl"> FACILITIES &amp; LOCATION</h2>

                    <?php echo e($property->description); ?>


                </div>

            </div>



            
            <div class="md:w-3/12 mt-6 md:ml-6 md:mt-0">
                
                <div class="px-4 py-5 text-left bg-gray-300">
                    <h1 class="text-2xl font-normal leading-none mb-5">Enquire about this property</h1>

                    <?php if(Session::get('message')): ?>
                    <p class="mb-6 p-3 bg-green-100 text-green-700"><?php echo e(Session::get('message')); ?></p>
                    <?php endif; ?>

                    <form action="<?php echo e(route('property-inquiry', $property->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="">
                            <label class="inputLabel" for="name">Name <span class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="text" id="name" name="name" placeholder="First Name" value="<?php echo e(old('name')); ?>" required>

                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 mt-2 text-sm"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="phone">Phone <span
                                    class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="text" id="phone" name="phone" placeholder="Phone" value="<?php echo e(old('phone')); ?>" required>

                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 mt-2 text-sm"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="email">Email <span
                                    class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="email" id="email" name="email" placeholder="E-mail" value="<?php echo e(old('email')); ?>" required>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 mt-2 text-sm"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="message">Message <span class="text-red-800 font-serif">*</span></label>
                            <textarea class="inputField" id="message" name="message" rows="4" placeholder="I'm interested in this property" required><?php echo e(old('message')); ?></textarea>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-500 mt-2 text-sm"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mt-5">
                            <button type="submit"
                                    class="w-full border-2 uppercase text-center py-3 font-semibold border-red-800 hover:bg-transparent hover:text-red-800 duration-200  text-white bg-red-800 rounded-none"><i class="fa fa-commenting mr-2"></i>Request
                                Details</button>
                        </div>

                    </form>

                    
                </div>
            </div>


        </div>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH E:\0namica\htdocs\Laravel\civanoglu\resources\views/property/single.blade.php ENDPATH**/ ?>