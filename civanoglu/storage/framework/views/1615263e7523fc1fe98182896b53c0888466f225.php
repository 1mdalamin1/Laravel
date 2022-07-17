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
                <li><?php echo e($page->name); ?></li>
            </ul>
        </div>
    </div>

    <!-- Title & Share -->
    <div class="bg-white py-8" style="min-height: 400px">
        <div class="container mx-auto">
            <h2 class="text-3xl text-gray-600 mb-6"><?php echo e($page->name); ?></h2>
            <div class="content"><?php echo e($page->content); ?></div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH E:\0namica\htdocs\Laravel\civanoglu\resources\views/page.blade.php ENDPATH**/ ?>