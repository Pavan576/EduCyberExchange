<?php
// FROM HASH: 9898a8b5ca062379e1c1068705fdeebb
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Userbar Hue');
	$__finalCompiled .= '

<style>
.blockMessage.blockMessage--none {
    display: none;
}
	
.p-body-header {
    display: none;
}

.p-body-inner {
    max-width: 1300px;
}

.js-overlayClose {
    bottom: 2px;
    position: relative;
}	
</style>



' . $__templater->form('
<div class="d-flex flex-column flex-lg-row">
' . $__templater->includeTemplate('new_sidenav', $__vars) . '
<section class="content-container">
<div class="wrapper mb-3">
	<div class="main-title bg-primary">Userbar Hue Slider</div>
	<div class="main-row p-3 d-flex flex-row align-items-center">
		<div class="flex-fill">
			<div class="font-weight-bold">Customize your Userbar become colorful using this slider.</div>
		</div>
	</div>
	<div class="main-row p-3 d-flex flex-column flex-md-row">
		<div class="flex-fill mb-3 mb-md-0" style="text-align: center;">
			<div class="font-weight-bold">
				<span>Saturate</span>
				<br>
				<input type="range" name="custom_fields[saturation]" data-default="0" value="' . $__templater->escape($__vars['xf']['visitor']['Profile']['custom_fields']['saturation']) . '" min="0" max="360" step="1" id="saturation-rotate" oninput="saturationFunction(this.value)">
				<br>
				<span>Hue Filter</span>
				<br>
				<input type="range" name="custom_fields[userbarhue]" data-default="0" value="' . $__templater->escape($__vars['xf']['visitor']['Profile']['custom_fields']['userbarhue']) . '" min="0" max="360" step="1" id="hue-rotate" oninput="hueFunction(this.value)">
				<br>
				<div class="post-userbar d-none d-lg-block order-3 mb-2" id="saturate" style="filter: saturate(' . $__templater->escape($__vars['xf']['visitor']['Profile']['custom_fields']['saturation']) . '%);"> 
					<img src="https://i.postimg.cc/q7RN2f1H/Admin.png" alt="" title="" style="-webkit-filter:hue-rotate(' . $__templater->escape($__vars['xf']['visitor']['Profile']['custom_fields']['userbarhue']) . 'deg);" id="lgImage" data-original-title=""> 
				</div>
			</div>
			<div class="font-size-08 text-secondary">Preview</div>
		</div>
	</div>
</div>
	<div class="text-center">
		<input name="submit" type="submit" class="btn btn-primary" value="Save">
	</div>
</section>
</div>
', array(
		'action' => $__templater->func('link', array('account/userbarhue', ), false),
		'ajax' => 'true',
		'class' => 'block',
		'data-force-flash-message' => 'true',
	)) . '

<script>
function saturationFunction(saturationVal) {
  var setAs = saturationVal + "%"
  document.getElementById("saturate").setAttribute("style", "filter: saturate(" + setAs + ")")
}	
	
function hueFunction(hueVal) {
  var setAs = hueVal + "deg"
  document.getElementById("lgImage").setAttribute("style", "-webkit-filter:hue-rotate(" + setAs + ")")
}
</script>';
	return $__finalCompiled;
}
);