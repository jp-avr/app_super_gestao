<h3>Fornecedor</h3>

<?php if(isset($fornecedores)): ?>
    Fornecedor: <?php echo e($fornecedores[0]['nome']); ?>

    <br>
    Status: <?php echo e($fornecedores[0]['status']); ?>

    <br>
    CNPJ : <?php echo e($fornecedores[1]['cnpj'] ?? 'NÃO INFORMADO'); ?>

<?php endif; ?><?php /**PATH C:\wamp64\www\app_super_gestao\resources\views/app/fornecedores/index.blade.php ENDPATH**/ ?>