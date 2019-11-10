<?php


class DumpController extends \Core\Controller {
	public function dumpAction() {
		
		$repository  = em()->getRepository('Lifetasker\Workspace');
        $workspaces = $repository->findAll();

		$params = array("workspaces" => $workspaces);
		return $this->render("dump.html", $params);
	}	
}