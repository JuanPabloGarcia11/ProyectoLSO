<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Registro de usuario')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
<!--Nombres -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nombre')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
<!--Apellidos -->
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Apellidos')); ?></label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control<?php echo e($errors->has('lastname') ? ' is-invalid' : ''); ?>" name="lastname" value="<?php echo e(old('lastname')); ?>" required autofocus>

                                <?php if($errors->has('lastname')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('lastname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>                        
<!--Segundo apellido -->
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Fecha de nacimiento')); ?></label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control<?php echo e($errors->has('date') ? ' is-invalid' : ''); ?>" name="date" value="<?php echo e(old('date')); ?>" required autofocus>

                                <?php if($errors->has('date')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('date')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>  
<!--Numero -->
                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Numero telefonico')); ?></label>

                            <div class="col-md-6">
                                <input id="number" type="number" class="form-control<?php echo e($errors->has('number') ? ' is-invalid' : ''); ?>" name="number" value="<?php echo e(old('number')); ?>" required autofocus>

                                <?php if($errors->has('number')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('number')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>  

<!--Cedula -->
                        <div class="form-group row">
                            <label for="cedula" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Cedula Ciudadana')); ?></label>

                            <div class="col-md-6">
                                <input id="cedula" type="number" class="form-control<?php echo e($errors->has('cedula') ? ' is-invalid' : ''); ?>" name="cedula" value="<?php echo e(old('cedula')); ?>" required autofocus>

                                <?php if($errors->has('cedula')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('cedula')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div> 


<!-- Correo electronico -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Correo Electronico')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
<!-- Contraseña -->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contraseña')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirmar Contraseña')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
<!-- Aca van los botones-->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Registrar')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>