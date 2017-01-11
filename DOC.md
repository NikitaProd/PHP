
## If else  url
EX:

<code>
	 $urlObject = Url::fromRoute('faq.faq-page');
						$aideUrl = $urlObject->toString();
						if ($type == 'CHEQUES_CESU') {
							$aideUrl = 'https://ebeneficiaire.cesu-as.fr/HomePage/HomePage.aspx';
						}
						elseif ($type == 'CHEQUES_LIRE') {
							$aideUrl = 'http://cnas.adequation.com/';
						}
						elseif ($type == 'CHEQUES_CULTURE') {
							$aideUrl = 'http://cnas.adequation.com/';
						}
						elseif ($type == 'BILLETTERIE') {
							$aideUrl = 'https://www.meyclub.com/';
						}
						elseif ($type == 'AVANTAGE') {
							$aideUrl = 'https://vosavantagescnas.cba.fr/index-cheques.php';
						}
					}

					$variables['aide_url'] = $aideUrl;
</code>
