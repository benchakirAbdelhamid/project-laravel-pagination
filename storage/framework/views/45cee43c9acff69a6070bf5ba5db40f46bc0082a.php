
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">


</head>
<body>
<div class="container">

    <?php if( count($modules)  > 0): ?>

    <table class="table table-striped table-primary table-bordered mt-5">
        <thead class="bg-dark">
            <tr> 
                <th>Code du module</th>
                <th>titre</th>
                <th>masse horaire</th>
                <th>modifier/supprimer</th>
            </tr>
        </thead>
        <thead>
            <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td> <?php echo e($module->codeM); ?></td>
                <td> <?php echo e($module->titre); ?></td>
                <td> <?php echo e($module->MH); ?></td>
                <td> 
                    <a href="/modif/<?php echo e($module->codeM); ?>">modifier</a> 
                    <a href="/supp/<?php echo e($module->codeM); ?>">supprimer</a> 
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </thead>
    </table>
    <?php else: ?>
      <p>pas de modules dans la base do donnes</p>
    <?php endif; ?>
    <div> <?php echo e($modules->links()); ?></div>
    

    
</div>



    
</body>
</html>

<?php /**PATH C:\xampp\htdocs\project laravel pagination\resources\views/readGD.blade.php ENDPATH**/ ?>