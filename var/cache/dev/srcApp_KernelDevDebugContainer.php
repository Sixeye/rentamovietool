<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGElc3h3\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGElc3h3/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGElc3h3.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGElc3h3\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGElc3h3\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'GElc3h3',
    'container.build_id' => '3c8e1dbd',
    'container.build_time' => 1550054705,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGElc3h3');