<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Properties')); ?>

        </h2>

        <div class="min-w-max">
            <a href="<?php echo e(route('add-property')); ?>" class="fullwidth-btn">Yeni Mülk Ekle</a>
        </div>
     <?php $__env->endSlot(); ?>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full table-auto mb-6">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">İsim</th>
                                <th class="border px-4 py-2">Konum</th>
                                <th class="border px-4 py-2">Fiyat</th>
                                <th style="width: 300px" class="border px-4 py-2">Hareketler</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="border px-4 py-2"><?php echo e($property->name); ?></td>
                                <td class="border px-4 py-2"><?php echo e($property->location->name); ?></td>
                                <td class="border px-4 py-2"><?php echo e($property->price); ?></td>
                                <td class="border px-4 py-2 text-center">
                                    
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                    <?php echo e($properties->links()); ?>

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH E:\0namica\htdocs\Laravel\civanoglu\resources\views/admin/properties.blade.php ENDPATH**/ ?>