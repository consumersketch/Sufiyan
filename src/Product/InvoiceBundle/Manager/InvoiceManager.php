<?php
namespace Product\InvoiceBundle\Manager;

use Doctrine\ORM\EntityManager;

class InvoiceManager {

    /**
     *
     * @var EntityManager 
     */
    public $em;

    public function __constructor(EntityManager $entityManager)
    {
        $this->em = $entityManager;
        $this->connection = $this->em->getConnection();
    }


    public function getClient() {

		$statement = $this->connection->prepare("SELECT * FROM clients");
		$statement->execute();
		$results = $statement->fetchAll();

		return $results;
    }

}
