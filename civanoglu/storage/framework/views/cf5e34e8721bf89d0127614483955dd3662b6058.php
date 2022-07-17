<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Pages')); ?>

            </h2>

            <div class="min-w-max">
                <a href="<?php echo e(route('dashboard-page.create')); ?>" class="fullwidth-btn"><?php echo e(__('Add New Page')); ?> <i data-feather="file-plus"></i> </a>
            </div>
        </div>

     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full table-auto mb-6">
                        <thead>
                        <tr>
                            <th class="border px-4 py-2"><?php echo e(__('Name')); ?></th>
                            <th style="width: 300px" class="border px-4 py-2"><?php echo e(__('Actions')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="border px-4 py-2"><?php echo e($page->name); ?></td>
                                <td class="border px-4 py-2 text-center">
                                    <a class="bg-blue-500 text-white px-4 py-2 text-xs rounded" href="<?php echo e(route('dashboard-page.edit', $page->id)); ?>"><?php echo e(__('Edit')); ?></a>
                                    <a class="bg-green-500 text-white px-4 py-2 text-xs rounded" target="_blank" href="<?php echo e(route('page', $page->slug)); ?>" target="_blank"><?php echo e(__('View')); ?></a>
                                    <form onsubmit="return confirm('Sayfayı gerçekten silmek istiyor musunuz?');" action="<?php echo e(route('dashboard-page.destroy', $page->id)); ?>" method="post" class="inline-block"> <?php echo csrf_field(); ?> <?php echo method_field('delete'); ?>
                                        <button style="height: 27px;top:1.5px" type="submit" class="bg-red-500 text-white px-4 py-2 text-xs rounded relative"><?php echo e(__('Delete')); ?></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                    <?php echo e($pages->links()); ?>

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
<?php /**PATH E:\0namica\htdocs\Laravel\civanoglu\resources\views/admin/page/index.blade.php ENDPATH**/ ?>