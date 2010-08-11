<?php
class Article {
	static function findBests() {
		try {
			return dibi::fetchAll("SELECT * FROM [article] WHERE [best]");
		} catch (DibiDriverException $e) {
			// tady dalsi zjistovani, zda se jedna o kritickou chybu
			// switch ($e->getCode())
			if (11 == $e->getCode()) {
				// tabulka je poskozena (zde se jedna o poskozeny soubor, melo by to normalne shodit cely web, ale neudelam tak)
				return array();
			} else {
				throw $e;
			}
		} 
		// samotnou DibiException necham vybublat
	}
}
