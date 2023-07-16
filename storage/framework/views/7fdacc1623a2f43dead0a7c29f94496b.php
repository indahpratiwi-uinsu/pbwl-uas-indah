
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA MEJA</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/meja/' .$row->meja_id)); ?>" method="post">
                    <?php echo method_field('PATCH'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="">MENU</label>
                        <select name="meja_id_menu" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($mn->menu_id); ?>"><?php echo e($mn->menu_nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NOMOR</label>
                        <input type="text" name="meja_nomor" class="form-control" value="<?php echo e($row->meja_nomor); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">STATUS</label>
                        <input type="text" name="meja_status" class="form-control" value="<?php echo e($row->meja_status); ?>">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-indah\resources\views/meja/edit.blade.php ENDPATH**/ ?>