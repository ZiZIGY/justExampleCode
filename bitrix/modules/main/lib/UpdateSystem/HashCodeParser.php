<? namespace Bitrix\Main\UpdateSystem;$GLOBALS['____2111204341']= array(base64_decode('YmF'.'zZTY'.'0'.'X2RlY29kZ'.'Q'.'='.'='),base64_decode('dW5zZ'.'XJpYWxpemU='),base64_decode('b3BlbnNzbF92ZXJpZnk'.'='),base64_decode('dW5zZ'.'XJpYWxpemU='));if(!function_exists(__NAMESPACE__.'\\___482732681')){function ___482732681($_1179331525){static $_214786153= false; if($_214786153 == false) $_214786153=array('YWxsb'.'3dlZF9jbGFzc2Vz',''.'aW5mbw==',''.'c2lnbmF0dXJl','c2hhMjU2'.'V2l0'.'aFJTQUVuY'.'3J5cH'.'Rp'.'b24=','aW5'.'mbw==','YWxsb3dlZF9'.'jbG'.'Fz'.'c'.'2'.'Vz','RXJ'.'y'.'b3IgdmVy'.'aW'.'Z5IG9wZW5zc2wgW0hD'.'UFAwMV'.'0'.'=','L'.'S0tLS1CRUdJ'.'Ti'.'BQVUJ'.'MSUMgS0V'.'ZLS0tL'.'S0KTU'.'lJQklqQU5CZ2t'.'x'.'aGtp'.'Rzl3MEJBUUVGQUFPQ0FR'.'OEF'.'NSUlC'.'Q2dLQ'.'0FRRUE2'.'aGN'.'4SXFpaXRVWl'.'J'.'Nd1lpd'.'WtTVQpoOXhhNWZFRFlsY2Ni'.'VzN2ajhBdmEzNXZLcV'.'Z'.'ONGl'.'COXRxQ1'.'g3'.'alU'.'4NnFB'.'YTJ2MzdtYlRG'.'Nn'.'BjWTZIR'.'1'.'BBa'.'FJG'.'CmJwb'.'nd'.'Y'.'T1k3'.'WU'.'d4QjFuU0tadkUrakFS'.'YmlMTE'.'JnWjFj'.'Rz'.'Z'.'aMGR1d'.'T'.'Vp'.'MVho'.'cEl'.'ST'.'DF'.'jTjBIaDV'.'m'.'Z'.'Xpw'.'alhDNk8KWXhZc'.'TBuVG9IVG'.'p5'.'UmIxeWN'.'6'.'d3RtaVJ'.'3WXF1ZF'.'hnL3hXe'.'HBwcX'.'dGMHR'.'Vb'.'GQzU'.'UJyM2k'.'2O'.'EI4anF'.'Nb'.'StUa'.'mR'.'l'.'QQp1L2ZnMUowSkd0'.'UjQveks0R'.'z'.'d'.'ZSk5'.'2aG'.'11aH'.'JSR2t5QVFWMFRW'.'dTVMRXV'.'nU3hqQXBSbU'.'l'.'K'.'UU5IU'.'U1L'.'MEVo'.'OT'.'N'.'3Ck1ab0ZvUHA'.'5U2dKN'.'0d'.'hRlU4a3pTK0VRY2'.'50WX'.'hiM'.'U5IVUpVSX'.'ZUZGl1UlVl'.'RktseVRkeElySD'.'ZDTC8vYXBNSDMKRndJREFRQ'.'UI'.'KLS0tLS1FT'.'k'.'QgUFVCTElDI'.'EtFWS'.'0'.'tLS'.'0t');return base64_decode($_214786153[$_1179331525]);}}; use Bitrix\Main\Application; use Bitrix\Main\Security\Cipher; use Bitrix\Main\Security\SecurityException; class HashCodeParser{ private string $_132188021; public function __construct(string $_132188021){ $this->_132188021= $_132188021;}  public function parse(){ $_1521938890= $GLOBALS['____2111204341'][0]($this->_132188021); $_1521938890= $GLOBALS['____2111204341'][1]($_1521938890,[___482732681(0) => false]); if($GLOBALS['____2111204341'][2]($_1521938890[___482732681(1)], $_1521938890[___482732681(2)], $this->__675876908(), ___482732681(3)) == round(0+0.25+0.25+0.25+0.25)){ $_326823959= Application::getInstance()->getLicense()->getHashLicenseKey(); $_1031521431= new Cipher(); $_914159917= $_1031521431->decrypt($_1521938890[___482732681(4)], $_326823959); return $GLOBALS['____2111204341'][3]($_914159917,[___482732681(5) => false]);} throw new SecurityException(___482732681(6));} private function __675876908(): string{ return ___482732681(7);}}?>