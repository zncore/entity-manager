<?php

namespace ZnCore\EntityManager\Interfaces;

use ZnCore\Collection\Interfaces\Enumerable;
use ZnCore\Entity\Interfaces\EntityIdInterface;
use ZnCore\Domain\Repository\Interfaces\FindOneUniqueInterface;
use ZnCore\Domain\Repository\Interfaces\RepositoryInterface;

interface EntityManagerInterface extends TransactionInterface, FindOneUniqueInterface
{

    public function getRepository(string $entityClass): RepositoryInterface;

    public function loadEntityRelations(object $entityOrCollection, array $with): void;

    public function remove(EntityIdInterface $entity): void;

    public function persist(EntityIdInterface $entity): void;

    public function insert(EntityIdInterface $entity): void;

    public function update(EntityIdInterface $entity): void;

    public function createEntity(string $entityClassName, array $attributes = []): object;

    public function createEntityCollection(string $entityClassName, array $items): Enumerable;

}
