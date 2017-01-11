
## If else  url
EX:

#<code>
if ($type == 'CHEQUES_CESU') {
            $aideUrl = 'https://site.com';
          }

_________________________________________________________________________________________

EX:
##<code>
	 $urlObject = Url::fromRoute('faq.faq-page');
						$aideUrl = $urlObject->toString();
						if ($type == 'CHEQUES_CESU') {
							$aideUrl = 'https://site1.com';
						}
						elseif ($type == 'CHEQUES_LIRE') {
							$aideUrl = 'https://site2.com';
						}
						elseif ($type == 'CHEQUES_CULTURE') {
							$aideUrl = 'https://site3.com';
						}
						elseif ($type == 'BILLETTERIE') {
							$aideUrl = 'https://site4.com';
						}
						elseif ($type == 'AVANTAGE') {
							$aideUrl = 'https://site5.com';
						}
					}

					$variables['aide_url'] = $aideUrl;



