<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOVCJJdz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOVCJJdz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOVCJJdz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOVCJJdz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOVCJJdz\App_KernelDevDebugContainer([
    'container.build_hash' => 'OVCJJdz',
    'container.build_id' => '36722576',
    'container.build_time' => 1669034409,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOVCJJdz');
