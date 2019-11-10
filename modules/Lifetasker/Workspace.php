<?php

namespace Lifetasker;

class Workspace extends \Core\Module {
	private $id;
	private $name;
	private $creator;
	private $created;
	private $accounts;
	private $metadata;

	private $accountProxies;
	private $projectProxies;

	public function __construct() {
		$this->name = null;
		$this->creator = null;
		$this->created = null;
		$this->accounts = new \Doctrine\Common\Collections\ArrayCollection();
		$this->metadata = null;
		$this->accountProxies = new \Doctrine\Common\Collections\ArrayCollection();
		$this->projectProxies = new \Doctrine\Common\Collections\ArrayCollection();
	}

	public function setId(int $id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}


	public function setName(string $name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}


	public function setCreated(string $created) {
		$this->created = $created;
	}

	public function getCreated() {
		return $this->created;
	}


	public function setCreator(string $creator) {
		$this->creator = $creator;
	}

	public function getCreator() {
		return $this->creator;
	}


	public function setAccount($account) {
		$this->account = $account;
	}

	public function getAccounts() {
		return $this->accounts;
	}


	public function setMetadata(array $metadata) {
		$this->metadata = $metadata;
	}

	public function getMetadata() {
		return $this->metadata;
	}
}