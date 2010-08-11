<?php 

/**
* Best control
*/
class BestControl extends Control
{
	/**
	 * Render control
	 *
	 * @return string
	 * @author Jiří Knesl
	 **/
	public function render()
	{
		$template = $this->createTemplate();
		$template->setFile(__DIR__ . '/BestControl.phtml');
		$template->bestArticles = $this->template->bestArticles = Article::findBests();
		return $template->render();
	}
}
