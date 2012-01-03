<?php

class ProductRepository
{
// 	public function findOneByIdJoinedToCategory($id)
// 	{
// 		$query = $this->getEntityManager()
// 		->createQuery('
// 				SELECT p, c FROM AcmeBlogBundle:Product p
// 				JOIN p.category c
// 				WHERE p.id = :id'
// 		)->setParameter('id', $id);
	
// 		try {
// 			return $query->getSingleResult();
// 		} catch (\Doctrine\ORM\NoResultException $e) {
// 			return null;
// 		}
// 	}
	
// 	public function deleteProductById($id)
// 	{
// 		$query = $this->getEntityManager()
// 		              ->createQuery('
// 		              		DELETE
// 		              		FROM AcmeBlogBundle:Product p
// 		              		WHERE p.id = :id')
// 		              ->setParameter('id', $id);
// 		try {
// 			return $query->getSingleResult();
// 		} catch (\Doctrine\ORM\NoResultException $e) {
// 			return null;
// 		}
// 	}
	
}