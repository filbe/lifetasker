<?php

namespace Lifetasker;

class AccountsWorkspacesProxy extends \Core\Module {
	private $id;
	private $account;
	private $workspace;

	public function setId(int $id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}


	public function setAccount(int $account) {
		$this->account = $account;
	}

	public function getAccount() {
		return $this->account;
	}


	public function setWorkspace(int $workspace) {
		$this->workspace = $workspace;
	}

	public function getWorkspace() {
		return $this->workspace;
	}
}