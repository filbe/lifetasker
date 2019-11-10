<?php

namespace Lifetasker;

class Task extends \Core\Module {

	private $id;
	private $parent;
	private $children;
	private $name;
	private $deadline;
	private $created;
	private $creator;
	private $data;
	private $metadata;

	private $account;
	private $project;

	public function __construct()
    {

    }

	public function setId(int $id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}


	public function setParent($task) {
		$this->parent = $task;
	}

	public function getParent() {
		return $this->parent;
	}


	public function setChildren($children) {
		$this->children = $children;
	}

	public function getChildren() {
		return $this->children;
	}


	public function setChild($task) {
		if (getChild($task->id) != null) {
			throw new Exception("Cannot set child to task; it's already set.", 1);
			return false;
		}
		$this->children[] = $task;
	}

	public function getChild($child_id) {
		foreach ($this->getChildren() as $child) {
            if ($child->getId() == $child_id) {
                return $child;
            }
        }
        return null;
	}


	public function setDeadline(string $deadline) {
		$this->deadline = $deadline;
	}

	public function getDeadline() {
		return $this->deadline;
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