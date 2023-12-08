<?php
// FROM HASH: 0cfbb79bad31b25785eff6388adc3df7
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="block" data-widget-section="onlineNow" ' . $__templater->func('widget_data', array($__vars['widget'], ), true) . '>
	<div class="responsivehide sidebarstats drop-shadow-lg" style="background-color: #212121; border-radius: calc(var(--default-border-radius) * 2 / 4); border: 0px solid #444; margin-bottom: 15px;" data-widget-section="onlineNow" ' . $__templater->func('widget_data', array($__vars['widget'], ), true) . '>
   <div style="display: flex;align-items: center;padding: 12px;border-top-left-radius: 1rem !important;border-top-right-radius: 1rem !important;">
      ' . $__templater->func('avatar', array($__vars['xf']['visitor'], 'm', false, array(
		'style' => '    width: 40px;
         height: 40px;
         border-radius: 50px;',
	))) . '
      <div style="
         margin-left: 12px;
         ">
         <div style="
            font-size: 17px;
            font-weight: 600;
            color: #7b7b7b;
            ">
            ' . $__templater->func('username_link', array($__vars['xf']['visitor'], true, array(
		'defaultname' => $__vars['fallbackName'],
		'itemprop' => 'name',
		'style' => '    font-size: 17px;
               font-weight: 600;
               color: #7b7b7b !important;',
	))) . '
         </div>
         <div style="
            font-size: 12px;
            color: #5a5a5a;
            font-weight: 600;
            "></div>
      </div>
      <div class="welcomebox" style="margin-left: auto;font-weight: 600;color: #9c8542;background-color: #1c1c1c;border-radius: 8px;display: flex;box-shadow: 0px 0px 8px #1f1f1f;align-items: center;">
         <i class="fa fa-coins user-icon" style="
            font-size: 17px;
            color: #9c8542;
            margin-right: 5px;
            padding: 6px 25px 6px 10px;
            text-align: center;
            border-radius:8px;
            "></i>
      <span style="
    padding: 0px 6px;
			 "><a href="/credits" style="color:#9c8542">';
	$__vars['viewableCurrencies'] = $__templater->method($__templater->method($__vars['xf']['app']['em'], 'getRepository', array('DBTech\\Shop:Currency', )), 'getViewableCurrencies', array());
	$__finalCompiled .= '
							';
	if (!$__templater->test($__vars['viewableCurrencies'], 'empty', array()) AND $__vars['xf']['options']['dbtech_shop_points_postbit']['0']) {
		$__finalCompiled .= '
								';
		if ($__templater->isTraversable($__vars['viewableCurrencies'])) {
			foreach ($__vars['viewableCurrencies'] AS $__vars['currency']) {
				if ($__vars['currency']['postbit']) {
					$__finalCompiled .= '
									' . $__templater->escape($__vars['currency']['prefix']) . $__templater->escape($__templater->method($__vars['currency'], 'getValueFromUser', array($__vars['user'], ))) . $__templater->escape($__vars['currency']['suffix']) . '
								';
				}
			}
		}
		$__finalCompiled .= '
																		';
	}
	$__finalCompiled .= '</a></span>
	   </div>
	   </div>
   <div style="display: flex;padding: 14px 12px 12px;text-align: center;">
      <div style="flex: 1;">
         <strong style="
            font-size: 17px;
            font-weight: 600 !important;
            "><a style="color:rgb(137,137,137)">' . $__templater->filter($__vars['xf']['visitor']['mrs_reputation_count'], array(array('number', array()),), true) . '</a></strong>
         <div style="
            font-size: 12px;
            font-weight: 600;
            margin-top: 5px;
            color: #5a5a5a;
            ">Reputation</div>
      </div>
      <div style="flex: 1;">
         <strong style="
            font-size: 17px;
            font-weight: 600 !important;
            "><a style="color:rgb(137,137,137)">' . $__templater->filter($__vars['xf']['visitor']['message_count'], array(array('number', array()),), true) . '</a></strong>
         <div style="
            font-size: 12px;
            font-weight: 600;
            margin-top: 5px;
            color: #5a5a5a;
            ">Posts</div>
      </div>
      <div style="flex: 1;">
         <strong style="
            font-size: 17px;
            color: rgb(137,137,137);
            font-weight: 600 !important;
            ">' . $__templater->filter($__vars['xf']['visitor']['reaction_score'], array(array('number', array()),), true) . '</strong>
         <div style="
            font-size: 12px;
            font-weight: 600;
            margin-top: 5px;
            color: #5a5a5a;
            ">Likes</div>
      </div>
   </div>
   <div style="display: flex;padding: 12px;text-align: center;">
      <div class="usersonlinebox" style="
         display: flex;
         flex: 1;
         background-color: #1c1c1c;
         border-radius: 8px;
         box-shadow: 0px 0px 8px #1f1f1f;
         font-weight: 600;
         align-items: center;
         font-size: 12px;
         color: #5a5a5a;
         "><i class="fa fa-globe" style="
         font-size: 16px;
         color: #5a5a5a;
         padding: 10px;
         width: auto;
         border-radius: 8px;
         "></i>&nbsp; Users Online<span style="color: green;margin-right: 12px;margin-left: auto;
         }"><strong style="
         margin-left: auto;
         ">' . $__templater->escape($__vars['online']['counts']['total']) . '</strong><br></span></div>
   </div>
</div>';
	return $__finalCompiled;
}
);