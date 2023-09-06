<!-- Herda o layout padrão definido no template "main" -->

<!-- Preenche o conteúdo da seção "titulo" -->
<?php $__env->startSection('titulo'); ?> Clientes <?php $__env->stopSection(); ?>
<!-- Preenche o conteúdo da seção "conteudo" -->
<?php $__env->startSection('conteudo'); ?>

    <div class="row">
        <div class="col">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.datatable','data' => ['title' => 'Clientes','crud' => 'clientes','header' => ['id', 'nome', 'email', 'ações'],'data' => $data,'hide' => [true, false, true, false]]]); ?>
<?php $component->withName('datatable'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => 'Clientes','crud' => 'clientes','header' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['id', 'nome', 'email', 'ações']),'data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data),'hide' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([true, false, true, false])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?> 
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.main', ['titulo' => "Clientes", 'rota' => "clientes.create"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/aluno/Área de Trabalho/start-project/resources/views/clientes/index.blade.php ENDPATH**/ ?>