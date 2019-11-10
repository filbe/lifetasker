<?php


class AccountController extends \Core\Controller {
	public function getAction(int $id) {
		$account = new \Lifetasker\Account();
		$account->setId($id);


		$params = array("id" => $account->getId());
		return $this->render("account.html", $params);
	}	
}