<?php

namespace Lifetasker;

class WorkspacesProjectsProxy extends \Core\Module {
	private $id;
	private $workspace;
	private $project;

	public function setId(int $id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}


	public function setWorkspace(int $workspace) {
		$this->workspace = $workspace;
	}

	public function getWorkspace() {
		return $this->workspace;
	}


	public function setProject(int $project) {
		$this->project = $project;
	}

	public function getProject() {
		return $this->project;
	}
}