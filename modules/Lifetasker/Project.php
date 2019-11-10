<?php

namespace Lifetasker;

class Project extends \Core\Module {
	private $id;

	private $name;
	private $created;
	private $creator;
	private $data;
	private $metadata;

	private $workspaceProxies;
	private $taskProxies;
	private $tasks;

	public function __construct()
    {
    	$this->workspaceProxies = new \Doctrine\Common\Collections\ArrayCollection();
    	$this->taskProxies = new \Doctrine\Common\Collections\ArrayCollection();

    }

	public function setId(int $id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}


	public function setName(int $name) {
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


	public function setData(array $data) {
		$this->data = $data;
	}

	public function getData() {
		return $this->data;
	}


	public function setMetadata(array $metadata) {
		$this->metadata = $metadata;
	}

	public function getMetadata() {
		return $this->metadata;
	}
}