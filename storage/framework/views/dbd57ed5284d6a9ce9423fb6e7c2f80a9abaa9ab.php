<!-- Herda o layout padrão definido no template "main" -->

<!-- Preenche o conteúdo da seção "titulo" -->
<?php $__env->startSection('titulo'); ?> Veterinarios <?php $__env->stopSection(); ?>
<!-- Preenche o conteúdo da seção "conteudo" -->
<?php $__env->startSection('conteudo'); ?>

    <div class="row">
        <div class="col">
            <?php if (isset($component)) { $__componentOriginala68791a1e42640a3d52622c9847acf728d579650 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Datalist::class, []); ?>
<?php $component->withName('datalist'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => 'Veterinarios','crud' => 'veterinarios','header' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['id', 'CRMV', 'nome', 'especialidade', 'ações']),'data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data),'hide' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([true, true, false, true, false])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala68791a1e42640a3d52622c9847acf728d579650)): ?>
<?php $component = $__componentOriginala68791a1e42640a3d52622c9847acf728d579650; ?>
<?php unset($__componentOriginala68791a1e42640a3d52622c9847acf728d579650); ?>
<?php endif; ?> 
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.main', ['titulo' => "Veterinarios", 'rota' => "veterinarios.create"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aluno/Área de Trabalho/start-project/resources/views/veterinarios/index.blade.php ENDPATH**/ ?>