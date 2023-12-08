<?php
// FROM HASH: 8c0f066f93549fcfb9e36ac6a3699c50
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<style>
	.staffplugin .block-container {
		margin-bottom:20px; display:flex !important; flex-wrap: wrap;
	}
	.staffplugin .block-minorHeader {
		width:100%; margin-block-start: 5px; margin-block-end: 0px;
	}
	.staffplugin .block-body, .staffplugin .fafik {
		display:inline-flex; flex: 1 0 21%; justify-content:center; padding-bottom:20px;
	}
	.staffplugin .contentRow {
		display:block; text-align:center;
	}
	.staffplugin h2 {
		margin-block-start: 0.43em; margin-block-end: 0.13em;
	}
	.staffplugin .avatarsizer {
		border-radius:' . $__templater->filter($__vars['xf']['options']['usp_border'], array(array('raw', array()),), true) . ' !important;
	}
	
	@-webkit-keyframes pulse {
	  from {
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	  }

	  50% {
		-webkit-transform: scale3d(1.05, 1.05, 1.05);
		transform: scale3d(1.05, 1.05, 1.05);
	  }

	  to {
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	  }
	}

	@keyframes pulse {
	  from {
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	  }

	  50% {
		-webkit-transform: scale3d(1.05, 1.05, 1.05);
		transform: scale3d(1.05, 1.05, 1.05);
	  }

	  to {
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	  }
	}

	.pulse {
	  -webkit-animation-name: pulse;
	  animation-name: pulse;
	}

	
	.animated {
	  -webkit-animation-duration: 1s;
	  animation-duration: 1s;
	  -webkit-animation-fill-mode: both;
	  animation-fill-mode: both;
	}
	
	.username {
		font-size: 1.5rem;
	}
	
	.staffpage {
	text-align: center;
    font-size: 2rem;
    color: #fff;
	}
</style>
<h3 class="staffpage">
	Our Team
</h3>
<div class="staffplugin">
';
	if ($__templater->isTraversable($__vars['group'])) {
		foreach ($__vars['group'] AS $__vars['id'] => $__vars['groups']) {
			$__finalCompiled .= '
	
	';
			if ($__vars['groups']['display_style_priority'] > 100) {
				$__finalCompiled .= '
		<div class="block-container">
			<h3 class="block-minorHeader" style="text-transform: uppercase; color: #fff; font-weight: 700; font-size: 18px;">
				' . $__templater->escape($__vars['groups']['title']) . '
			</h3>	
		';
				if ($__templater->isTraversable($__vars['usps'])) {
					foreach ($__vars['usps'] AS $__vars['id'] => $__vars['usp']) {
						$__finalCompiled .= '		
			';
						if ($__vars['groups']['user_group_id'] == $__vars['usp']['group']) {
							$__finalCompiled .= '
				<a href="' . $__templater->escape($__vars['usp']['link']) . '" class="fafik">
					<div class="block-body">
						<div class="block-row">
							<div class="contentRow">
								<div class="contentRow-figure">
									<img src="' . $__templater->escape($__vars['usp']['avatar']) . '" class="avatarsizer">
								</div>
								<div class="contentRow-main contentRow-main--close">
									<div class="contentRow-lesser">
										<span class="username">
											' . $__templater->escape($__vars['usp']['title']) . '
										</span>
									</div>
									<div class="' . $__templater->escape($__vars['groups']['banner_css_class']) . ' message-userBanner" dir="auto" itemprop="jobTitle">
										
										';
							if ($__vars['groups']['user_title'] == null) {
								$__finalCompiled .= '
											<strong>' . $__templater->escape($__vars['groups']['title']) . '</strong>
												';
							} else {
								$__finalCompiled .= '
											<strong>' . $__templater->escape($__vars['groups']['user_title']) . '</strong>
										';
							}
							$__finalCompiled .= '
									</div>
								</div>
							</div>
						</div>
					</div>
				</a>
			';
						}
						$__finalCompiled .= '
		';
					}
				}
				$__finalCompiled .= '
	</div>
	';
			}
			$__finalCompiled .= '	
';
		}
	}
	$__finalCompiled .= '
</div>';
	return $__finalCompiled;
}
);