<?php

namespace Lifetasker;

class Account extends \Core\Module {
	private $id;

	private $firstname;
	private $lastname;
	private $callingname;
	private $phone;
	private $email;
	private $password;
	private $admin;
	private $language;
	private $registered;
	private $lastVisit;
	private $metadata;

	private $workspaceProxies;

	public function __construct()
    {
    	$this->workspaceProxies = new \Doctrine\Common\Collections\ArrayCollection();
        $this->registered = new DateTime();

        // default workspace for personal projects
        $workspace = new LifetaskerWorkspace();
        $workspace->setName("");
        $this->setWorkspace($workspace);
    }

	public function setId(int $id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}


	public function setFirstname(string $firstname) {
		$this->firstname = $firstname;
	}

	public function getFirstname() {
		return $this->firstname;
	}


	public function setLastname(string $lastname) {
		$this->lastname = $lastname;
	}

	public function getLastname() {
		return $this->lastname;
	}


	public function setCallingname(string $callingname) {
		$this->callingname = $callingname;
	}

	public function getCallingname() {
		return $this->callingname;
	}


	public function setPhone(string $phone) {
		$this->phone = $phone;
	}

	public function getPhone() {
		return $this->phone;
	}


	public function setEmail(string $email) {
		$this->email = $email;
	}

	public function getEmail() {
		return $this->email;
	}


	public function setPassword(string $password) {
		$this->password = $password;
	}

	public function getPassword() {
		return $this->password;
	}


	public function setAdmin(bool $admin) {
		$this->admin = $admin;
	}

	public function getAdmin() {
		return $this->admin;
	}


	public function setLanguage(string $language) {
		$this->language = $language;
	}

	public function getLanguage() {
		return $this->language;
	}


	public function setRegistered(string $registered) {
		$this->registered = $registered;
	}

	public function getRegistered() {
		return $this->registered;
	}


	public function setLastvisit(string $lastvisit) {
		$this->lastvisit = $lastvisit;
	}

	public function getLastvisit() {
		return $this->lastvisit;
	}


	public function setMetadata(array $metadata) {
		$this->metadata = $metadata;
	}

	public function getMetadata() {
		return $this->metadata;
	}


	public function setWorkspace($workspace_id) {
		if ($this->getWorkspace($workspace_id) != null) {
			throw new Exception("setWorkspace failed! workspace_id exists already", 1);
			return false;
		}
		$this->workspaces[] = $workspace;
	}

	public function getWorkspaces() {
		return $this->workspaces;
	}

	public function getWorkspace($id) {
		foreach ($this->getWorkspaces() as $workspace) {
            if ($workspace->getId() == $id) {
                return $workspace;
            }
        }
        return null;
	}
}