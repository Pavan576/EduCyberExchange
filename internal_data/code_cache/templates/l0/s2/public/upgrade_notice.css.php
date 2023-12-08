<?php
// FROM HASH: 133005ee50078067856c45417940a915
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.red_alert {
    background-color: #a12929;
    padding: 8px 12px;
    border-radius: 0.25rem;
    color: rgb(255,255,255);
    text-align: center;
	margin: 0 0 15px;
	animation: buttonPulseUpgrade 2s infinite;
}

@keyframes buttonPulseUpgrade {
	0% {
    -webkit-box-shadow: 0 0 0 0 #bf3333;
    box-shadow: 0 0 0 0 #bf3333;
}
80% {
    -webkit-box-shadow: 0 0 0 8px transparent;
    box-shadow: 0 0 0 8px transparent;
}
100% {
    -webkit-box-shadow: 0 0 0 0 transparent;
    box-shadow: 0 0 0 0 transparent;
}
}';
	return $__finalCompiled;
}
);